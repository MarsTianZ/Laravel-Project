<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Payment;
use App\Models\Studio;
use App\Models\StudioSeat;
use App\Models\User;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function backToMoviesList(){
        return redirect()->route('movie_list_page');
    }
    public function showMoviesPage(Request $request)
    {
        $moviesData = Movie::select('movie_title', 'movie_poster', 'movie_ratings', 'movie_slug')->get();
        return view('movies.movieslist', ["movies" => $moviesData]);
    }
    public function showMovieDetailsPage(Request $request, string $slug)
    {
        $movieData = Movie::where('movie_slug', $slug)
            ->join('movie_producers', 'movies.movie_producers_id', '=', 'movie_producers.movie_producers_id')
            ->join('movie_directors', 'movies.movie_directors_id', '=', 'movie_directors.movie_directors_id')
            ->join('movie_writers', 'movies.movie_writers_id', '=', 'movie_writers.movie_writers_id')
            ->join('movie_productions_studio', 'movies.movie_productions_studio_id', '=', 'movie_productions_studio.movie_productions_studio_id')
            ->join('movie_casts', 'movies.movie_casts_id', '=', 'movie_casts.movie_casts_id')
            ->select('movies.*', 'movie_producers.*', 'movie_directors.*', 'movie_writers.*', 'movie_productions_studio.*', 'movie_casts.*')
            ->first();

        return view('movies.moviedetails', ["movie" => $movieData]);
    }

    public function showStudioPage(Request $request, string $slug)
    {
        $studioData = Studio::where('movie_slug', $slug)->select("studio_name", "studio_status", "studio_seat_count", "studio_seat_empty", "studio_seat_filled", "studio_slug")->get();
        return view("movies.studios.moviestudios", ["studios" => $studioData, "movie_slug" => $slug]);
    }
    public function showStudioDetailsPage(Request $request, string $slug, string $studio_slug)
    {
        $studio = Studio::where('studio_slug', $studio_slug)->first();
        // dd($studio);
        $seats = StudioSeat::where('studio_id', $studio->studio_id)->get();
        return view("movies.studios.studiochooseseat", ["studio" => $studio, "seats" => $seats, "movie_slug" => $slug, "studio_slug" => $studio_slug]);
    }
    public function generatePaymentId()
    {
        $lastPayment = Payment::orderBy('payment_id', 'desc')->first();
        if ($lastPayment) {
            $paymentId = substr($lastPayment->payment_id, 1) + 1;
            return 'T' . str_pad($paymentId, 5, '0', STR_PAD_LEFT);
        } else {
            return 'T00001';
        }
    }
    public function ticketPayment(Request $request, string $slug, string $studio_slug)
    {
        // check if seats is still `TERSEDIA`
        $request->validate([
            'seats' => 'required|string',
            'payment' => 'required|string',
        ]);


        $seats = explode(',', $request->seats);


        $paymentMethod = $request->payment;
        $movie = Movie::where('movie_slug', $slug)->first();
        $studio = Studio::where('studio_slug', $studio_slug)->first();
        for ($i = 0; $i < count($seats); $i++) {
            $seat = StudioSeat::where('studio_id', $studio->studio_id)->where('seat_number', $seats[$i])->first();
            if ($seat->seat_status != "TERSEDIA") {
                return view("movies.studios.paymentfailed");
            }
        }
        $payments = [];
        for ($i = 0; $i < count($seats); $i++) {
            $seat = StudioSeat::where('studio_id', $studio->studio_id)->where('seat_number', $seats[$i])->first();
            if ($seat->seat_status != "TERSEDIA") {
                return view("movies.studios.paymentfailed");
            }
            $seat = $seat->update(['seat_status' => "TERJUAL"]);
            $newPayment = Payment::create([
                'payment_id' => $this->generatePaymentId(),
                'nama' => auth()->user()->username,
                'user_id' => auth()->user()->id,
                'jenis_pembayaran' => $paymentMethod,
                'status_pembayaran' => "LUNAS",
                "movie_id" => $movie->movie_id,
                "studio_id" => $studio->studio_id,
                "seat_number" => $seats[$i],
                "seat_id" => $seat->studio_seats_id,
                "total" => $movie->movie_price,
            ]);
            array_push($payments, $newPayment);
        }

        return view("movies.studios.paymentreceipt", ["payments" => $payments]);
    }
}
