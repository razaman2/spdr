<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class Etf extends Migration
    {
        /**
         * Run the migrations.
         * @return void
         */
        public function up() {
            Schema::create('etfs', function(Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('country_weights');
                $table->text('sector_weights');
                $table->text('etf_name');
                $table->text('fund_description');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        /**
         * Reverse the migrations.
         * @return void
         */
        public function down() {
            Schema::dropIfExists('etfs');
        }
    }
