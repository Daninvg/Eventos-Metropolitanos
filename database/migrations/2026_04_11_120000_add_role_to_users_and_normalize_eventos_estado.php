<?php

use App\Enums\EventoEstado;
use App\Enums\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('role', 20)->default(UserRole::USER->value)->after('password');
            });
        }

        if (Schema::hasColumn('eventos', 'estado')) {
            $driver = DB::getDriverName();

            if ($driver === 'mysql') {
                DB::statement("ALTER TABLE eventos MODIFY estado VARCHAR(20) NOT NULL DEFAULT 'proximamente'");
            }

            if ($driver === 'pgsql') {
                DB::statement('ALTER TABLE eventos ALTER COLUMN estado TYPE VARCHAR(20) USING estado::text');
                DB::statement("ALTER TABLE eventos ALTER COLUMN estado SET DEFAULT 'proximamente'");
            }

            DB::table('eventos')->update([
                'estado' => DB::raw("CASE WHEN estado IN ('1', 1, true, 'true', 'activo') THEN '".EventoEstado::ACTIVO->value."' ELSE '".EventoEstado::PROXIMAMENTE->value."' END"),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'role')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('role');
            });
        }
    }
};
