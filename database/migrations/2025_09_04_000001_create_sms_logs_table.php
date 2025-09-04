<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sms_logs', function (Blueprint $table) {
            $table->integer('loan_id')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->text('message')->nullable();
            $table->enum('sent_status', ['sent', 'not sent'])->nullable();
            $table->text('reason')->nullable();
            $table->timestamp('sent_at')->useCurrent()->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('sms_logs', function (Blueprint $table) {
            $table->dropColumn([
                'loan_id',
                'applicant_name',
                'phone_number',
                'message',
                'sent_status',
                'reason',
                'sent_at',
            ]);
        });
    }
};
