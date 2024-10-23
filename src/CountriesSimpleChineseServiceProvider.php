<?php
    
    namespace Squire;
    
    use Illuminate\Support\ServiceProvider;
    use Squire\Models\Country;
    
    class CountriesSimpleChineseServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            Repository::registerSource(Country::class, 'zh_cn', __DIR__ . '/../resources/data.csv');
        }
    }
