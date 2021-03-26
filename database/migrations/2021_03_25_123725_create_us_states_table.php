<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('us_states', function (Blueprint $table) {
            $table->id();
            $table->string('state_name');
            $table->string('state_code');
            $table->timestamps();
        });
		
		DB::table('us_states')->insert(
        array(
            [
				'state_name' => 'Armed Forces America',
				'state_code' => 'AA'
			],
			[
				'state_name' => 'Armed Forces',
				'state_code' => 'AE'
			],
			[
				'state_name' => 'Alaska',
				'state_code' => 'AK'
			],[
				'state_name' => 'Alabama',
				'state_code' => 'AL'
			],[
				'state_name' => 'Armed Forces Pacific',
				'state_code' => 'AP'
			],[
				'state_name' => 'Arkansas',
				'state_code' => 'AR'
			],[
				'state_name' => 'Arizona',
				'state_code' => 'AZ'
			],
			[
				'state_name' => 'California',
				'state_code' => 'CA'
			],[
				'state_name' => 'Colorado',
				'state_code' => 'CO'
			],[
				'state_name' => 'Connecticut',
				'state_code' => 'CT'
			],[
				'state_name' => 'Washington DC',
				'state_code' => 'DC'
			],[
				'state_name' => 'Delaware',
				'state_code' => 'DE'
			],[
				'state_name' => 'Florida',
				'state_code' => 'FL'
			],
			[
				'state_name' => 'Georgia',
				'state_code' => 'GA'
			],[
				'state_name' => 'Guam',
				'state_code' => 'GU'
			],[
				'state_name' => 'Hawaii',
				'state_code' => 'HI'
			],[
				'state_name' => 'Iowa',
				'state_code' => 'IA'
			],[
				'state_name' => 'Idaho',
				'state_code' => 'ID'
			],[
				'state_name' => 'Illinois',
				'state_code' => 'IL'
			],
			[
				'state_name' => 'Indiana',
				'state_code' => 'IN'
			],[
				'state_name' => 'Kansas',
				'state_code' => 'KS'
			],[
				'state_name' => 'Kentucky',
				'state_code' => 'KY'
			],[
				'state_name' => 'Louisiana',
				'state_code' => 'LA'
			],[
				'state_name' => 'Massachusetts',
				'state_code' => 'MA'
			],[
				'state_name' => 'Maryland',
				'state_code' => 'MD'
			],
			[
				'state_name' => 'Maine',
				'state_code' => 'ME'
			],[
				'state_name' => 'Michigan',
				'state_code' => 'MI'
			],[
				'state_name' => 'Minnesota',
				'state_code' => 'MN'
			],[
				'state_name' => 'Missouri',
				'state_code' => 'MO'
			],[
				'state_name' => 'Mississippi',
				'state_code' => 'MS'
			],[
				'state_name' => 'Montana',
				'state_code' => 'MT'
			],
			[
				'state_name' => 'North Carolina',
				'state_code' => 'NC'
			],[
				'state_name' => 'North Dakota',
				'state_code' => 'ND'
			],[
				'state_name' => 'Nebraska',
				'state_code' => 'NE'
			],[
				'state_name' => 'New Hampshire',
				'state_code' => 'NH'
			],[
				'state_name' => 'New Jersey',
				'state_code' => 'NJ'
			],[
				'state_name' => 'New Mexico',
				'state_code' => 'NM'
			]
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('us_states');
    }
}
