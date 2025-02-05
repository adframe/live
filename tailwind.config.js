module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
        colors: {
            'primary': {
                DEFAULT: '#f7003b',
                '50': '#fff0f4',
                '100': '#ffdde5',
                '200': '#ffc0cf',
                '300': '#ff94ae',
                '400': '#ff577f',
                '500': '#ff2358',
                '600': '#f7003b',
                '700': '#d70033',
                '800': '#b1032d',
                '900': '#920a2a',
                '950': '#500013',
            },
            'secondary': {
                DEFAULT: '#26f3ed',
                '50': '#eefffd',
                '100': '#c4fffc',
                '200': '#88fff9',
                '300': '#45fff7',
                '400': '#26f3ed',
                '500': '#00d5d2',
                '600': '#00abac',
                '700': '#008688',
                '800': '#03696c',
                '900': '#085759',
                '950': '#003437',
            },
        }
    },
  },
  plugins: [],
};
