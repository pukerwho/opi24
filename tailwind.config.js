module.exports = {
  mode: "jit",
  content: ["./**/*.php", "./src/**/*.js"],
  darkMode: "class",
  theme: {
    container: {
      center: true,
    },
    zIndex: {
      1: 1,
      2: 2,
      10: 10,
    },
    listStyleType: {
      auto: "auto",
      none: "none",
      disc: "disc",
      decimal: "decimal",
      square: "square",
    },
    extend: {
      lineHeight: {
        12: "3rem",
        16: "4rem",
      },
      colors: {
        "theme-dark": "#1c2126",
        "theme-gray": "#17171a",
        primary: "#6266f0",
      },
      fontSize: {
        // '20xl': '20rem'
      },
      fontFamily: {
        heading: "Playfair Display",
        text: ["Nunito"],
        subtitle: ["Noto Sans"],
        title: ["Shantell Sans"]
      },
    },
  },
  variants: {
    extend: {},
  },
  safelist: [
    'rotate-180',
    'text-green-500',
    'text-red-500',
    'text-red-700',
    'text-red-800',
    'text-red-600',
    'bg-red-600',
    'bg-red-100',
    'bg-red-50',
    'text-orange-700',
    'text-orange-800',
    'text-orange-600',
    'bg-orange-600',
    'bg-orange-100',
    'bg-orange-50',
    'text-amber-700',
    'text-amber-800',
    'text-amber-600',
    'bg-amber-600',
    'bg-amber-100',
    'bg-amber-50',
    'text-yellow-700',
    'text-yellow-800',
    'text-yellow-600',
    'bg-yellow-600',
    'bg-yellow-100',
    'bg-yellow-50',
    'text-lime-700',
    'text-lime-800',
    'text-lime-600',
    'bg-lime-600',
    'bg-lime-100',
    'bg-lime-50',
    'text-green-700',
    'text-green-800',
    'text-green-600',
    'bg-green-600',
    'bg-green-100',
    'bg-green-50',
    'text-emerald-700',
    'text-emerald-800',
    'text-emerald-600',
    'bg-emerald-600',
    'bg-emerald-100',
    'bg-emerald-50',
    'text-teal-700',
    'text-teal-800',
    'bg-teal-600',
    'bg-teal-100',
    'text-cyan-700',
    'text-cyan-800',
    'bg-cyan-600',
    'bg-cyan-100',
    'text-sky-700',
    'text-sky-800',
    'bg-sky-600',
    'bg-sky-100',
    'text-blue-700',
    'text-blue-800',
    'bg-blue-600',
    'bg-blue-100',
    'text-indigo-700',
    'text-indigo-800',
    'bg-indigo-600',
    'bg-indigo-100',
    'text-violet-700',
    'text-violet-800',
    'bg-violet-600',
    'bg-violet-100',
    'text-purple-700',
    'text-purple-800',
    'bg-purple-600',
    'bg-purple-100',
    'text-fuchsia-700',
    'text-fuchsia-800',
    'bg-fuchsia-600',
    'bg-fuchsia-100',
    'text-pink-700',
    'text-pink-800',
    'bg-pink-600',
    'bg-pink-100',
    'text-rose-700',
    'text-rose-800',
    'bg-rose-600',
    'bg-rose-100',
    'text-gray-700',
    'text-gray-800',
    'bg-gray-600',
    'bg-gray-100'
  ],
  // plugins: [require('@tailwindcss/typography')],
};
