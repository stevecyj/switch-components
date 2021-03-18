module.exports = {
    purge: ['./resources/**/*.css', './resources/**/*.js', './resources/**/*.vue'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontSize: { superxl: ['10rem', { lineHeight: '10rem' }] },
            fontFamily: {
                zmxfont: ['Zhi Mang Xing'],
                canterbury: ['canterbury'],
            },
            colors: {
                bootstrap_primary: '#1266F1',
                bootstrap_secondary: '#B23CFD',
                bootstrap_success: '#00B74A',
                bootstrap_danger: '#F93154',
                bootstrap_info: '#39C0ED',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
