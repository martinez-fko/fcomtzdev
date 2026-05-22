<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Illuminate\Support\HtmlString;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WidgetUsers extends StatsOverviewWidget
{

    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total',
                new HtmlString('
                    <div
                        x-data="{
                            count: 0,
                            target: ' . User::whereHas('role', fn ($q) =>
                                            $q->where('name', '!=', 'Superusuario')
                                        )->count() . '
                        }"
                        x-init="
                            let start = 0;
                            let duration = 1000;
                            let startTime = performance.now();

                            function update(currentTime) {
                                let elapsed = currentTime - startTime;
                                let progress = Math.min(elapsed / duration, 1);

                                count = Math.floor(progress * target);

                                if (progress < 1) {
                                    requestAnimationFrame(update);
                                } else {
                                    count = target;
                                }
                            }

                            requestAnimationFrame(update);
                        "
                        x-text="count"
                    ></div>
                ')
            )
            ->description('Usuarios registrados')
            ->descriptionIcon('heroicon-m-users')
            ->extraAttributes([
                'class' => 'bg-green-500 text-white',
            ])
        ];
    }
}
