### Note
Buka ***AppServiceProvider.php***, Lokasinya app/providers

    public function boot(): void
        {
            //
            View::composer('*', function ($view) {
                //$view->with('globalurl', 'https://profile.pt-sena.co.id/upload/image/');
                $view->with('globalurl', 'http://127.0.0.1:8000/upload/image/');
            });
        }

Ganti http://127.0.0.1:8000 sesuai dengan alamat website dashboard
