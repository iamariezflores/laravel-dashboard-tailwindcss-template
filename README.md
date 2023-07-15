## Laravel Dashboard with TailwindCSS

This Dashboard is based on this layout [Github](https://github.com/fireclint/nextjs-dashboard-tailwind). I've modified some of the TailwindCSS to suit my need.

# Requirements
1. Composer 2.5.8 or Higher
2. Node v16.13.1
3. You should have a local webserver installed with PHP of atleast version 8.0.

# Getting Started

1. Clone this Repository.
2. Run ```npm install``` to install dependencies.
3. Run ```npm run dev``` to compile CSS.
4. and finally Run ```php artisan serve```.

# Dependencies

1. Icons are provided by **blade-google-material-design-icons** found here [Github](https://github.com/codeat3/blade-google-material-design-icons).
2. Chart is provided by ChartJS via here [CDN](https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js).
3. Tab Layout on settings is provided by [TailwindElements](https://tailwind-elements.com/).

# Structure

1. Main layout is at ``` resources\views\layouts\app.blade.php ``` all other blade files extends from this.
2. Sidebar layout is at ``` resources\views\layouts\sidebar.blade.php ```



