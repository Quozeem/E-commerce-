<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
       use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
      
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
     <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QRCodeController extends Controller
{
    public function generate(Request $request)
    {
        // Get the data for the QR code from the request
        $data = $request->input('data', 'Default data');

        // API endpoint for QR code generation
        $apiEndpoint = 'https://www.qrcode-monkey.com/qrcode/api/qr';

        // Make a POST request to the API endpoint
        $response = Http::post($apiEndpoint, [
            'data' => $data,
            // You can add more parameters like color, size, etc. as required by the API
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            // Get the QR code image URL from the API response
            $qrCodeUrl = $response->json('imageUrl');

            return response()->json(['qr_code_url' => $qrCodeUrl]);
        } else {
            // Handle the error case appropriately
            return response()->json(['error' => 'QR code generation failed'], 500);
        }
    }
}

    protected $hidden = [
        'password',
        'remember_token',
    ];
  public function coinbase():HasMany
    {
     
        return $this->hasMany(Coinbase::class,'user_id') ->where('status','!=','Success');
    }
     
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
