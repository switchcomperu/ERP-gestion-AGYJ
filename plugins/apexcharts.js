const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addComponents, theme }) {
    addComponents({
        '.apex-charts': {
            minHeight: 'auto !important',

            'text': {
                '@apply !font-cerebri': {},
            },

            '.apexcharts-canvas': {
                '@apply my-0 mx-auto': {}
            }
        },
        '.apexcharts-canvas': {
            '::-webkit-scrollbar-thumb': {
                '@apply bg-slate-600 shadow-md': {}
            },

            ':is(.apexcharts-reset-zoom-icon, .apexcharts-selection-icon, .apexcharts-zoom-icon)': {
                '&.apexcharts-selected': {
                    'svg': {
                        '@apply fill-purple': {}
                    }
                }
            },

            'text.apexcharts-title-text, .apexcharts-subtitle-text': {
                '@apply !fill-muted !font-medium': {},
            },
        },

        '.apexcharts-gridline': {
            '@apply stroke-black/10 dark:stroke-darklight': {}
        },

        '.apexcharts-yaxis, .apexcharts-xaxis': {
            'text': {
                '@apply fill-slate-500 font-cerebri': {}
            }
        },

        '.apexcharts-heatmap-series rect, .apexcharts-treemap-series rect': {
            '@apply stroke-white': {}
        },

        '.apexcharts-legend-text': {
            '@apply !text-muted !font-cerebri !text-xs': {},
        },

        '.apexcharts-xaxis-tick': {
            '@apply stroke-black/10 dark:stroke-darklight': {}
        },
        '.apexcharts-marker': {
            '@apply stroke-white': {}
        },

        '.apexcharts-tooltip': {
            '@apply shadow-lg': {},

            '&.apexcharts-theme-light': {
                '@apply dark:border-darkborder border-black/10 bg-white dark:bg-darklight dark:text-white/80': {},

                '.apexcharts-tooltip-title': {
                    '@apply !border-b-black/10 dark:border-darkborder !bg-white !font-cerebri dark:!bg-darklight': {},
                }
            }
        },

        '.apexcharts-tooltip-title': {
            '@apply !font-cerebri': {},
        },

        '.apexcharts-pie-series, .apexcharts-bar-series': {
            'path': {
                '@apply stroke-white dark:stroke-darklight': {}
            }
        },
        '.apexcharts-radialbar': {
            '.apexcharts-datalabels-group text': {
                '@apply fill-black/10 dark:fill-darkborder': {}
            }
        },

        '.apexcharts-radialbar-track': {
            'path': {
                '@apply stroke-black/10 dark:stroke-darkborder': {}
            }
        },

        '.apexcharts-radar-series': {
            'polygon, line': {
                '@apply fill-white dark:fill-dark stroke-black/10 dark:stroke-darkborder': {}
            }
        },

        '.apexcharts-pie': {
            'circle, line': {
                '@apply stroke-black/10 dark:stroke-darkborder': {},

                '&[fill="transparent"]': {
                    '@apply stroke-transparent': {}
                }
            },
            'text': {
                '@apply fill-white': {}
            }
        },
        '.apexcharts-xaxistooltip': {
            '&.apexcharts-theme-light': {
                '@apply shadow-md bg-white border-black/10 dark:border-darkborder !font-cerebri': {},

                '&::before': {
                    '@apply border-b-black/10 dark:border-b-darkborder': {}
                }
            }
        },
        '.apexcharts-grid-borders': {
            'line': {
                '@apply stroke-black/10 dark:stroke-darkborder': {},
            }
        },
        // '#dynamicloadedchart-wrap': {
        //     '@apply relative my-0 mx-auto max-w-4xl': {},
        // },

        // '.apexcharts-boxPlot-series path': {
        //     '@apply stroke-slate-200 dark:stroke-zink-500': {},
        // },

        // '.apexcharts-pie-series path, .apexcharts-bar-series path': {
        //     '@apply stroke-white dark:stroke-zink-700': {},
        // },
    })
})