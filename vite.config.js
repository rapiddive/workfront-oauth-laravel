
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Resources paths
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
            
                // Resources assets js file paths
                'resources/assets/js/accordion',
                'resources/assets/js/apexchart-custom',
                'resources/assets/js/apexcharts',
                'resources/assets/js/app-calendar',
                'resources/assets/js/chart',
                'resources/assets/js/charts',
                'resources/assets/js/chat',
                'resources/assets/js/chat2',
                'resources/assets/js/checkout-jquery-steps',
                'resources/assets/js/colorpicker',
                'resources/assets/js/contact',
                'resources/assets/js/cookie',
                'resources/assets/js/datatables',
                'resources/assets/js/daterange',
                'resources/assets/js/daterangepicker',
                'resources/assets/js/echarts',
                'resources/assets/js/file-upload',
                'resources/assets/js/filupload',
                'resources/assets/js/flot',
                'resources/assets/js/form-editor',
                'resources/assets/js/form-editor2',
                'resources/assets/js/form-elements',
                'resources/assets/js/form-wizard',
                'resources/assets/js/form-wizard2',
                'resources/assets/js/form-wizard-rtl',
                'resources/assets/js/fullcalendar',
                'resources/assets/js/gallery',
                'resources/assets/js/image-comparision',
                'resources/assets/js/img-crop',
                'resources/assets/js/index1',
                'resources/assets/js/invoice',
                'resources/assets/js/jvectormap',
                'resources/assets/js/map-leafleft',
                'resources/assets/js/mapelmaps',
                'resources/assets/js/morris',
                'resources/assets/js/notifications',
                'resources/assets/js/popover',
                'resources/assets/js/rangeslider',
                'resources/assets/js/rounded-barchart',
                'resources/assets/js/select2',
                'resources/assets/js/session',
                'resources/assets/js/stiky',
                'resources/assets/js/sweet-alert',
                'resources/assets/js/tabs',
                'resources/assets/js/timeline',
                'resources/assets/js/tooltip',
                'resources/assets/js/vertical-scroll',
                'resources/assets/js/widgets',
                'resources/assets/js/themeColors',
                'resources/assets/switcher/js/switcher',
            
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/images/', 'resources/assets/plugins/',  'resources/assets/iconfonts/', 'resources/assets/landing/', 
                'resources/assets/js/sticky.js', 'resources/assets/js/counterup.js', 'resources/assets/js/formelementadvnced.js',
                'resources/assets/js/form-vallidations.js', 'resources/assets/js/jquery.bootstrap.newsbox.js', 'resources/assets/js/alerts.js',  
                'resources/assets/js/chart.flot.sampledata.js', 'resources/assets/js/dashboard.sampledata.js', 'resources/assets/js/app-calendar-events.js',]),
                dest: 'assets/'
              }
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
