<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img')->nullable();
            $table->string('vedio_link');
            $table->text('description');
            $table->string('sex');
            $table->date('start_at');
            $table->date('end_at');

            $table->string('course_payment');
            $table->string('course_mony');
            $table->string('certificate_title')->nullable();
            $table->string('certificate_from')->nullable();
            $table->boolean('certificate_payment')->nullable();
            $table->string('certificate_mony')->nullable();
            $table->text('wellcome_massage');
            $table->boolean('approve')->nullable();
            $table->text('approve_massage')->nullable();
            $table->foreignId('lecturer_id')->constrained('lecturers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
