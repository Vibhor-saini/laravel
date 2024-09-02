<?php

namespace App\Http\Controllers;

use App\Models\Party;

class Eloquent_ORM extends Controller
{
    public function ORM()
    {

        //-----------------------------------INSERT DATA------------------------------------------------------------------------
        //Insert Option 1--------------------------
        $party = new Party(); //When you're inserting a new record into the database, you need to create a new instance of the model
        $party->name="Vikash Saini";
        $party->email="Vikash@gmail.com";
        $party->save();


        //Insert Option 2--------------------------
        // $data = [
        //     "name" => "Vishu",
        //     "email" => "vishu@gmail.com",
        //     "city" => "saharanpur"
        // ];

        // Party::create($data);


        //--------------------------------------READ DATA---------------------------------------------------------------------

        //READ DATA 
        //$party = Party::all();
        //dd($party);

        //To find and retrieve data for a specific record by its ID--------------------------
        //$party = Party::find(5); 
        //$party = Party::where('id', 10)->first();
        // if ($party) {
        //     echo 'Name: ' . $party->name . '<br>';
        //     echo 'Email: ' . $party->email . '<br>';
        //     echo 'City: ' . $party->city . '<br>';
        // } else {
        //     echo 'Party not found';
        // }


        //$party = Party::where('city', 'Saharanpur')->get(); // Retrieve all records where the city is 'Saharanpur'
        //$party = Party::get(); // Retrieve all records
        // Display the data
        //dd($party);

        //     $party = Party::select('name', 'email')->get(); //You can specify which columns to retrieve using select():
        //     // Loop through and display the data
        //     foreach ($party as $party) {
        //         echo 'Name: ' . $party->name . '<br>';
        //         echo 'Email: ' . $party->email . '<br>';
        //     }

        // }

        // // Retrieve all records where city is 'Saharanpur' and email is 'vibhor@gmail.com'--------------------------
        // $parties = Party::where('city', 'saharanpur')
        //     ->where('email', 'vishu@gmail.com')
        //     ->get();

        // // Loop through and display the data
        // foreach ($parties as $party) {
        //     echo 'Name: ' . $party->name . '<br>';
        //     echo 'Email: ' . $party->email . '<br>';
        //     echo 'City: ' . $party->city . '<br>';
        // }

        // $party = Party::where('city', 'Saharanpur')->paginate(10); // 10 records per page--------------------------
        // foreach ($party as $party) {
        //             echo 'Name: ' . $party->name . '<br>';
        //             echo 'Email: ' . $party->email . '<br>';
        //       }  

        //--------------------------------------UPDATE DATA---------------------------------------------------------------------

        // Find the record you want to UPDATE--------------------------
        $party = Party::find(6); // Replace 1 with the actual ID

        if ($party) {
            // Update the attributes
            $party->name = "Vibhor Saini Tosyan";
            $party->email = "Tosyan@example.com";

            // Save the changes
            $party->save();
        }

        //OR

        // if ($party) {
        //     // Fill the model with the new attributes
        //     $party->fill([
        //         'name' => 'Shubham',
        //         'email' => 'Shubham@example.com'
        //     ]);

        //     // Save the changes
        //     $party->save();
        // }


        //Update record(s) where the city is 'Saharanpur'--------------------------
        // $data = [
        //     "name" => "Vibhu Saini",
        //     "email" => "vibhu@gmail.com",
        //     "city" => "Roorkee"
        // ];

        // Party::where('city', 'saharanpur')->update($data);



        // Update all records where city is 'Saharanpur'// Update all records where city is 'Saharanpur'--------------------------
        // Party::where('city', 'Saharanpur')->update(['city' => 'Delhi']);

        // Party::where('city', NULL)->update(['city' => 'Delhi']);
        // return "Eloquent_ORM";

        //-------------------------------------------DELETE DATA----------------------------------------------------------------


        // Find the record you want to delete
        // $party = Party::find(5); // Replace 1 with the actual ID

        // if ($party) {
        //     $party->delete();
        //     echo "Record deleted successfully.";
        // } else {
        //     echo "Record not found.";
        // }

        // Delete the record with ID 1-----------------------------------------
        //Party::destroy(4);

        // Delete multiple records
        //Party::destroy([1, 2, 3]);

        // Delete all records where the city is 'Saharanpur'
        //Party::where('city', 'Saharanpur')->delete();



        // Find the record you want to force delete
        // $party = Party::withTrashed()->find(1); // Use withTrashed() to include soft deleted records

        // if ($party) {
        //     $party->forceDelete();
        //     echo "Record permanently deleted.";
        // }
    }
}
