//quotes
        const quotes = [
            "wash your damn hands",
            "2020 is cancelled",
            "#stayhome",
            "stop going to the beach",
            "take care of yourself",
            "we’re in this together",
            "don’t panic",
            "get drunk",
            "stop buying toilet paper!",
            "follow @nastybohemia"
            ];
            const random = (max) => {
                return Math.floor(Math.random() * Math.floor(max));
            };
            // letter angles
            const degs = [-10, -5, 0, 5, 10];
            // patterns
            const numColors = 10;
            var colors = Array.from(Array(numColors).keys());
            var app = new Vue({
                el: "#app",
                data: {
                    colors: colors,
                    degs: degs,
                    quote: quotes[random(quotes.length)]
                },
                computed: {
                    words: function () {
                        return this.quote.split(" ");
                    }
                },
                methods: {
                    bg: function () {
                        let n = this.colors[random(this.colors.length)];
                        return `color-${n}`;
                    },
                    // number of patterns
                    pattern: function () {
                        return `pattern pattern-${random(5) + 1}`;
                        },
                        rotate: function () {
                            return `deg${this.degs[random(degs.length)]}`;
                        },
                        reload: function () {
                            this.quote = quotes[random(quotes.length)];
                        }
                }
            });