// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'pt-0',
    'pb-0',
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem',
      },
    },
    fontFamily: {
      sans: ['Bai Jamjuree', 'sans-serif'],
      serif: ['Inter', 'sans-serif'],
    },
    extend: {
      animation: {
        'marquee': 'marquee 25s linear infinite',
        'marquee2': 'marquee2 25s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translate(0%, 0%) translate3d(0px, 0px, 0px)' },
          '100%': { transform: 'translate(-100%, 0%) translate3d(0px, 0px, 0px)' }
        },
        marquee2: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0%)' },
        },
      },
      colors: {
        primary: '#161513',
        secondary: '#1C1C22',
      },
    },
  },
  plugins: [],
};
