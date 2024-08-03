const plugin = require("tailwindcss/plugin");

const Myclass = plugin(function ({ addUtilities }) {
  addUtilities({
    ".my-rotate-y-180": {
      transform: "rotateY(180deg)",
    },
    ".preserve-3d": {
      transformStyle: "preserve-3d",
    },
    ".perspective": {
      perspective: "1000px",
    },
    ".backface-hidden": {
      backfaceVisibility: "hidden",
    },
  });
});

module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        'odor': ['OdorMeanChey', 'sans-serif'],
      },
      transform: ['group-hover'],
      rotate: {
        'y-180': 'rotateY(180deg)',
      },
      keyframes: {
        moveLeftRight: {
          '0%, 100%': { transform: 'translateX(0)' },
          '50%': { transform: 'translateX(5px)' }, // Adjust this distance as needed
        },
      },
      animation: {
        moveLeftRight: 'moveLeftRight 2s ease-in-out infinite', // Adjust duration and timing function as needed
      },
    },
  },
  variants: {
    extend: {
      transform: ['group-hover'],
    },
  },
  plugins: [Myclass],
}