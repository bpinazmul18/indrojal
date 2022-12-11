!(function (t) {
    (t.fn.countTo = function (e) {
        return (
            (e = e || {}),
            t(this).each(function () {
                var n = t.extend(
                        {},
                        t.fn.countTo.defaults,
                        {
                            from: t(this).data("from"),
                            to: t(this).data("to"),
                            speed: t(this).data("speed"),
                            refreshInterval: t(this).data("refresh-interval"),
                            decimals: t(this).data("decimals"),
                        },
                        e
                    ),
                    o = Math.ceil(n.speed / n.refreshInterval),
                    a = (n.to - n.from) / o,
                    r = this,
                    l = t(this),
                    f = 0,
                    i = n.from,
                    c = l.data("countTo") || {};
                function s(t) {
                    var e = n.formatter.call(r, t, n);
                    l.text(e);
                }
                l.data("countTo", c),
                    c.interval && clearInterval(c.interval),
                    (c.interval = setInterval(function t() {
                        (i += a),
                            f++,
                            s(i),
                            "function" == typeof n.onUpdate &&
                                n.onUpdate.call(r, i),
                            f >= o &&
                                (l.removeData("countTo"),
                                clearInterval(c.interval),
                                (i = n.to),
                                "function" == typeof n.onComplete &&
                                    n.onComplete.call(r, i));
                    }, n.refreshInterval)),
                    s(i);
            })
        );
    }),
        (t.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 1e3,
            refreshInterval: 100,
            decimals: 0,
            formatter: function t(e, n) {
                return e.toFixed(n.decimals);
            },
            onUpdate: null,
            onComplete: null,
        });
})(jQuery);
