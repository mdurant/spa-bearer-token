<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LocationController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $locations = Location::all();

        return response()->json([
            'status' => 'success',
            'data' => $locations
        ], 200);
    }
    /**
     * En caso de paginación

return response()->json([
     'status' => 'success',
     'data' => $locations->items(), // Obtiene solo los items actuales
     'pagination' => [
     'total' => $locations->total(),
     'per_page' => $locations->perPage(),
     'current_page' => $locations->currentPage(),
     'last_page' => $locations->lastPage(),
     'next_page_url' => $locations->nextPageUrl(),
     'prev_page_url' => $locations->previousPageUrl(),
     ]
     ], 200);
 */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
