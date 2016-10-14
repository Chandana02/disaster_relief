<?php

use Illuminate\Database\Seeder;
use App\Areas;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$area1 = new Areas();
    	$area1->state = "Andhra Pradesh";
    	$area1->city = "Vijayawada";
    	$area1->area = "Vijayawada";
    	$area1->save();

    	$area2 = new Areas();
    	$area2->state = "Arunachal Pradesh";
    	$area2->city = "Itanagar";
    	$area2->area = "Itanagar";
    	$area2->save();

    	$area3 = new Areas();
    	$area3->state = "Assam";
    	$area3->city = "Dispur";
    	$area3->area = "Dispur";
    	$area3->save();

    	$area4 = new Areas();
    	$area4->state = "Bihar";
    	$area4->city = "Patna";
    	$area4->area = "Patna";
    	$area4->save();

    	$area5 = new Areas();
    	$area5->state = "Chhattisgarh";
    	$area5->city = "Raipur";
    	$area5->area = "Raipur";
    	$area5->save();

    	$area6 = new Areas();
    	$area6->state = "Goa";
    	$area6->city = "Panaji";
    	$area6->area = "Panaji";
    	$area6->save();

    	$area7 = new Areas();
    	$area7->state = "Gujarat";
    	$area7->city = "Gandhinagar";
    	$area7->area = "Gandhinagar";
    	$area7->save();

    	$area8 = new Areas();
    	$area8->state = "Haryana";
    	$area8->city = "Chandigarh";
    	$area8->area = "Chandigarh";
    	$area8->save();

    	$area9 = new Areas();
    	$area9->state = "Himachal Pradesh";
    	$area9->city = "Shimla";
    	$area9->area = "Shimla";
    	$area9->save();

    	$area10 = new Areas();
    	$area10->state = "Jammu and Kashmir";
    	$area10->city = "Srinagar";
    	$area10->area = "Srinagar";
    	$area10->save();

    	$area11 = new Areas();
    	$area11->state = "Jharkhand";
    	$area11->city = "Ranchi";
    	$area11->area = "Ranchi";
    	$area11->save();

    	$area12 = new Areas();
    	$area12->state = "Karnataka";
    	$area12->city = "Bengaluru";
    	$area12->area = "Bengaluru";
    	$area12->save();

    	$area13 = new Areas();
    	$area13->state = "Kerala";
    	$area13->city = "Thiruvananthapuram";
    	$area13->area = "Thiruvananthapuram";
    	$area13->save();

    	$area14 = new Areas();
    	$area14->state = "Madhya Pradesh";
    	$area14->city = "Bhopal";
    	$area14->area = "Bhopal";
    	$area14->save();

    	$area15 = new Areas();
    	$area15->state = "Maharashtra";
    	$area15->city = "Mumbai";
    	$area15->area = "Mumbai";
    	$area15->save();

    	$area16 = new Areas();
    	$area16->state = "Manipur";
    	$area16->city = "Imphal";
    	$area16->area = "Imphal";
    	$area16->save();

    	$area17 = new Areas();
    	$area17->state = "Meghalaya";
    	$area17->city = "Shillong";
    	$area17->area = "Shillong";
    	$area17->save();

    	$area18 = new Areas();
    	$area18->state = "Mizoram";
    	$area18->city = "Aizwal";
    	$area18->area = "Aizwal";
    	$area18->save();

    	$area19 = new Areas();
    	$area19->state = "Nagaland";
    	$area19->city = "Kohima";
    	$area19->area = "Kohima";
    	$area19->save();

    	$area20 = new Areas();
    	$area20->state = "Odisha";
    	$area20->city = "Bhubaneswar";
    	$area20->area = "Bhubaneswar";
    	$area20->save();

    	$area21 = new Areas();
    	$area21->state = "Punjab";
    	$area21->city = "Chandigarh";
    	$area21->area = "Chandigarh";
    	$area21->save();

    	$area22 = new Areas();
    	$area22->state = "Rajasthan";
    	$area22->city = "Jaipur";
    	$area22->area = "Jaipur";
    	$area22->save();

    	$area23 = new Areas();
    	$area23->state = "Sikkim";
    	$area23->city = "Gangtok";
    	$area23->area = "Gangtok";
    	$area23->save();

    	$area24 = new Areas();
    	$area24->state = "Tamil Nadu";
    	$area24->city = "Chennai";
    	$area24->area = "Chennai";
    	$area24->save();

    	$area25 = new Areas();
    	$area25->state = "Telangana";
    	$area25->city = "Hyderabad";
    	$area25->area = "Hyderabad";
    	$area25->save();

    	$area26 = new Areas();
    	$area26->state = "Tripura";
    	$area26->city = "Agartala";
    	$area26->area = "Agartala";
    	$area26->save();

    	$area27 = new Areas();
    	$area27->state = "Uttar Pradesh";
    	$area27->city = "Kanpur";
    	$area27->area = "Kanpur";
    	$area27->save();

    	$area28 = new Areas();
    	$area28->state = "Uttarakhand";
    	$area28->city = "Dehradun";
    	$area28->area = "Dehradun";
    	$area28->save();

    	$area29 = new Areas();
    	$area29->state = "West Bengal";
    	$area29->city = "Kolkata";
    	$area29->area = "Kolkata";
    	$area29->save();
    }
}
