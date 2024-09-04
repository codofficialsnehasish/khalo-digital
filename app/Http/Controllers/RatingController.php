<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\UserRating;

class RatingController extends Controller
{
    public function get_current_ratings(){
        $rating = UserRating::find(1);
        $last_update_time = Carbon::parse($rating->last_update_time);
        $currentTime = Carbon::now(); 
        $duration = 5; // Increment After 5 minute

        $elapsedTime = $last_update_time->diffInMinutes($currentTime);

        $intervalsPassed = $duration > 0 ? floor($elapsedTime / $duration) : 0;

        // Calculate the increment based on the number of intervals
        $increment = $intervalsPassed * 2;

        if ($intervalsPassed > 0) {
            $rating->users_count += $increment;
            $rating->last_update_time = $currentTime;
            $rating->update();
        }

        return response()->json($rating);
    }
}
