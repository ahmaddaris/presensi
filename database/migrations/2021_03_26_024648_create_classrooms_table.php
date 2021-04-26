<?php

use App\Classroom;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->on('programs')->onDelete('cascade');
            $table->string('name');
            $table->text('detail');
            $table->timestamps();
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->using(ClassroomUser::class)->withTimeStamps();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
