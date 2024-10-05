import theme from 'tailwindcss/defaultTheme'
import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/**/*.js',
        './vendor/filament/**/*.blade.php',
    ],

    // theme: {
    //     fontSize: {
    //         'xs': '0.75rem',
    //         'sm': '1rem',
    //         'base': '1.1rem',
    //         'md': '1.2rem',
    //         'x1': '1.3rem',
    //         '2x1': '1.5rem',
    //         '3x1': '1.9rem',
    //         '4x1': '2.4rem',
    //         '5x1': '3.0rem',
    //     }
    // }
}
