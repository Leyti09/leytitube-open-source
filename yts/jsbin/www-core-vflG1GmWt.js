var _____WB$wombat$assign$function_____ = function(name) {
    return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name];
};
if (!self.__WB_pmw) {
    self.__WB_pmw = function(obj) {
        this.__WB_source = obj;
        return this;
    }
} {
    let window = _____WB$wombat$assign$function_____("window");
    let self = _____WB$wombat$assign$function_____("self");
    let document = _____WB$wombat$assign$function_____("document");
    let location = _____WB$wombat$assign$function_____("location");
    let top = _____WB$wombat$assign$function_____("top");
    let parent = _____WB$wombat$assign$function_____("parent");
    let frames = _____WB$wombat$assign$function_____("frames");
    let opener = _____WB$wombat$assign$function_____("opener");

    (function() {
        function g(a) {
            throw a;
        }
        var k = void 0,
            l = !0,
            m = null,
            n = !1,
            p, r = this;

        function s(a) {
            a = a.split(".");
            for (var b = r, c; c = a.shift();)
                if (b[c] != m) b = b[c];
                else return m;
            return b
        }

        function aa() {}

        function ba(a) {
            a.getInstance = function() {
                return a.xe ? a.xe : a.xe = new a
            }
        }

        function ca(a) {
            var b = typeof a;
            if ("object" == b)
                if (a) {
                    if (a instanceof Array) return "array";
                    if (a instanceof Object) return b;
                    var c = Object.prototype.toString.call(a);
                    if ("[object Window]" == c) return "object";
                    if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice")) return "array";
                    if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function"
                } else return "null";
            else if ("function" == b && "undefined" == typeof a.call) return "object";
            return b
        }

        function da(a) {
            return a !== k
        }

        function ea(a) {
            return "array" == ca(a)
        }

        function fa(a) {
            var b = ca(a);
            return "array" == b || "object" == b && "number" == typeof a.length
        }

        function ga(a) {
            return "string" == typeof a
        }

        function ha(a) {
            return "function" == ca(a)
        }

        function ia(a) {
            var b = typeof a;
            return "object" == b && a != m || "function" == b
        }

        function ja(a) {
            return a[ka] || (a[ka] = ++la)
        }
        var ka = "closure_uid_" + Math.floor(2147483648 * Math.random()).toString(36),
            la = 0;

        function ma(a, b, c) {
            return a.call.apply(a.bind, arguments)
        }

        function na(a, b, c) {
            a || g(Error());
            if (2 < arguments.length) {
                var d = Array.prototype.slice.call(arguments, 2);
                return function() {
                    var c = Array.prototype.slice.call(arguments);
                    Array.prototype.unshift.apply(c, d);
                    return a.apply(b, c)
                }
            }
            return function() {
                return a.apply(b, arguments)
            }
        }

        function t(a, b, c) {
            t = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? ma : na;
            return t.apply(m, arguments)
        }

        function oa(a, b) {
            var c = Array.prototype.slice.call(arguments, 1);
            return function() {
                var b = Array.prototype.slice.call(arguments);
                b.unshift.apply(b, c);
                return a.apply(this, b)
            }
        }
        var pa = Date.now || function() {
            return +new Date
        };

        function qa(a, b) {
            var c = b || {},
                d;
            for (d in c) {
                var e = ("" + c[d]).replace(/\$/g, "$$$$");
                a = a.replace(RegExp("\\{\\$" + d + "\\}", "gi"), e)
            }
            return a
        }

        function u(a, b) {
            var c = a.split("."),
                d = r;
            !(c[0] in d) && d.execScript && d.execScript("var " + c[0]);
            for (var e; c.length && (e = c.shift());) !c.length && da(b) ? d[e] = b : d = d[e] ? d[e] : d[e] = {}
        }

        function w(a, b) {
            function c() {}
            c.prototype = b.prototype;
            a.L = b.prototype;
            a.prototype = new c
        }
        Function.prototype.bind = Function.prototype.bind || function(a, b) {
            if (1 < arguments.length) {
                var c = Array.prototype.slice.call(arguments, 1);
                c.unshift(this, a);
                return t.apply(m, c)
            }
            return t(this, a)
        };

        function sa(a, b) {
            for (var c = 1; c < arguments.length; c++) {
                var d = String(arguments[c]).replace(/\$/g, "$$$$");
                a = a.replace(/\%s/, d)
            }
            return a
        }

        function ta(a) {
            return /^[\s\xa0]*$/.test(a)
        }

        function ua(a) {
            return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")
        }

        function va(a, b) {
            var c = String(a).toLowerCase(),
                d = String(b).toLowerCase();
            return c < d ? -1 : c == d ? 0 : 1
        }

        function wa(a) {
            return decodeURIComponent(a.replace(/\+/g, " "))
        }

        function xa(a) {
            if (!ya.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(za, "&amp;")); - 1 != a.indexOf("<") && (a = a.replace(Aa, "<")); - 1 != a.indexOf(">") && (a = a.replace(Ba, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace(Ca, "&quot;"));
            return a
        }
        var za = /&/g,
            Aa = /</g,
            Ba = />/g,
            Ca = /\"/g,
            ya = /[&<>\"]/;

        function Da(a) {
            if (-1 != a.indexOf("&"))
                if ("document" in r) {
                    var b = {
                            "&amp;": "&",
                            "<": "<",
                            "&gt;": ">",
                            "&quot;": '"'
                        },
                        c = document.createElement("div");
                    a = a.replace(Fa, function(a, e) {
                        var f = b[a];
                        if (f) return f;
                        if ("#" == e.charAt(0)) {
                            var h = Number("0" + e.substr(1));
                            isNaN(h) || (f = String.fromCharCode(h))
                        }
                        f || (c.innerHTML = a + " ", f = c.firstChild.nodeValue.slice(0, -1));
                        return b[a] = f
                    })
                } else a = a.replace(/&([^;]+);/g, function(a, b) {
                    switch (b) {
                        case "amp":
                            return "&";
                        case "lt":
                            return "<";
                        case "gt":
                            return ">";
                        case "quot":
                            return '"';
                        default:
                            if ("#" ==
                                b.charAt(0)) {
                                var c = Number("0" + b.substr(1));
                                if (!isNaN(c)) return String.fromCharCode(c)
                            }
                            return a
                    }
                });
            return a
        }
        var Fa = /&([^;\s<&]+);?/g;

        function Ga(a, b) {
            for (var c = 0, d = ua(String(a)).split("."), e = ua(String(b)).split("."), f = Math.max(d.length, e.length), h = 0; 0 == c && h < f; h++) {
                var j = d[h] || "",
                    q = e[h] || "",
                    v = RegExp("(\\d*)(\\D*)", "g"),
                    H = RegExp("(\\d*)(\\D*)", "g");
                do {
                    var F = v.exec(j) || ["", "", ""],
                        I = H.exec(q) || ["", "", ""];
                    if (0 == F[0].length && 0 == I[0].length) break;
                    c = ((0 == F[1].length ? 0 : parseInt(F[1], 10)) < (0 == I[1].length ? 0 : parseInt(I[1], 10)) ? -1 : (0 == F[1].length ? 0 : parseInt(F[1], 10)) > (0 == I[1].length ? 0 : parseInt(I[1], 10)) ? 1 : 0) || ((0 == F[2].length) < (0 == I[2].length) ?
                        -1 : (0 == F[2].length) > (0 == I[2].length) ? 1 : 0) || (F[2] < I[2] ? -1 : F[2] > I[2] ? 1 : 0)
                } while (0 == c)
            }
            return c
        };
        var Ha = Array.prototype,
            Ia = Ha.indexOf ? function(a, b, c) {
                return Ha.indexOf.call(a, b, c)
            } : function(a, b, c) {
                c = c == m ? 0 : 0 > c ? Math.max(0, a.length + c) : c;
                if (ga(a)) return !ga(b) || 1 != b.length ? -1 : a.indexOf(b, c);
                for (; c < a.length; c++)
                    if (c in a && a[c] === b) return c;
                return -1
            },
            x = Ha.forEach ? function(a, b, c) {
                Ha.forEach.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = ga(a) ? a.split("") : a, f = 0; f < d; f++) f in e && b.call(c, e[f], f, a)
            },
            Ja = Ha.filter ? function(a, b, c) {
                return Ha.filter.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = [], f =
                        0, h = ga(a) ? a.split("") : a, j = 0; j < d; j++)
                    if (j in h) {
                        var q = h[j];
                        b.call(c, q, j, a) && (e[f++] = q)
                    } return e
            },
            Ka = Ha.map ? function(a, b, c) {
                return Ha.map.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = Array(d), f = ga(a) ? a.split("") : a, h = 0; h < d; h++) h in f && (e[h] = b.call(c, f[h], h, a));
                return e
            },
            La = Ha.some ? function(a, b, c) {
                return Ha.some.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = ga(a) ? a.split("") : a, f = 0; f < d; f++)
                    if (f in e && b.call(c, e[f], f, a)) return l;
                return n
            };

        function Ma(a, b) {
            var c = Na(a, b, k);
            return 0 > c ? m : ga(a) ? a.charAt(c) : a[c]
        }

        function Na(a, b, c) {
            for (var d = a.length, e = ga(a) ? a.split("") : a, f = 0; f < d; f++)
                if (f in e && b.call(c, e[f], f, a)) return f;
            return -1
        }

        function Pa(a, b) {
            return 0 <= Ia(a, b)
        }

        function Qa(a) {
            if (!ea(a))
                for (var b = a.length - 1; 0 <= b; b--) delete a[b];
            a.length = 0
        }

        function Ra(a, b) {
            var c = Ia(a, b);
            0 <= c && Sa(a, c)
        }

        function Sa(a, b) {
            Ha.splice.call(a, b, 1)
        }

        function Ta(a) {
            return Ha.concat.apply(Ha, arguments)
        }

        function Ua(a) {
            var b = a.length;
            if (0 < b) {
                for (var c = Array(b), d = 0; d < b; d++) c[d] = a[d];
                return c
            }
            return []
        }

        function Va(a, b) {
            for (var c = 1; c < arguments.length; c++) {
                var d = arguments[c],
                    e;
                if (ea(d) || (e = fa(d)) && Object.prototype.hasOwnProperty.call(d, "callee")) a.push.apply(a, d);
                else if (e)
                    for (var f = a.length, h = d.length, j = 0; j < h; j++) a[f + j] = d[j];
                else a.push(d)
            }
        }

        function Wa(a, b, c, d) {
            Ha.splice.apply(a, Xa(arguments, 1))
        }

        function Xa(a, b, c) {
            return 2 >= arguments.length ? Ha.slice.call(a, b) : Ha.slice.call(a, b, c)
        }

        function Ya(a, b) {
            return a > b ? 1 : a < b ? -1 : 0
        };
        var Za;

        function $a(a) {
            a = a.className;
            return ga(a) && a.match(/\S+/g) || []
        }

        function y(a, b) {
            var c = $a(a),
                d = Xa(arguments, 1),
                e = c.length + d.length;
            ab(c, d);
            a.className = c.join(" ");
            return c.length == e
        }

        function z(a, b) {
            var c = $a(a),
                d = Xa(arguments, 1),
                e = bb(c, d);
            a.className = e.join(" ");
            return e.length == c.length - d.length
        }

        function ab(a, b) {
            for (var c = 0; c < b.length; c++) Pa(a, b[c]) || a.push(b[c])
        }

        function bb(a, b) {
            return Ja(a, function(a) {
                return !Pa(b, a)
            })
        }

        function cb(a, b, c) {
            for (var d = $a(a), e = n, f = 0; f < d.length; f++) d[f] == b && (Wa(d, f--, 1), e = l);
            e && (d.push(c), a.className = d.join(" "))
        }

        function A(a, b, c) {
            var d = $a(a);
            ga(b) ? Ra(d, b) : ea(b) && (d = bb(d, b));
            ga(c) && !Pa(d, c) ? d.push(c) : ea(c) && ab(d, c);
            a.className = d.join(" ")
        }

        function B(a, b) {
            return Pa($a(a), b)
        }

        function C(a, b, c) {
            c ? y(a, b) : z(a, b)
        }

        function db(a, b) {
            var c = !B(a, b);
            C(a, b, c);
            return c
        };

        function eb(a, b) {
            this.x = da(a) ? a : 0;
            this.y = da(b) ? b : 0
        }
        eb.prototype.ma = function() {
            return new eb(this.x, this.y)
        };

        function fb(a, b) {
            return new eb(a.x - b.x, a.y - b.y)
        };

        function gb(a, b) {
            this.width = a;
            this.height = b
        }
        p = gb.prototype;
        p.ma = function() {
            return new gb(this.width, this.height)
        };
        p.ceil = function() {
            this.width = Math.ceil(this.width);
            this.height = Math.ceil(this.height);
            return this
        };
        p.floor = function() {
            this.width = Math.floor(this.width);
            this.height = Math.floor(this.height);
            return this
        };
        p.round = function() {
            this.width = Math.round(this.width);
            this.height = Math.round(this.height);
            return this
        };
        p.scale = function(a) {
            this.width *= a;
            this.height *= a;
            return this
        };

        function hb(a, b) {
            for (var c in a) b.call(k, a[c], c, a)
        }

        function ib(a) {
            for (var b in a) return a[b]
        }

        function jb(a) {
            var b = [],
                c = 0,
                d;
            for (d in a) b[c++] = d;
            return b
        }

        function kb(a, b, c) {
            for (var d in a)
                if (b.call(c, a[d], d, a)) return d
        }

        function lb(a) {
            var b = {},
                c;
            for (c in a) b[c] = a[c];
            return b
        }
        var mb = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");

        function nb(a, b) {
            for (var c, d, e = 1; e < arguments.length; e++) {
                d = arguments[e];
                for (c in d) a[c] = d[c];
                for (var f = 0; f < mb.length; f++) c = mb[f], Object.prototype.hasOwnProperty.call(d, c) && (a[c] = d[c])
            }
        };
        var ob, pb, qb, rb, sb, tb;

        function ub() {
            return r.navigator ? r.navigator.userAgent : m
        }

        function vb() {
            return r.navigator
        }
        rb = qb = pb = ob = n;
        var wb;
        if (wb = ub()) {
            var xb = vb();
            ob = 0 == wb.indexOf("Opera");
            pb = !ob && -1 != wb.indexOf("MSIE");
            qb = !ob && -1 != wb.indexOf("WebKit");
            rb = !ob && !qb && "Gecko" == xb.product
        }
        var yb = ob,
            D = pb,
            zb = rb,
            Ab = qb,
            Bb = vb(),
            Cb = Bb && Bb.platform || "";
        sb = -1 != Cb.indexOf("Mac");
        tb = -1 != Cb.indexOf("Win");
        var Db = !!vb() && -1 != (vb().appVersion || "").indexOf("X11");

        function Eb() {
            var a = r.document;
            return a ? a.documentMode : k
        }
        var Fb;
        a: {
            var Gb = "",
                Hb;
            if (yb && r.opera) var Ib = r.opera.version,
                Gb = "function" == typeof Ib ? Ib() : Ib;
            else if (zb ? Hb = /rv\:([^\);]+)(\)|;)/ : D ? Hb = /MSIE\s+([^\);]+)(\)|;)/ : Ab && (Hb = /WebKit\/(\S+)/), Hb) var Jb = Hb.exec(ub()),
                Gb = Jb ? Jb[1] : "";
            if (D) {
                var Kb = Eb();
                if (Kb > parseFloat(Gb)) {
                    Fb = String(Kb);
                    break a
                }
            }
            Fb = Gb
        }
        var Lb = Fb,
            Mb = {};

        function Nb(a) {
            return Mb[a] || (Mb[a] = 0 <= Ga(Lb, a))
        }
        var Ob = r.document,
            Pb = !Ob || !D ? k : Eb() || ("CSS1Compat" == Ob.compatMode ? parseInt(Lb, 10) : 5);
        var Qb = !D || D && 9 <= Pb;
        !zb && !D || D && D && 9 <= Pb || zb && Nb("1.9.1");
        var Rb = D && !Nb("9");

        function Sb(a) {
            return a ? new Tb(Ub(a)) : Za || (Za = new Tb)
        }

        function E(a) {
            return ga(a) ? document.getElementById(a) : a
        }

        function G(a, b) {
            var c = b || document;
            return c.querySelectorAll && c.querySelector ? c.querySelectorAll("." + a) : c.getElementsByClassName ? c.getElementsByClassName(a) : J("*", a, b)
        }

        function K(a, b) {
            var c = b || document,
                d = m;
            return (d = c.querySelectorAll && c.querySelector ? c.querySelector("." + a) : G(a, b)[0]) || m
        }

        function J(a, b, c) {
            var d = document;
            c = c || d;
            a = a && "*" != a ? a.toUpperCase() : "";
            if (c.querySelectorAll && c.querySelector && (a || b)) return c.querySelectorAll(a + (b ? "." + b : ""));
            if (b && c.getElementsByClassName) {
                c = c.getElementsByClassName(b);
                if (a) {
                    for (var d = {}, e = 0, f = 0, h; h = c[f]; f++) a == h.nodeName && (d[e++] = h);
                    d.length = e;
                    return d
                }
                return c
            }
            c = c.getElementsByTagName(a || "*");
            if (b) {
                d = {};
                for (f = e = 0; h = c[f]; f++) a = h.className, "function" == typeof a.split && Pa(a.split(/\s+/), b) && (d[e++] = h);
                d.length = e;
                return d
            }
            return c
        }
        var Vb = {
            cellpadding: "cellPadding",
            cellspacing: "cellSpacing",
            colspan: "colSpan",
            frameborder: "frameBorder",
            height: "height",
            maxlength: "maxLength",
            role: "role",
            rowspan: "rowSpan",
            type: "type",
            usemap: "useMap",
            valign: "vAlign",
            width: "width"
        };

        function Wb(a) {
            a = a.document;
            a = Xb(a) ? a.documentElement : a.body;
            return new gb(a.clientWidth, a.clientHeight)
        }

        function Yb() {
            var a = window,
                b = a.document,
                c = 0;
            if (b) {
                var a = Wb(a).height,
                    c = b.body,
                    d = b.documentElement;
                if (Xb(b) && d.scrollHeight) c = d.scrollHeight != a ? d.scrollHeight : d.offsetHeight;
                else {
                    var b = d.scrollHeight,
                        e = d.offsetHeight;
                    d.clientHeight != e && (b = c.scrollHeight, e = c.offsetHeight);
                    c = b > a ? b > e ? b : e : b < e ? b : e
                }
            }
            return c
        }

        function Zb(a) {
            var b = !Ab && Xb(a) ? a.documentElement : a.body;
            a = a.parentWindow || a.defaultView;
            return new eb(a.pageXOffset || b.scrollLeft, a.pageYOffset || b.scrollTop)
        }

        function $b(a, b, c) {
            return ac(document, arguments)
        }

        function ac(a, b) {
            var c = b[0],
                d = b[1];
            if (!Qb && d && (d.name || d.type)) {
                c = ["<", c];
                d.name && c.push(' name="', xa(d.name), '"');
                if (d.type) {
                    c.push(' type="', xa(d.type), '"');
                    var e = {};
                    nb(e, d);
                    delete e.type;
                    d = e
                }
                c.push(">");
                c = c.join("")
            }
            var f = a.createElement(c);
            d && (ga(d) ? f.className = d : ea(d) ? y.apply(m, [f].concat(d)) : hb(d, function(a, b) {
                "style" == b ? f.style.cssText = a : "class" == b ? f.className = a : "for" == b ? f.htmlFor = a : b in Vb ? f.setAttribute(Vb[b], a) : 0 == b.lastIndexOf("aria-", 0) || 0 == b.lastIndexOf("data-", 0) ? f.setAttribute(b, a) :
                    f[b] = a
            }));
            2 < b.length && bc(a, f, b, 2);
            return f
        }

        function bc(a, b, c, d) {
            function e(c) {
                c && b.appendChild(ga(c) ? a.createTextNode(c) : c)
            }
            for (; d < c.length; d++) {
                var f = c[d];
                if (fa(f) && !(ia(f) && 0 < f.nodeType)) {
                    var h = x,
                        j;
                    a: {
                        if ((j = f) && "number" == typeof j.length) {
                            if (ia(j)) {
                                j = "function" == typeof j.item || "string" == typeof j.item;
                                break a
                            }
                            if (ha(j)) {
                                j = "function" == typeof j.item;
                                break a
                            }
                        }
                        j = n
                    }
                    h(j ? Ua(f) : f, e)
                } else e(f)
            }
        }

        function cc(a) {
            var b = document,
                c = b.createElement("div");
            D ? (c.innerHTML = "<br>" + a, c.removeChild(c.firstChild)) : c.innerHTML = a;
            if (1 == c.childNodes.length) return c.removeChild(c.firstChild);
            for (a = b.createDocumentFragment(); c.firstChild;) a.appendChild(c.firstChild);
            return a
        }

        function Xb(a) {
            return "CSS1Compat" == a.compatMode
        }

        function dc(a, b) {
            bc(Ub(a), a, arguments, 1)
        }

        function ec(a) {
            for (var b; b = a.firstChild;) a.removeChild(b)
        }

        function fc(a) {
            a && a.parentNode && a.parentNode.removeChild(a)
        }

        function gc(a) {
            return a.firstElementChild != k ? a.firstElementChild : hc(a.firstChild)
        }

        function hc(a) {
            for (; a && 1 != a.nodeType;) a = a.nextSibling;
            return a
        }

        function ic(a) {
            if (!a) return m;
            if (a.firstChild) return a.firstChild;
            for (; a && !a.nextSibling;) a = a.parentNode;
            return a ? a.nextSibling : m
        }

        function jc(a) {
            if (!a) return m;
            if (!a.previousSibling) return a.parentNode;
            for (a = a.previousSibling; a && a.lastChild;) a = a.lastChild;
            return a
        }

        function kc(a, b) {
            if (a.contains && 1 == b.nodeType) return a == b || a.contains(b);
            if ("undefined" != typeof a.compareDocumentPosition) return a == b || Boolean(a.compareDocumentPosition(b) & 16);
            for (; b && a != b;) b = b.parentNode;
            return b == a
        }

        function Ub(a) {
            return 9 == a.nodeType ? a : a.ownerDocument || a.document
        }

        function lc(a, b) {
            if ("textContent" in a) a.textContent = b;
            else if (a.firstChild && 3 == a.firstChild.nodeType) {
                for (; a.lastChild != a.firstChild;) a.removeChild(a.lastChild);
                a.firstChild.data = b
            } else ec(a), a.appendChild(Ub(a).createTextNode(b))
        }

        function mc(a, b, c, d) {
            if (a != m)
                for (a = a.firstChild; a;) {
                    if (b(a) && (c.push(a), d) || mc(a, b, c, d)) return l;
                    a = a.nextSibling
                }
            return n
        }
        var nc = {
                SCRIPT: 1,
                STYLE: 1,
                HEAD: 1,
                IFRAME: 1,
                OBJECT: 1
            },
            oc = {
                IMG: " ",
                BR: "\n"
            };

        function pc(a) {
            if (Rb && "innerText" in a) a = a.innerText.replace(/(\r\n|\r|\n)/g, "\n");
            else {
                var b = [];
                rc(a, b, l);
                a = b.join("")
            }
            a = a.replace(/ \xAD /g, " ").replace(/\xAD/g, "");
            a = a.replace(/\u200B/g, "");
            Rb || (a = a.replace(/ +/g, " "));
            " " != a && (a = a.replace(/^\s*/, ""));
            return a
        }

        function rc(a, b, c) {
            if (!(a.nodeName in nc))
                if (3 == a.nodeType) c ? b.push(String(a.nodeValue).replace(/(\r\n|\r|\n)/g, "")) : b.push(a.nodeValue);
                else if (a.nodeName in oc) b.push(oc[a.nodeName]);
            else
                for (a = a.firstChild; a;) rc(a, b, c), a = a.nextSibling
        }

        function sc(a, b, c) {
            if (!b && !c) return m;
            var d = b ? b.toUpperCase() : m;
            return tc(a, function(a) {
                return (!d || a.nodeName == d) && (!c || B(a, c))
            }, l)
        }

        function uc(a, b) {
            return sc(a, m, b)
        }

        function tc(a, b, c, d) {
            c || (a = a.parentNode);
            c = d == m;
            for (var e = 0; a && (c || e <= d);) {
                if (b(a)) return a;
                a = a.parentNode;
                e++
            }
            return m
        }

        function Tb(a) {
            this.b = a || r.document || document
        }
        p = Tb.prototype;
        p.G = function(a) {
            return ga(a) ? this.b.getElementById(a) : a
        };
        p.Xd = function(a, b, c) {
            return ac(this.b, arguments)
        };
        p.createElement = function(a) {
            return this.b.createElement(a)
        };

        function vc(a) {
            return Xb(a.b)
        }

        function wc(a) {
            return Zb(a.b)
        }
        p.appendChild = function(a, b) {
            a.appendChild(b)
        };
        p.contains = kc;
        var xc = "StopIteration" in r ? r.StopIteration : Error("StopIteration");

        function yc() {}
        yc.prototype.b = function() {
            g(xc)
        };
        yc.prototype.Xa = function() {
            return this
        };

        function zc(a) {
            if (a instanceof yc) return a;
            if ("function" == typeof a.Xa) return a.Xa(n);
            if (fa(a)) {
                var b = 0,
                    c = new yc;
                c.b = function() {
                    for (;;) {
                        b >= a.length && g(xc);
                        if (b in a) return a[b++];
                        b++
                    }
                };
                return c
            }
            g(Error("Not implemented"))
        }

        function Ac(a, b) {
            if (fa(a)) try {
                x(a, b, k)
            } catch (c) {
                c !== xc && g(c)
            } else {
                a = zc(a);
                try {
                    for (;;) b.call(k, a.b(), k, a)
                } catch (d) {
                    d !== xc && g(d)
                }
            }
        };

        function Bc(a, b) {
            this.e = {};
            this.b = [];
            var c = arguments.length;
            if (1 < c) {
                c % 2 && g(Error("Uneven number of arguments"));
                for (var d = 0; d < c; d += 2) this.set(arguments[d], arguments[d + 1])
            } else if (a) {
                if (a instanceof Bc) c = a.vd(), d = a.wd();
                else {
                    var c = jb(a),
                        e = [],
                        f = 0;
                    for (d in a) e[f++] = a[d];
                    d = e
                }
                for (e = 0; e < c.length; e++) this.set(c[e], d[e])
            }
        }
        p = Bc.prototype;
        p.Q = 0;
        p.Eb = 0;
        p.ea = function() {
            return this.Q
        };
        p.wd = function() {
            Cc(this);
            for (var a = [], b = 0; b < this.b.length; b++) a.push(this.e[this.b[b]]);
            return a
        };
        p.vd = function() {
            Cc(this);
            return this.b.concat()
        };
        p.clear = function() {
            this.e = {};
            this.Eb = this.Q = this.b.length = 0
        };
        p.remove = function(a) {
            return Object.prototype.hasOwnProperty.call(this.e, a) ? (delete this.e[a], this.Q--, this.Eb++, this.b.length > 2 * this.Q && Cc(this), l) : n
        };

        function Cc(a) {
            if (a.Q != a.b.length) {
                for (var b = 0, c = 0; b < a.b.length;) {
                    var d = a.b[b];
                    Object.prototype.hasOwnProperty.call(a.e, d) && (a.b[c++] = d);
                    b++
                }
                a.b.length = c
            }
            if (a.Q != a.b.length) {
                for (var e = {}, c = b = 0; b < a.b.length;) d = a.b[b], Object.prototype.hasOwnProperty.call(e, d) || (a.b[c++] = d, e[d] = 1), b++;
                a.b.length = c
            }
        }
        p.get = function(a, b) {
            return Object.prototype.hasOwnProperty.call(this.e, a) ? this.e[a] : b
        };
        p.set = function(a, b) {
            Object.prototype.hasOwnProperty.call(this.e, a) || (this.Q++, this.b.push(a), this.Eb++);
            this.e[a] = b
        };
        p.ma = function() {
            return new Bc(this)
        };
        p.Xa = function(a) {
            Cc(this);
            var b = 0,
                c = this.b,
                d = this.e,
                e = this.Eb,
                f = this,
                h = new yc;
            h.b = function() {
                for (;;) {
                    e != f.Eb && g(Error("The map has changed since the iterator was created"));
                    b >= c.length && g(xc);
                    var h = c[b++];
                    return a ? h : d[h]
                }
            };
            return h
        };

        function Dc(a) {
            var b = [];
            Ec(a, b, Fc);
            return b.join("&")
        }

        function Ec(a, b, c) {
            for (var d = a.elements, e, f = 0; e = d[f]; f++)
                if (!(e.form != a || e.disabled || "fieldset" == e.tagName.toLowerCase())) {
                    var h = e.name;
                    switch (e.type.toLowerCase()) {
                        case "file":
                        case "submit":
                        case "reset":
                        case "button":
                            break;
                        case "select-multiple":
                            e = Gc(e);
                            if (e != m)
                                for (var j, q = 0; j = e[q]; q++) c(b, h, j);
                            break;
                        default:
                            j = Gc(e), j != m && c(b, h, j)
                    }
                } d = a.getElementsByTagName("input");
            for (f = 0; e = d[f]; f++) e.form == a && "image" == e.type.toLowerCase() && (h = e.name, c(b, h, e.value), c(b, h + ".x", "0"), c(b, h + ".y", "0"))
        }

        function Hc(a, b, c) {
            var d = a.get(b);
            d || (d = [], a.set(b, d));
            d.push(c)
        }

        function Fc(a, b, c) {
            a.push(encodeURIComponent(b) + "=" + encodeURIComponent(c))
        }

        function Gc(a) {
            var b = a.type;
            if (!da(b)) return m;
            switch (b.toLowerCase()) {
                case "checkbox":
                case "radio":
                    return a.checked ? a.value : m;
                case "select-one":
                    return b = a.selectedIndex, 0 <= b ? a.options[b].value : m;
                case "select-multiple":
                    for (var b = [], c, d = 0; c = a.options[d]; d++) c.selected && b.push(c.value);
                    return b.length ? b : m;
                default:
                    return da(a.value) ? a.value : m
            }
        }

        function Ic(a) {
            a = a.elements.is_private;
            if (a.type) return Gc(a);
            for (var b = 0; b < a.length; b++) {
                var c = Gc(a[b]);
                if (c) return c
            }
            return m
        };
        var Jc = /<[^>]*>|&[^;]+;/g,
            Kc = RegExp("^[^\u0591-\u07ff\ufb1d-\ufdff\ufe70-\ufefc]*[A-Za-z\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u02b8\u0300-\u0590\u0800-\u1fff\u2c00-\ufb1c\ufe00-\ufe6f\ufefd-\uffff]"),
            Lc = RegExp("^[^A-Za-z\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u02b8\u0300-\u0590\u0800-\u1fff\u2c00-\ufb1c\ufe00-\ufe6f\ufefd-\uffff]*[\u0591-\u07ff\ufb1d-\ufdff\ufe70-\ufefc]");

        function Mc(a, b) {
            return Lc.test(b ? a.replace(Jc, " ") : a)
        };
        var Nc = window.yt && window.yt.config_ || {};
        u("yt.config_", Nc);
        var Oc = window.yt && window.yt.tokens_ || {};
        u("yt.tokens_", Oc);
        var Pc = window.yt && window.yt.globals_ || {};
        u("yt.globals_", Pc);
        var Qc = window.yt && window.yt.msgs_ || {};
        u("yt.msgs_", Qc);
        var Rc = window.yt && window.yt.timeouts_ || [];
        u("yt.timeouts_", Rc);
        var Sc = window.yt && window.yt.intervals_ || [];
        u("yt.intervals_", Sc);

        function Tc(a) {
            Uc(Nc, arguments)
        }

        function L(a, b) {
            return a in Nc ? Nc[a] : b
        }

        function Vc(a) {
            Uc(Oc, arguments)
        }

        function M(a) {
            return a in Oc ? Oc[a] : k
        }

        function Wc(a) {
            for (var b = 0, c = arguments.length; b < c; ++b) Pc[arguments[b]] = 1
        }

        function N(a, b) {
            var c = window.setTimeout(a, b);
            Rc.push(c);
            return c
        }

        function Xc(a, b) {
            var c = window.setInterval(a, b);
            Sc.push(c);
            return c
        }

        function Yc(a) {
            window.clearTimeout(a)
        }

        function Zc(a) {
            window.clearInterval(a)
        }

        function O(a, b, c) {
            var d = b || {};
            if (a = a in Qc ? Qc[a] : c)
                for (var e in d) a = a.replace(RegExp("\\$" + e, "gi"), function() {
                    return d[e]
                });
            return a
        }

        function $c(a, b) {
            var c = L("I18N_PLURAL_RULES") || function(a) {
                return 1 == a ? "one" : "other"
            };
            return (c = a["case" + b] || a[c(b)]) ? c.replace("#", b.toString()) : b + ""
        }
        qa = function(a, b) {
            var c = b || {},
                d = a in Qc ? Qc[a] : a;
            if (d)
                for (var e in c) var f = ("" + c[e]).replace(/\$/g, "$$$$"),
                    d = d.replace(RegExp("\\{\\$" + e + "\\}", "gi"), f),
                    d = d.replace(RegExp("\\$" + e, "gi"), f);
            return d
        };

        function Uc(a, b) {
            if (1 < b.length) {
                var c = b[0];
                a[c] = b[1]
            } else {
                var d = b[0];
                for (c in d) a[c] = d[c]
            }
        }
        var ad = "Microsoft Internet Explorer" == navigator.appName;
        var bd = {};

        function cd(a, b, c, d) {
            if (L("EVENTS_TRACKER_INSTALLED")) {
                var e = bd[a];
                if (!e) {
                    var f = window._gaq._getAsyncTracker("eventsPageTracker");
                    if (!f) return;
                    window._gaq.push(function() {
                        e = f._createEventTracker(a);
                        bd[a] = e
                    })
                }
                var h = c || k,
                    j = d || k;
                window._gaq.push(function() {
                    e._trackEvent(b, h, j)
                })
            }
        };

        function dd(a, b, c) {
            a.dataset ? a.dataset[ed(b)] = c : a.setAttribute("data-" + b, c)
        }

        function P(a, b) {
            return a.dataset ? a.dataset[ed(b)] : a.getAttribute("data-" + b)
        }

        function fd(a, b) {
            a.dataset ? delete a.dataset[ed(b)] : a.removeAttribute("data-" + b)
        }

        function gd(a, b) {
            return a.dataset ? ed(b) in a.dataset : a.hasAttribute ? !!a.hasAttribute("data-" + b) : !!a.getAttribute("data-" + b)
        }
        var hd = {};

        function ed(a) {
            return hd[a] || (hd[a] = String(a).replace(/\-([a-z])/g, function(a, c) {
                return c.toUpperCase()
            }))
        };

        function id(a) {
            var b = a.__yt_uid_key;
            b || (b = jd(), a.__yt_uid_key = b);
            return b
        }
        var jd = s("yt.dom.getNextId_");
        if (!jd) {
            jd = function() {
                return ++kd
            };
            u("yt.dom.getNextId_", jd);
            var kd = 0
        }

        function ld(a) {
            var b = a.cloneNode(n);
            "TR" == b.tagName || "SELECT" == b.tagName ? x(a.childNodes, function(a) {
                b.appendChild(ld(a))
            }) : b.innerHTML = a.innerHTML;
            return b
        }

        function md(a) {
            a = ld(E(a));
            a.removeAttribute("id");
            return a
        }

        function nd(a, b, c) {
            a = E(a);
            b = E(b);
            return !!tc(a, function(a) {
                return a === b
            }, l, c)
        }

        function od(a, b, c) {
            a = J(a, b, c);
            return a.length ? a[0] : m
        }

        function pd(a, b) {
            "disabled" in a && (a.disabled = !b);
            1 == a.nodeType && C(a, "disabled", !b);
            if (a.hasChildNodes())
                for (var c = 0, d; d = a.childNodes[c]; ++c) pd(d, b)
        }

        function qd(a, b) {
            if (a in b) return b[a];
            var c = a.charAt(0).toUpperCase() + a.substr(1);
            if ("moz" + c in b) return b["moz" + c];
            if ("ms" + c in b) return b["ms" + c];
            if ("o" + c in b) return b["o" + c];
            if ("webkit" + c in b) return b["webkit" + c]
        }

        function rd(a) {
            var b = document,
                c;
            La(a, function(a) {
                c = qd(a, b);
                return !!c
            });
            return c
        };

        function sd(a) {
            if (a = a || window.event) {
                for (var b in a) b in td || (this[b] = a[b]);
                this.scale = a.scale;
                this.rotation = a.rotation;
                this.Ya = a;
                if ((b = a.target || a.srcElement) && 3 == b.nodeType) b = b.parentNode;
                this.target = b;
                if (b = a.relatedTarget) try {
                    b = b.nodeName && b
                } catch (c) {
                    b = m
                } else "mouseover" == this.type ? b = a.fromElement : "mouseout" == this.type && (b = a.toElement);
                this.relatedTarget = b;
                this.clientX = a.clientX != k ? a.clientX : a.pageX;
                this.clientY = a.clientY != k ? a.clientY : a.pageY;
                if (document.body && document.documentElement) {
                    b = document.body.scrollLeft +
                        document.documentElement.scrollLeft;
                    var d = document.body.scrollTop + document.documentElement.scrollTop;
                    this.pageX = a.pageX != k ? a.pageX : a.clientX + b;
                    this.pageY = a.pageY != k ? a.pageY : a.clientY + d
                }
                this.keyCode = a.keyCode ? a.keyCode : a.which;
                this.charCode = a.charCode || ("keypress" == this.type ? this.keyCode : 0);
                this.altKey = a.altKey;
                this.ctrlKey = a.ctrlKey;
                this.shiftKey = a.shiftKey;
                "MozMousePixelScroll" == this.type ? (this.wheelDeltaX = a.axis == a.HORIZONTAL_AXIS ? a.detail : 0, this.wheelDeltaY = a.axis == a.HORIZONTAL_AXIS ? 0 : a.detail) :
                    window.opera ? (this.wheelDeltaX = 0, this.wheelDeltaY = a.detail) : 0 == a.wheelDelta % 120 ? "WebkitTransform" in document.documentElement.style ? window.b && 0 == navigator.platform.indexOf("Mac") ? (this.wheelDeltaX = a.wheelDeltaX / -30, this.wheelDeltaY = a.wheelDeltaY / -30) : (this.wheelDeltaX = a.wheelDeltaX / -1.2, this.wheelDeltaY = a.wheelDeltaY / -1.2) : (this.wheelDeltaX = 0, this.wheelDeltaY = a.wheelDelta / -1.6) : (this.wheelDeltaX = a.wheelDeltaX / -3, this.wheelDeltaY = a.wheelDeltaY / -3)
            }
        }
        p = sd.prototype;
        p.Ya = m;
        p.type = "";
        p.target = m;
        p.relatedTarget = m;
        p.currentTarget = m;
        p.data = m;
        p.source = m;
        p.state = m;
        p.keyCode = 0;
        p.charCode = 0;
        p.altKey = n;
        p.ctrlKey = n;
        p.shiftKey = n;
        p.clientX = 0;
        p.clientY = 0;
        p.pageX = 0;
        p.pageY = 0;
        p.wheelDeltaX = 0;
        p.wheelDeltaY = 0;
        p.rotation = 0;
        p.scale = 1;
        p.changedTouches = m;
        p.preventDefault = function() {
            this.Ya.returnValue = n;
            this.Ya.preventDefault && this.Ya.preventDefault()
        };
        p.stopPropagation = function() {
            this.Ya.cancelBubble = l;
            this.Ya.stopPropagation && this.Ya.stopPropagation()
        };
        var td = {
            stopPropagation: 1,
            preventMouseEvent: 1,
            preventManipulation: 1,
            preventDefault: 1,
            layerX: 1,
            layerY: 1,
            scale: 1,
            rotation: 1
        };
        var ud = s("yt.events.listeners_") || {};
        u("yt.events.listeners_", ud);
        var vd = s("yt.events.counter_") || {
            count: 0
        };
        u("yt.events.counter_", vd);

        function wd(a, b, c, d) {
            return kb(ud, function(e) {
                return e[0] == a && e[1] == b && e[2] == c && e[4] == !!d
            })
        }

        function Q(a, b, c, d) {
            if (!a || !a.addEventListener && !a.attachEvent) return "";
            d = !!d;
            var e = wd(a, b, c, d);
            if (e) return e;
            var e = ++vd.count + "",
                f = !(!("mouseenter" == b || "mouseleave" == b) || !a.addEventListener || "onmouseenter" in document),
                h;
            h = f ? function(d) {
                d = new sd(d);
                if (!tc(d.relatedTarget, function(b) {
                        return b == a
                    }, l)) return d.currentTarget = a, d.type = b, c.call(a, d)
            } : function(b) {
                b = new sd(b);
                b.currentTarget = a;
                return c.call(a, b)
            };
            ud[e] = [a, b, c, h, d];
            a.addEventListener ? "mouseenter" == b && f ? a.addEventListener("mouseover", h, d) :
                "mouseleave" == b && f ? a.addEventListener("mouseout", h, d) : "mousewheel" == b && "MozBoxSizing" in document.documentElement.style ? a.addEventListener("MozMousePixelScroll", h, d) : a.addEventListener(b, h, d) : a.attachEvent("on" + b, h);
            return e
        }

        function xd(a, b, c, d) {
            var e;
            e = Q(a, b, function() {
                yd(e);
                c.apply(a, arguments)
            }, d)
        }

        function S(a, b, c, d) {
            return zd(a, b, c, function(a) {
                return B(a, d)
            })
        }

        function zd(a, b, c, d) {
            var e = a || document;
            return Q(e, b, function(a) {
                var b = tc(a.target, function(a) {
                    return a === e || d(a)
                }, l);
                b && b !== e && (a.currentTarget = b, c.call(b, a))
            })
        }

        function Ad(a, b, c, d) {
            (a = wd(a, b, c, !!d)) && yd(a)
        }

        function yd(a) {
            "string" == typeof a && (a = [a]);
            x(a, function(a) {
                if (a in ud) {
                    var c = ud[a],
                        d = c[0],
                        e = c[1],
                        f = c[3],
                        c = c[4];
                    d.removeEventListener ? d.removeEventListener(e, f, c) : d.detachEvent("on" + e, f);
                    delete ud[a]
                }
            })
        }

        function Bd(a) {
            a = a || window.event;
            a = a.target || a.srcElement;
            3 == a.nodeType && (a = a.parentNode);
            return a
        }

        function Cd(a) {
            a = a || window.event;
            a.cancelBubble = l;
            a.stopPropagation && a.stopPropagation()
        }

        function Dd(a) {
            if (document.createEvent) {
                var b = document.createEvent("HTMLEvents");
                b.initEvent("click", l, l);
                a.dispatchEvent(b)
            } else b = document.createEventObject(), a.fireEvent("onclick", b)
        };

        function Ed(a) {
            this.b = a
        }
        var Fd = /\s*;\s*/;
        p = Ed.prototype;
        p.set = function(a, b, c, d, e, f) {
            /[;=\s]/.test(a) && g(Error('Invalid cookie name "' + a + '"'));
            /[;\r\n]/.test(b) && g(Error('Invalid cookie value "' + b + '"'));
            da(c) || (c = -1);
            e = e ? ";domain=" + e : "";
            d = d ? ";path=" + d : "";
            f = f ? ";secure" : "";
            c = 0 > c ? "" : 0 == c ? ";expires=" + (new Date(1970, 1, 1)).toUTCString() : ";expires=" + (new Date(pa() + 1E3 * c)).toUTCString();
            this.b.cookie = a + "=" + b + e + d + c + f
        };
        p.get = function(a, b) {
            for (var c = a + "=", d = (this.b.cookie || "").split(Fd), e = 0, f; f = d[e]; e++) {
                if (0 == f.lastIndexOf(c, 0)) return f.substr(c.length);
                if (f == a) return ""
            }
            return b
        };
        p.remove = function(a, b, c) {
            var d = da(this.get(a));
            this.set(a, "", 0, b, c);
            return d
        };
        p.vd = function() {
            return Gd(this).keys
        };
        p.wd = function() {
            return Gd(this).dg
        };
        p.ea = function() {
            return !this.b.cookie ? 0 : (this.b.cookie || "").split(Fd).length
        };
        p.clear = function() {
            for (var a = Gd(this).keys, b = a.length - 1; 0 <= b; b--) this.remove(a[b])
        };

        function Gd(a) {
            a = (a.b.cookie || "").split(Fd);
            for (var b = [], c = [], d, e, f = 0; e = a[f]; f++) d = e.indexOf("="), -1 == d ? (b.push(""), c.push(e)) : (b.push(e.substring(0, d)), c.push(e.substring(d + 1)));
            return {
                keys: b,
                dg: c
            }
        }
        var Hd = new Ed(document);
        Hd.e = 3950;

        function Id(a, b, c, d, e) {
            Hd.set("" + a, b, c, d || "/", e || "youtube.com")
        }

        function Jd(a, b) {
            return Hd.get("" + a, b)
        }

        function Kd(a, b, c) {
            return Hd.remove("" + a, b || "/", c || "youtube.com")
        };

        function Ld() {
            var a = Jd("PREF");
            if (a)
                for (var a = unescape(a).split("&"), b = 0; b < a.length; b++) {
                    var c = a[b].split("="),
                        d = c[0];
                    (c = c[1]) && (Md[d] = c.toString())
                }
        }
        ba(Ld);
        var Md = s("yt.prefs.UserPrefs.prefs_") || {};
        u("yt.prefs.UserPrefs.prefs_", Md);

        function Nd(a) {
            /^f([1-9][0-9]*)$/.test(a) && g("ExpectedRegexMatch: " + a)
        }

        function Od(a) {
            /^\w+$/.test(a) || g("ExpectedRegexMismatch: " + a)
        }

        function Pd(a) {
            a = Md[a] !== k ? Md[a].toString() : m;
            return a != m && /^[A-Fa-f0-9]+$/.test(a) ? parseInt(a, 16) : m
        }
        Ld.prototype.get = function(a, b) {
            Od(a);
            Nd(a);
            var c = Md[a] !== k ? Md[a].toString() : m;
            return c != m ? c : b ? b : ""
        };
        Ld.prototype.set = function(a, b) {
            Od(a);
            Nd(a);
            b == m && g("ExpectedNotNull");
            Md[a] = b.toString()
        };

        function Qd(a, b) {
            return !!((Pd("f" + (Math.floor(b / 31) + 1)) || 0) & 1 << b % 31)
        }

        function Rd(a, b) {
            var c = "f" + (Math.floor(a / 31) + 1),
                d = 1 << a % 31,
                e = Pd(c) || 0,
                e = b ? e | d : e & ~d;
            0 == e ? delete Md[c] : (d = e.toString(16), Md[c] = d.toString())
        }
        Ld.prototype.remove = function(a) {
            Od(a);
            Nd(a);
            delete Md[a]
        };

        function Sd() {
            var a = [],
                b;
            for (b in Md) a.push(b + "=" + escape(Md[b]));
            Id("PREF", a.join("&"), 31536E4)
        }
        Ld.prototype.clear = function() {
            Md = {}
        };
        var Td = {
            wj: 0,
            ni: 1,
            Ld: 2,
            Zi: 3,
            oi: 4,
            Vj: 5,
            Xj: 6,
            Uj: 7,
            Sj: 8,
            Tj: 9,
            Wj: 10,
            Rj: 11,
            Dj: 12,
            Cj: 13,
            Bj: 14,
            Hi: 15,
            lj: 16,
            oj: 17,
            pj: 18,
            nj: 19,
            mj: 20,
            Ej: 21,
            ti: 22,
            Qj: 23,
            ri: 24,
            $h: 25,
            ui: 26,
            Fi: 27,
            zj: 28,
            qi: 29,
            yj: 30,
            Lj: 31,
            Kj: 32,
            Ci: 33,
            Ij: 34,
            Fj: 35,
            Gj: 36,
            Hj: 37,
            Jj: 38,
            $i: 39,
            rj: 40,
            ai: 41,
            qj: 42,
            ci: 43,
            Kd: 44,
            vi: 45,
            ij: 46,
            Mj: 47,
            Yj: 48,
            Zj: 49,
            ak: 50,
            Aj: 51,
            ii: 52,
            ki: 53,
            jj: 54,
            Vi: 55,
            ue: 56,
            xj: 57,
            uj: 58,
            Ei: 59,
            fj: 60,
            Wi: 61,
            aj: 62,
            bi: 63,
            Pj: 64,
            fi: 65,
            di: 66,
            bj: 67,
            mi: 68,
            xi: 69,
            Pi: 70,
            gj: 71,
            Gi: 72,
            vj: 73,
            cj: 74,
            Md: 75,
            Kg: 76,
            de: 77,
            yi: 78,
            Nj: 79,
            Xi: 80,
            ji: 81,
            ej: 82,
            Qi: 83,
            Si: 84,
            Ri: 85,
            Ti: 86,
            Ui: 87,
            gi: 88,
            Zh: 89,
            hi: 90,
            kj: 91,
            hj: 92,
            li: 93,
            $j: 94,
            Bi: 95,
            Ai: 96,
            Di: 97,
            Yi: 98,
            wi: 99,
            dj: 100,
            Ji: 101,
            Ii: 102,
            Li: 103,
            Mi: 104,
            Ki: 105,
            Oj: 106,
            ve: 107,
            zi: 108,
            tj: 109,
            Ch: 110,
            Ni: 111,
            Oi: 112,
            sj: 113,
            pi: 114
        };

        function Ud(a, b, c, d) {
            this.top = a;
            this.right = b;
            this.bottom = c;
            this.left = d
        }
        Ud.prototype.ma = function() {
            return new Ud(this.top, this.right, this.bottom, this.left)
        };
        Ud.prototype.contains = function(a) {
            return !this || !a ? n : a instanceof Ud ? a.left >= this.left && a.right <= this.right && a.top >= this.top && a.bottom <= this.bottom : a.x >= this.left && a.x <= this.right && a.y >= this.top && a.y <= this.bottom
        };

        function Vd(a, b, c, d) {
            this.left = a;
            this.top = b;
            this.width = c;
            this.height = d
        }
        Vd.prototype.ma = function() {
            return new Vd(this.left, this.top, this.width, this.height)
        };
        Vd.prototype.contains = function(a) {
            return a instanceof Vd ? this.left <= a.left && this.left + this.width >= a.left + a.width && this.top <= a.top && this.top + this.height >= a.top + a.height : a.x >= this.left && a.x <= this.left + this.width && a.y >= this.top && a.y <= this.top + this.height
        };

        function Wd(a, b, c) {
            ga(b) ? Xd(a, c, b) : hb(b, oa(Xd, a))
        }

        function Xd(a, b, c) {
            var d;
            a: if (d = String(c).replace(/\-([a-z])/g, function(a, b) {
                    return b.toUpperCase()
                }), a.style[d] === k) {
                var e = Ab ? "Webkit" : zb ? "Moz" : D ? "ms" : yb ? "O" : m,
                    f = ga(k) ? "undefined".replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g, "\\$1").replace(/\x08/g, "\\x08") : "\\s";
                c = c.replace(RegExp("(^" + (f ? "|[" + f + "]+" : "") + ")([a-z])", "g"), function(a, b, c) {
                    return b + c.toUpperCase()
                });
                e = e + c;
                if (a.style[e] !== k) {
                    d = e;
                    break a
                }
            } d && (a.style[d] = b)
        }

        function Yd(a, b) {
            var c = Ub(a);
            return c.defaultView && c.defaultView.getComputedStyle && (c = c.defaultView.getComputedStyle(a, m)) ? c[b] || c.getPropertyValue(b) || "" : ""
        }

        function Zd(a, b) {
            return Yd(a, b) || (a.currentStyle ? a.currentStyle[b] : m) || a.style && a.style[b]
        }

        function $d(a) {
            var b = a.getBoundingClientRect();
            D && (a = a.ownerDocument, b.left -= a.documentElement.clientLeft + a.body.clientLeft, b.top -= a.documentElement.clientTop + a.body.clientTop);
            return b
        }

        function ae(a) {
            if (D && !(D && 8 <= Pb)) return a.offsetParent;
            var b = Ub(a),
                c = Zd(a, "position"),
                d = "fixed" == c || "absolute" == c;
            for (a = a.parentNode; a && a != b; a = a.parentNode)
                if (c = Zd(a, "position"), d = d && "static" == c && a != b.documentElement && a != b.body, !d && (a.scrollWidth > a.clientWidth || a.scrollHeight > a.clientHeight || "fixed" == c || "absolute" == c || "relative" == c)) return a;
            return m
        }

        function be(a) {
            for (var b = new Ud(0, Infinity, Infinity, 0), c = Sb(a), d = c.b.body, e = c.b.documentElement, f = !Ab && Xb(c.b) ? c.b.documentElement : c.b.body; a = ae(a);)
                if ((!D || 0 != a.clientWidth) && (!Ab || 0 != a.clientHeight || a != d) && a != d && a != e && "visible" != Zd(a, "overflow")) {
                    var h = ce(a),
                        j;
                    j = a;
                    if (zb && !Nb("1.9")) {
                        var q = parseFloat(Yd(j, "borderLeftWidth"));
                        if (de(j)) var v = j.offsetWidth - j.clientWidth - q - parseFloat(Yd(j, "borderRightWidth")),
                            q = q + v;
                        j = new eb(q, parseFloat(Yd(j, "borderTopWidth")))
                    } else j = new eb(j.clientLeft, j.clientTop);
                    h.x += j.x;
                    h.y += j.y;
                    b.top = Math.max(b.top, h.y);
                    b.right = Math.min(b.right, h.x + a.clientWidth);
                    b.bottom = Math.min(b.bottom, h.y + a.clientHeight);
                    b.left = Math.max(b.left, h.x)
                } d = f.scrollLeft;
            f = f.scrollTop;
            b.left = Math.max(b.left, d);
            b.top = Math.max(b.top, f);
            c = Wb(c.b.parentWindow || c.b.defaultView || window);
            b.right = Math.min(b.right, d + c.width);
            b.bottom = Math.min(b.bottom, f + c.height);
            return 0 <= b.top && 0 <= b.left && b.bottom > b.top && b.right > b.left ? b : m
        }

        function ee(a) {
            var b = document.body,
                c = ce(a),
                d = ce(b),
                e = fe(b),
                f = c.x - d.x - e.left,
                c = c.y - d.y - e.top,
                d = b.clientHeight - a.offsetHeight,
                e = b.scrollLeft,
                h = b.scrollTop,
                e = e + Math.min(f, Math.max(f - (b.clientWidth - a.offsetWidth), 0)),
                h = h + Math.min(c, Math.max(c - d, 0));
            a = new eb(e, h);
            b.scrollLeft = a.x;
            b.scrollTop = a.y
        }

        function ce(a) {
            var b, c = Ub(a),
                d = Zd(a, "position"),
                e = zb && c.getBoxObjectFor && !a.getBoundingClientRect && "absolute" == d && (b = c.getBoxObjectFor(a)) && (0 > b.screenX || 0 > b.screenY),
                f = new eb(0, 0),
                h;
            b = c ? Ub(c) : document;
            h = D && !(D && 9 <= Pb) && !vc(Sb(b)) ? b.body : b.documentElement;
            if (a == h) return f;
            if (a.getBoundingClientRect) b = $d(a), a = wc(Sb(c)), f.x = b.left + a.x, f.y = b.top + a.y;
            else if (c.getBoxObjectFor && !e) b = c.getBoxObjectFor(a), a = c.getBoxObjectFor(h), f.x = b.screenX - a.screenX, f.y = b.screenY - a.screenY;
            else {
                b = a;
                do {
                    f.x += b.offsetLeft;
                    f.y += b.offsetTop;
                    b != a && (f.x += b.clientLeft || 0, f.y += b.clientTop || 0);
                    if (Ab && "fixed" == Zd(b, "position")) {
                        f.x += c.body.scrollLeft;
                        f.y += c.body.scrollTop;
                        break
                    }
                    b = b.offsetParent
                } while (b && b != a);
                if (yb || Ab && "absolute" == d) f.y -= c.body.offsetTop;
                for (b = a;
                    (b = ae(b)) && b != c.body && b != h;)
                    if (f.x -= b.scrollLeft, !yb || "TR" != b.tagName) f.y -= b.scrollTop
            }
            return f
        }

        function ge(a) {
            var b = new eb;
            if (1 == a.nodeType) {
                if (a.getBoundingClientRect) {
                    var c = $d(a);
                    b.x = c.left;
                    b.y = c.top
                } else {
                    var c = wc(Sb(a)),
                        d = ce(a);
                    b.x = d.x - c.x;
                    b.y = d.y - c.y
                }
                if (zb && !Nb(12)) {
                    var e;
                    D ? e = "-ms-transform" : Ab ? e = "-webkit-transform" : yb ? e = "-o-transform" : zb && (e = "-moz-transform");
                    var f;
                    e && (f = Zd(a, e));
                    f || (f = Zd(a, "transform"));
                    f ? (a = f.match(he), a = !a ? new eb(0, 0) : new eb(parseFloat(a[1]), parseFloat(a[2]))) : a = new eb(0, 0);
                    b = new eb(b.x + a.x, b.y + a.y)
                }
            } else e = ha(a.bh), f = a, a.targetTouches ? f = a.targetTouches[0] : e && a.Ka.targetTouches &&
                (f = a.Ka.targetTouches[0]), b.x = f.clientX, b.y = f.clientY;
            return b
        }

        function ie(a, b) {
            "number" == typeof a && (a = (b ? Math.round(a) : a) + "px");
            return a
        }

        function je(a) {
            if ("none" != Zd(a, "display")) return ke(a);
            var b = a.style,
                c = b.display,
                d = b.visibility,
                e = b.position;
            b.visibility = "hidden";
            b.position = "absolute";
            b.display = "inline";
            a = ke(a);
            b.display = c;
            b.position = e;
            b.visibility = d;
            return a
        }

        function ke(a) {
            var b = a.offsetWidth,
                c = a.offsetHeight,
                d = Ab && !b && !c;
            return (!da(b) || d) && a.getBoundingClientRect ? (a = $d(a), new gb(a.right - a.left, a.bottom - a.top)) : new gb(b, c)
        }

        function le(a) {
            var b = ce(a);
            a = je(a);
            return new Vd(b.x, b.y, a.width, a.height)
        }

        function de(a) {
            return "rtl" == Zd(a, "direction")
        }

        function me(a, b) {
            if (/^\d+px?$/.test(b)) return parseInt(b, 10);
            var c = a.style.left,
                d = a.runtimeStyle.left;
            a.runtimeStyle.left = a.currentStyle.left;
            a.style.left = b;
            var e = a.style.pixelLeft;
            a.style.left = c;
            a.runtimeStyle.left = d;
            return e
        }

        function ne(a, b) {
            var c = a.currentStyle ? a.currentStyle[b] : m;
            return c ? me(a, c) : 0
        }
        var oe = {
            thin: 2,
            medium: 4,
            thick: 6
        };

        function pe(a, b) {
            if ("none" == (a.currentStyle ? a.currentStyle[b + "Style"] : m)) return 0;
            var c = a.currentStyle ? a.currentStyle[b + "Width"] : m;
            return c in oe ? oe[c] : me(a, c)
        }

        function fe(a) {
            if (D) {
                var b = pe(a, "borderLeft"),
                    c = pe(a, "borderRight"),
                    d = pe(a, "borderTop");
                a = pe(a, "borderBottom");
                return new Ud(d, c, a, b)
            }
            b = Yd(a, "borderLeftWidth");
            c = Yd(a, "borderRightWidth");
            d = Yd(a, "borderTopWidth");
            a = Yd(a, "borderBottomWidth");
            return new Ud(parseFloat(d), parseFloat(c), parseFloat(a), parseFloat(b))
        }
        var he = /matrix\([0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, [0-9\.\-]+, ([0-9\.\-]+)p?x?, ([0-9\.\-]+)p?x?\)/;

        function qe(a, b) {
            if ((a = E(a)) && a.style) a.style.display = b ? "" : "none", C(a, "hid", !b)
        }

        function re(a) {
            a = E(a);
            return !a ? n : !("none" == a.style.display || B(a, "hid"))
        }

        function se(a) {
            if (a = E(a)) re(a) ? (a.style.display = "none", y(a, "hid")) : (a.style.display = "", z(a, "hid"))
        }

        function te(a, b) {
            if (a = E(a)) a.style.visibility = b ? "visible" : "hidden"
        }

        function ue(a) {
            a = E(a);
            if (!a) return m;
            var b = 0,
                c = 0;
            if (a.offsetParent) {
                do b += a.offsetLeft, c += a.offsetTop; while (a = a.offsetParent)
            }
            return new eb(b, c)
        }

        function T(a) {
            x(arguments, function(a) {
                qe(a, l)
            })
        }

        function U(a) {
            x(arguments, function(a) {
                qe(a, n)
            })
        }

        function ve(a) {
            x(arguments, se)
        }

        function we(a, b) {
            var c = "backgroundPosition";
            if ((a = E(a)) && a.style) {
                a: {
                    var d = document.body;
                    if (d.style[c] == k) {
                        for (var c = c.charAt(0).toUpperCase() + c.substr(1), e = ["Moz", "Webkit", "ms", "O"], f = 0; f < e.length; f++)
                            if (d.style[e[f] + c] != k) {
                                c = e[f] + c;
                                break a
                            } c = k
                    }
                }
                c && (a.style[c] = b)
            }
        };

        function xe(a, b, c, d, e, f, h) {
            var j = "";
            a && (j += a + ":");
            c && (j += "//", b && (j += b + "@"), j += c, d && (j += ":" + d));
            e && (j += e);
            f && (j += "?" + f);
            h && (j += "#" + h);
            return j
        }
        var ye = RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$");

        function ze(a) {
            if (Ae) {
                Ae = n;
                var b = r.location;
                if (b) {
                    var c = b.href;
                    if (c && (c = Be(c)) && c != b.hostname) Ae = l, g(Error())
                }
            }
            return a.match(ye)
        }
        var Ae = Ab;

        function Be(a) {
            return (a = ze(a)[3] || m) && decodeURIComponent(a)
        }

        function Ce() {
            var a = ze(document.location.href);
            return xe(a[1], a[2], a[3], a[4])
        }

        function De(a) {
            a = ze(a);
            return xe(m, m, m, m, a[5], a[6], a[7])
        }

        function Ee(a) {
            var b = a.indexOf("#");
            return 0 > b ? a : a.substr(0, b)
        }

        function Fe(a) {
            if (a[1]) {
                var b = a[0],
                    c = b.indexOf("#");
                0 <= c && (a.push(b.substr(c)), a[0] = b = b.substr(0, c));
                c = b.indexOf("?");
                0 > c ? a[1] = "?" : c == b.length - 1 && (a[1] = k)
            }
            return a.join("")
        }

        function Ge(a, b, c) {
            if (ea(b))
                for (var d = 0; d < b.length; d++) Ge(a, String(b[d]), c);
            else b != m && c.push("&", a, "" === b ? "" : "=", encodeURIComponent(String(b)))
        }

        function He(a, b, c) {
            Math.max(b.length - (c || 0), 0);
            for (c = c || 0; c < b.length; c += 2) Ge(b[c], b[c + 1], a);
            return a
        }

        function Ie(a, b) {
            for (var c in b) Ge(c, b[c], a);
            return a
        }

        function Je(a, b) {
            return Fe(2 == arguments.length ? He([a], arguments[1], 0) : He([a], arguments, 1))
        }
        var Ke = /#|$/;

        function Le(a, b) {
            var c = a.search(Ke),
                d;
            a: {
                d = 0;
                for (var e = b.length; 0 <= (d = a.indexOf(b, d)) && d < c;) {
                    var f = a.charCodeAt(d - 1);
                    if (38 == f || 63 == f)
                        if (f = a.charCodeAt(d + e), !f || 61 == f || 38 == f || 35 == f) break a;
                    d += e + 1
                }
                d = -1
            }
            if (0 > d) return m;
            e = a.indexOf("&", d);
            if (0 > e || e > c) e = c;
            d += b.length + 1;
            return wa(a.substr(d, e - d))
        };

        function Me(a) {
            "?" == a.charAt(0) && (a = a.substr(1));
            a = a.split("&");
            for (var b = {}, c = 0, d = a.length; c < d; c++) {
                var e = a[c].split("=");
                if (1 == e.length && e[0] || 2 == e.length) {
                    var f = wa(e[0] || ""),
                        e = wa(e[1] || "");
                    f in b ? ea(b[f]) ? Va(b[f], e) : b[f] = [b[f], e] : b[f] = e
                }
            }
            return b
        }

        function Ne(a) {
            return -1 != a.indexOf("?") ? (a = (a || "").split("#")[0], a = a.split("?", 2), Me(1 < a.length ? a[1] : a[0])) : {}
        }

        function Oe(a) {
            "#" == a.charAt(0) && (a = "!" == a.charAt(1) ? a.substr(2) : a.substr(1));
            return Me(a)
        }

        function Pe(a) {
            a = Ie([], a);
            a[0] = "";
            return a.join("")
        }

        function Qe(a, b) {
            return Fe(Ie([a], b))
        }
        var Re = Be;

        function Se(a, b) {
            var c = a.split("?", 2);
            a = c[0];
            var c = Me(c[1] || ""),
                d;
            for (d in b) c[d] = b[d];
            return Qe(a, c)
        }

        function Te(a) {
            return a === m ? n : "com" == a[0] && a[1].match(/^youtube(?:-nocookie)?$/) ? l : n
        }

        function Ue(a) {
            return a === m ? n : "google" == a[1] ? l : "google" == a[2] ? "au" == a[0] && "com" == a[1] ? l : "uk" == a[0] && "co" == a[1] ? l : n : n
        }

        function Ve(a) {
            a = Re(a);
            return a === m ? m : a.split(".").reverse()
        };

        function We(a) {
            a = a || {};
            this.url = a.url || "";
            this.urlV8 = a.url_v8 || "";
            this.urlV9As2 = a.url_v9as2 || "";
            this.args = a.args || lb(Xe);
            this.assets = a.assets || {};
            this.attrs = a.attrs || lb(Ye);
            this.params = a.params || lb(Ze);
            this.minVersion = a.min_version || "8.0.0";
            this.fallback = a.fallback || m;
            this.fallbackMessage = a.fallbackMessage || m;
            this.html5 = !!a.html5;
            this.disable = a.disable || {}
        }
        var Xe = {
                enablejsapi: 1
            },
            Ye = {},
            Ze = {
                allowscriptaccess: "always",
                allowfullscreen: "true",
                bgcolor: "#000000"
            };

        function $e(a) {
            a instanceof We || (a = new We(a));
            return a
        }
        We.prototype.ma = function() {
            var a = new We,
                b;
            for (b in this) {
                var c = this[b];
                a[b] = "object" == ca(c) ? lb(c) : c
            }
            return a
        };

        function af() {
            this.b = [];
            bf(this)
        }
        ba(af);
        p = af.prototype;
        p.aa = 0;
        p.$a = 0;
        p.Jb = 0;
        p.Wc = "";
        p.Ga = 0;
        p.load = function(a) {
            3 <= this.Ga ? a(this) : this.b.push(a)
        };
        p.getVersion = function() {
            return [this.aa, this.$a, this.Jb]
        };

        function cf(a, b, c, d) {
            b = "string" == typeof b ? b.split(".") : [b, c, d];
            b[0] = parseInt(b[0], 10) || 0;
            b[1] = parseInt(b[1], 10) || 0;
            b[2] = parseInt(b[2], 10) || 0;
            return a.aa > b[0] || a.aa == b[0] && a.$a > b[1] || a.aa == b[0] && a.$a == b[1] && a.Jb >= b[2]
        }

        function df(a) {
            return -1 < a.Wc.indexOf("Gnash") && -1 == a.Wc.indexOf("AVM2") || 9 == a.aa && 1 == a.$a || 9 == a.aa && 0 == a.$a && 1 == a.Jb ? n : 9 <= a.aa
        }

        function ef(a) {
            return -1 < navigator.userAgent.indexOf("Sony/COM2") && !cf(a, 9, 1, 58) ? n : l
        }

        function bf(a) {
            if (3 > a.Ga)
                if (1 > a.Ga) {
                    var b = s("window.navigator.plugins"),
                        c = s("window.navigator.mimeTypes"),
                        b = b && b["Shockwave Flash"],
                        c = c && c["application/x-shockwave-flash"],
                        c = b && c && c.enabledPlugin && b.description || "";
                    if (b = c) {
                        var d = b.indexOf("Shockwave Flash");
                        0 <= d && (b = b.substr(d + 15));
                        for (var d = b.split(" "), e = "", b = "", f = 0, h = d.length; f < h; f++)
                            if (e)
                                if (b) break;
                                else b = d[f];
                        else e = d[f];
                        e = e.split(".");
                        d = parseInt(e[0], 10) || 0;
                        e = parseInt(e[1], 10) || 0;
                        f = 0;
                        if ("r" == b.charAt(0) || "d" == b.charAt(0)) f = parseInt(b.substr(1),
                            10) || 0;
                        b = [d, e, f]
                    } else b = [0, 0, 0];
                    a.Wc = c;
                    c = b;
                    a.aa = c[0];
                    a.$a = c[1];
                    a.Jb = c[2];
                    a.Ga = 1;
                    0 < a.aa ? ff(a) : bf(a)
                } else if (2 > a.Ga) {
                var j, q, v, H;
                if (ad) {
                    try {
                        j = new ActiveXObject("ShockwaveFlash.ShockwaveFlash")
                    } catch (F) {
                        j = m
                    }
                    j || a.be("")
                } else v = document.getElementsByTagName("body")[0], H = document.createElement("object"), H.setAttribute("type", "application/x-shockwave-flash"), j = v.appendChild(H);
                var I = t(a.be, a),
                    R = 0,
                    Ea = function() {
                        if (j && "GetVariable" in j) try {
                            q = j.GetVariable("$version")
                        } catch (a) {
                            q = ""
                        }
                        q || 10 <= R ? (v && H && v.removeChild(H),
                            I(q || "")) : (R++, N(Ea, 10))
                    };
                N(Ea, 0)
            } else ff(a)
        }
        p.be = function(a) {
            a ? (a = a.split(" ")[1].split(","), a = [parseInt(a[0], 10) || 0, parseInt(a[1], 10) || 0, parseInt(a[2], 10) || 0]) : a = [0, 0, 0];
            this.aa = a[0];
            this.$a = a[1];
            this.Jb = a[2];
            this.Ga = 2;
            0 < this.aa ? ff(this) : bf(this)
        };

        function ff(a) {
            if (3 > a.Ga) {
                a.Ga = 3;
                for (var b = 0, c = a.b.length; b < c; b++) a.b[b](a);
                a.b = []
            }
        };

        function gf(a, b, c) {
            if ((a = E(a)) && b && c) {
                c = $e(c);
                var d = lb(c.attrs);
                d.tabindex = 0;
                var e = lb(c.params);
                e.flashvars = Pe(c.args);
                if (ad) {
                    d.classid = "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";
                    e.movie = b;
                    b = document.createElement("object");
                    for (var f in d) b.setAttribute(f, d[f]);
                    for (f in e) d = document.createElement("param"), d.setAttribute("name", f), d.setAttribute("value", e[f]), b.appendChild(d)
                } else {
                    d.type = "application/x-shockwave-flash";
                    d.src = b;
                    b = document.createElement("embed");
                    for (f in d) b.setAttribute(f, d[f]);
                    for (f in e) b.setAttribute(f,
                        e[f])
                }
                e = document.createElement("div");
                e.appendChild(b);
                a.innerHTML = e.innerHTML
            }
        }

        function hf(a, b) {
            a = E(a);
            b = $e(b);
            if (window != window.top) {
                var c = m;
                document.referrer && (c = document.referrer.substring(0, 128));
                b.args.framer = c
            }
            jf(function(c) {
                cf(c, b.minVersion) || L("IS_OPERA_MINI") ? (c = df(c) && b.url || ef(c) && b.urlV9As2 || b.urlV8 || b.url, gf(a, c, b)) : kf(a, b, c)
            })
        }

        function lf(a, b, c) {
            if (a) {
                a = $e(a);
                var d = !!b,
                    e = E(a.attrs.id),
                    f = e ? e.parentNode : m;
                if (!e || !f) N(function() {
                    lf(a, b, c)
                }, 50);
                else {
                    if (window != window.top) {
                        var h = m;
                        if (document.referrer) {
                            var j = document.referrer.substring(0, 128),
                                q = Ve(j);
                            Te(q) || Ue(q) || (h = j)
                        } else h = "unknown";
                        h && (d = l, a.args.framer = h)
                    }
                    jf(function(b) {
                        if (cf(b, a.minVersion) || L("IS_OPERA_MINI")) {
                            var h = df(b) && a.url || ef(b) && a.urlV9As2 || a.urlV8 || a.url,
                                j = ""; - 1 < navigator.userAgent.indexOf("Sony/COM2") || (j = e.getAttribute("src") || e.movie);
                            (j != h || d) && gf(f, h, a);
                            if (tb ? !cf(b, 11, 2) : sb ? !cf(b, 11, 3) : !df(b)) b = E("flash10-promo-div"), h = Qd(Ld.getInstance(), Td.ve), b && !h && T(b)
                        } else kf(f, a, b);
                        c && c()
                    })
                }
            }
        }

        function kf(a, b, c) {
            0 == c.aa && b.fallback ? b.fallback() : 0 == c.aa && b.fallbackMessage ? b.fallbackMessage() : a.innerHTML = '<div id="flash-upgrade">' + O("FLASH_UPGRADE", k, 'You need to upgrade your Adobe Flash Player to watchthis video. <br> <a href="https://web.archive.org/web/20121218011521/http://get.adobe.com/flashplayer/">Download it from Adobe.</a>') + "</div>"
        }

        function jf(a) {
            af.getInstance().load(function(b) {
                Ld.getInstance().set("fv", b.getVersion().join("."));
                Sd();
                a(b)
            })
        };

        function mf() {}
        mf.prototype.N = n;
        mf.prototype.ra = function() {
            this.N || (this.N = l, this.W())
        };
        mf.prototype.W = function() {
            this.k && nf.apply(m, this.k);
            if (this.ia)
                for (; this.ia.length;) this.ia.shift()()
        };

        function nf(a) {
            for (var b = 0, c = arguments.length; b < c; ++b) {
                var d = arguments[b];
                fa(d) ? nf.apply(m, d) : d && "function" == typeof d.ra && d.ra()
            }
        };

        function of () {
            this.b = [];
            this.Z = {}
        }
        w( of , mf);
        p = of .prototype;
        p.Hd = 1;
        p.bc = 0;
        p.Ta = function(a, b, c) {
            var d = this.Z[a];
            d || (d = this.Z[a] = []);
            var e = this.Hd;
            this.b[e] = a;
            this.b[e + 1] = b;
            this.b[e + 2] = c;
            this.Hd = e + 3;
            d.push(e);
            return e
        };
        p.ge = function(a, b, c) {
            if (a = this.Z[a]) {
                var d = this.b;
                if (a = Ma(a, function(a) {
                        return d[a + 1] == b && d[a + 2] == c
                    })) return this.ac(a)
            }
            return n
        };
        p.ac = function(a) {
            if (0 != this.bc) return this.e || (this.e = []), this.e.push(a), n;
            var b = this.b[a];
            if (b) {
                var c = this.Z[b];
                c && Ra(c, a);
                delete this.b[a];
                delete this.b[a + 1];
                delete this.b[a + 2]
            }
            return !!b
        };
        p.va = function(a, b) {
            var c = this.Z[a];
            if (c) {
                this.bc++;
                for (var d = Xa(arguments, 1), e = 0, f = c.length; e < f; e++) {
                    var h = c[e];
                    this.b[h + 1].apply(this.b[h + 2], d)
                }
                this.bc--;
                if (this.e && 0 == this.bc)
                    for (; c = this.e.pop();) this.ac(c);
                return 0 != e
            }
            return n
        };
        p.clear = function(a) {
            if (a) {
                var b = this.Z[a];
                b && (x(b, this.ac, this), delete this.Z[a])
            } else this.b.length = 0, this.Z = {}
        };
        p.ea = function(a) {
            if (a) {
                var b = this.Z[a];
                return b ? b.length : 0
            }
            a = 0;
            for (b in this.Z) a += this.ea(b);
            return a
        };
        p.W = function() {
            of .L.W.call(this);
            delete this.b;
            delete this.Z;
            delete this.e
        };
        var pf = s("yt.pubsub.instance_") || new of ; of .prototype.subscribe = of .prototype.Ta; of .prototype.unsubscribeByKey = of .prototype.ac; of .prototype.publish = of .prototype.va; of .prototype.clear = of .prototype.clear;
        u("yt.pubsub.instance_", pf);

        function V(a, b, c) {
            var d = s("yt.pubsub.instance_");
            return d ? d.subscribe(a, function() {
                var a = arguments;
                N(function() {
                    b.apply(c || r, a)
                }, 0)
            }, c) : 0
        }

        function qf(a) {
            var b = s("yt.pubsub.instance_");
            b && ("number" == typeof a && (a = [a]), x(a, function(a) {
                b.unsubscribeByKey(a)
            }))
        }

        function W(a, b) {
            var c = s("yt.pubsub.instance_");
            return c ? c.publish.apply(c, arguments) : n
        };
        var rf;

        function sf(a, b, c) {
            this.e = a;
            tf && (this.k = b);
            this.N = c || window;
            this.g = this.N.location;
            this.T = this.g.href.split("#")[0];
            this.H = t(this.ia, this)
        }
        var uf = D && 8 <= document.documentMode || zb && Nb("1.9.2") || Ab && Nb("532.1"),
            tf = D && !uf;
        sf.prototype.ba = function(a, b) {
            this.i && (yd(this.i), delete this.i);
            this.z && (Zc(this.z), delete this.z);
            if (a) {
                this.b = vf(this);
                if (tf) {
                    var c = this.k.contentWindow.document.body;
                    (!c || !c.innerHTML) && wf(this, this.b)
                }
                b || this.e(this.b);
                uf ? this.i = Q(this.N, "hashchange", this.H) : this.z = Xc(this.H, 200)
            }
        };
        sf.prototype.ia = function() {
            if (tf) {
                var a;
                a = (a = this.k.contentWindow.document.body) ? wa(a.innerHTML.substring(1)) : "";
                a != this.b ? (this.b = a, xf(this, a), this.e(a)) : (a = vf(this), a != this.b && (this.b = a, wf(this, a), this.e(a)))
            } else a = vf(this), a != this.b && (this.b = a, this.e(a))
        };

        function vf(a) {
            a = a.g.href;
            var b = a.indexOf("#");
            return 0 > b ? "" : a.substring(b + 1)
        }

        function xf(a, b) {
            var c = a.T + "#" + b,
                d = a.g.href;
            d == c || d + "#" == c || (a.g.href = c)
        }

        function wf(a, b) {
            var c = a.k.contentWindow.document,
                d = "#" + encodeURIComponent(String(b));
            if ((c.body ? c.body.innerHTML : "") != d) d = ["<title>", xa(window.document.title || ""), "</title><body>", d, "</body>"], c.open("text/html"), c.write(d.join("")), c.close()
        }
        sf.prototype.add = function(a, b, c) {
            this.b = "" + a;
            tf && wf(this, a);
            xf(this, a);
            c || this.e(this.b)
        };

        function yf() {
            this.b = pa()
        }
        new yf;
        yf.prototype.set = function(a) {
            this.b = a
        };
        yf.prototype.get = function() {
            return this.b
        };

        function zf(a, b) {
            this.g = a;
            this.i = b || window;
            this.e = this.i.location;
            this.H = t(this.N, this)
        }
        var Af = !!window.history.pushState && (!Ab || Ab && Nb("534.11"));
        zf.prototype.T = function(a, b) {
            this.k && (yd(this.k), delete this.k);
            this.z && (Zc(this.z), delete this.z);
            a && Af && (this.b = this.e.href, b || this.g(this.b), this.k = Q(this.i, "popstate", this.H))
        };
        zf.prototype.N = function(a) {
            var b = this.e.href;
            if ((a = a.state) || b != this.b) this.b = b, this.g(b, a)
        };
        zf.prototype.add = function(a, b, c) {
            if (a || b) a = a || this.e.href, this.i.history.pushState(b, "", a), this.b = a, c || this.g(a, b)
        };
        zf.prototype.replace = function(a, b, c) {
            if (a || b) a = a || this.e.href, this.i.history.replaceState(b, "", a), this.b = a, c || this.g(a, b)
        };

        function Bf(a) {
            a = a || "hash";
            var b = s("yt.history.instance_");
            b || ("state" == a ? (b = new zf(Cf), zf.prototype.setEnabled = zf.prototype.T, zf.prototype.add = zf.prototype.add, zf.prototype.replace = zf.prototype.replace) : (b = new sf(Cf, E("legacy-history-iframe")), sf.prototype.setEnabled = sf.prototype.ba, sf.prototype.add = sf.prototype.add, sf.prototype.replace = sf.prototype.add), rf = b, u("yt.history.instance_", rf));
            return b
        }

        function Cf(a, b) {
            W("navigate", a, b)
        };

        function Df(a) {
            a = String(a);
            if (/^\s*$/.test(a) ? 0 : /^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g, "@").replace(/"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, "]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g, ""))) try {
                return eval("(" + a + ")")
            } catch (b) {}
            g(Error("Invalid JSON string: " + a))
        }

        function Ef(a) {
            return eval("(" + a + ")")
        }

        function Ff(a) {
            this.b = a
        }

        function Gf(a, b) {
            var c = [];
            Hf(a, b, c);
            return c.join("")
        }

        function Hf(a, b, c) {
            switch (typeof b) {
                case "string":
                    If(b, c);
                    break;
                case "number":
                    c.push(isFinite(b) && !isNaN(b) ? b : "null");
                    break;
                case "boolean":
                    c.push(b);
                    break;
                case "undefined":
                    c.push("null");
                    break;
                case "object":
                    if (b == m) {
                        c.push("null");
                        break
                    }
                    if (ea(b)) {
                        var d = b.length;
                        c.push("[");
                        for (var e = "", f = 0; f < d; f++) c.push(e), e = b[f], Hf(a, a.b ? a.b.call(b, String(f), e) : e, c), e = ",";
                        c.push("]");
                        break
                    }
                    c.push("{");
                    d = "";
                    for (f in b) Object.prototype.hasOwnProperty.call(b, f) && (e = b[f], "function" != typeof e && (c.push(d), If(f, c), c.push(":"),
                        Hf(a, a.b ? a.b.call(b, f, e) : e, c), d = ","));
                    c.push("}");
                    break;
                case "function":
                    break;
                default:
                    g(Error("Unknown type: " + typeof b))
            }
        }
        var Jf = {
                '"': '\\"',
                "\\": "\\\\",
                "/": "\\/",
                "\b": "\\b",
                "\f": "\\f",
                "\n": "\\n",
                "\r": "\\r",
                "\t": "\\t",
                "\x0B": "\\u000b"
            },
            Kf = /\uffff/.test("\uffff") ? /[\\\"\x00-\x1f\x7f-\uffff]/g : /[\\\"\x00-\x1f\x7f-\xff]/g;

        function If(a, b) {
            b.push('"', a.replace(Kf, function(a) {
                if (a in Jf) return Jf[a];
                var b = a.charCodeAt(0),
                    e = "\\u";
                16 > b ? e += "000" : 256 > b ? e += "00" : 4096 > b && (e += "0");
                return Jf[a] = e + b.toString(16)
            }), '"')
        };
        var Lf = m;
        "undefined" != typeof XMLHttpRequest ? Lf = function() {
            return new XMLHttpRequest
        } : "undefined" != typeof ActiveXObject && (Lf = function() {
            return new ActiveXObject("Microsoft.XMLHTTP")
        });

        function Mf(a) {
            switch (a && "status" in a ? a.status : -1) {
                case 0:
                case 200:
                case 204:
                case 304:
                    return l;
                default:
                    return n
            }
        };

        function Nf(a, b, c, d, e, f) {
            var h = Lf && Lf();
            if ("open" in h) {
                h.onreadystatechange = function() {
                    4 == (h && "readyState" in h ? h.readyState : 0) && b && b(h)
                };
                c = (c || "GET").toUpperCase();
                d = d || "";
                h.open(c, a, l);
                f && (h.responseType = f);
                a = "POST" == c;
                if (e)
                    for (var j in e) h.setRequestHeader(j, e[j]), "content-type" == j.toLowerCase() && (a = n);
                a && h.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                h.send(d);
                return h
            }
        }

        function X(a, b) {
            var c = b.format || "JSON";
            b.yb && (a = document.location.protocol + "//" + document.location.hostname + (document.location.port ? ":" + document.location.port : "") + a);
            var d = b.A;
            d && (a = Se(a, d));
            var e = b.Sa || "";
            if (d = b.F) e = Me(e), nb(e, d), e = Pe(e);
            var f = n,
                h, j = Nf(a, function(a) {
                    if (!f) {
                        f = l;
                        h && Yc(h);
                        var d = Mf(a),
                            e = m;
                        if (d || 400 <= a.status && 500 > a.status) {
                            var j = m;
                            switch (c) {
                                case "JSON":
                                    var e = a.responseText,
                                        I = a.getResponseHeader("Content-Type") || "";
                                    e && 0 <= I.indexOf("json") && (j = Ef(e));
                                    break;
                                case "XML":
                                    if (e = (e = a.responseXML) ?
                                        Of(e) : m) j = {}, x(e.getElementsByTagName("*"), function(a) {
                                        j[a.tagName] = Pf(a)
                                    })
                            }
                            e = j
                        }
                        if (d) a: {
                            switch (c) {
                                case "XML":
                                    d = 0 == parseInt(e && e.return_code, 10);
                                    break a;
                                case "RAW":
                                    d = l;
                                    break a
                            }
                            d = !!e
                        }
                        e = e || {};
                        I = b.D || r;
                        d ? b.o && b.o.call(I, a, e) : b.onError && b.onError.call(I, a, e);
                        b.V && b.V.call(I, a, e)
                    }
                }, b.method, e, b.headers, b.responseType);
            b.mg && 0 < b.timeout && (h = N(function() {
                f || (f = l, j.abort(), Yc(h), b.mg.call(b.D || r, j))
            }, b.timeout))
        }

        function Qf(a, b) {
            var c = b || {};
            c.method = a.method.toUpperCase();
            if ("POST" == c.method) c.Sa = Dc(a);
            else {
                var d = new Bc;
                Ec(a, d, Hc);
                Cc(d);
                for (var e = {}, f = 0; f < d.b.length; f++) {
                    var h = d.b[f];
                    e[h] = d.e[h]
                }
                d = c.A || {};
                nb(d, e);
                c.A = d
            }
            X(a.action, c)
        }

        function Rf(a, b) {
            var c = b.onComplete || m,
                d = b.onException || m,
                e = b.onError || m,
                f = b.update || m,
                h = b.json || n;
            return Nf(a, function(a) {
                if (Mf(a)) {
                    var b = a.responseXML,
                        v = b ? Of(b) : m,
                        b = !(!b || !v),
                        H, F;
                    if (b && (H = Sf(v, "return_code"), F = Sf(v, "html_content"), 0 == H)) {
                        f && F && (E(f).innerHTML = F);
                        var I = Sf(v, "js_content");
                        if (I) {
                            var R = document.createElement("script");
                            R.text = I;
                            document.getElementsByTagName("head")[0].appendChild(R)
                        }
                    }
                    c && (b ? (b = Sf(v, "redirect_on_success"), H && b ? window.location = b : ((v = Sf(v, 0 == H ? "success_message" : "error_message")) &&
                        alert(v), a = h ? eval("(" + F + ")") : a, 0 == H ? c(a) : d && d(a))) : a.responseText && c(a))
                } else e && e(a)
            }, b.method || "POST", b.postBody || m, b.headers || m)
        }

        function Of(a) {
            return !a ? m : (a = ("responseXML" in a ? a.responseXML : a).getElementsByTagName("root")) && 0 < a.length ? a[0] : m
        }

        function Sf(a, b) {
            if (!a) return m;
            var c = a.getElementsByTagName(b);
            return c && 0 < c.length ? Pf(c[0]) : m
        }

        function Pf(a) {
            var b = "";
            x(a.childNodes, function(a) {
                b += a.nodeValue
            });
            return b
        }
        var Tf = {
                html5_ajax: "action_get_html5_token",
                watch_actions_ajax: "action_get_watch_actions_token",
                addto_ajax: "action_get_wl_token"
            },
            Uf = {
                html5_ajax: "html5_ajax_token",
                watch_actions_ajax: "watch_actions_ajax_token",
                addto_ajax: "addto_ajax_token"
            };

        function Vf(a, b, c) {
            if (M(a)) b && window.setTimeout(b, 0);
            else {
                var d = Ce() + "/token_ajax",
                    e = {};
                e[Tf[a]] = 1;
                X(d, {
                    format: "RAW",
                    method: "GET",
                    A: e,
                    V: function(d) {
                        var e = Me(d.responseText),
                            j = e[Uf[a]];
                        j ? (Vc(a, j), b && b()) : c && c(d, e)
                    }
                })
            }
        };
        var Wf = {},
            Xf = {};

        function Yf(a, b, c) {
            a = E(a);
            c = c || ja(a);
            c in Wf || (Wf[c] = []);
            Wf[c].push([a, b]);
            Xf[c] = n;
            return c
        }

        function Zf(a, b) {
            a = E(a);
            var c = b || ja(a),
                d = Wf[c];
            d && (Wf[c] = Ja(d, function(b) {
                return b[0] != a
            }))
        }

        function $f(a) {
            a in Wf && !Xf[a] && (x(Wf[a], function(a) {
                var c = a[0];
                a = a[1];
                c && "IMG" == c.tagName && (c.onload = "", c.src = a)
            }), Wf[a] = [], Xf[a] = l)
        };

        function ag(a) {
            return a.dataset ? a.dataset.loaded : a.getAttribute("data-" + "loaded".replace(/([A-Z])/g, "-$1").toLowerCase())
        };

        function bg(a, b) {
            if (a in cg)
                for (var c = cg[a], d = Array.prototype.slice.call(arguments, 1), e = 0, f = c.length; e < f; e++) c[e] && c[e][0].apply(c[e][1], d)
        }
        var cg = {};

        function dg(a) {
            for (var b = 0, c = 0, d = a.length; c < d; ++c) b = 31 * b + a.charCodeAt(c), b %= 4294967296;
            return b
        };

        function eg(a, b) {
            function c() {
                if (!ag(j)) {
                    var a = j;
                    a.dataset ? a.dataset.loaded = "true" : a.setAttribute("data-" + "loaded".replace(/([A-Z])/g, "-$1").toLowerCase(), "true");
                    bg(d);
                    d ? d in cg && delete cg[d] : cg = {}
                }
            }
            var d = "js-" + dg(a),
                e = document.getElementById(d),
                f = e && ag(e),
                h = e && !f;
            if (f) return b && b(), e;
            b && (d in cg || (cg[d] = []), cg[d].push([b, k]));
            if (h) return e;
            var j, q = document.createElement("script");
            q.id = d;
            q.onload = function() {
                setTimeout(c, 0)
            };
            q.onreadystatechange = function() {
                switch (q.readyState) {
                    case "loaded":
                    case "complete":
                        q.onload()
                }
            };
            q.src = a;
            e = document.getElementsByTagName("head")[0];
            e.insertBefore(q, e.firstChild);
            return j = q
        };

        function fg(a, b) {
            return eg(a, b)
        };

        function gg(a) {
            var b = "css-" + dg(a),
                c = document.getElementById(b);
            if (c) return c;
            c = document.createElement("link");
            c.id = b;
            c.rel = "stylesheet";
            c.href = a;
            document.getElementsByTagName("head")[0].appendChild(c);
            return c
        };
        var hg, ig, jg, kg, lg, mg, ng;
        ng = mg = lg = kg = jg = ig = hg = n;
        var og = ub();
        og && (-1 != og.indexOf("Firefox") ? hg = l : -1 != og.indexOf("Camino") ? ig = l : -1 != og.indexOf("iPhone") || -1 != og.indexOf("iPod") ? jg = l : -1 != og.indexOf("iPad") ? kg = l : -1 != og.indexOf("Android") ? lg = l : -1 != og.indexOf("Chrome") ? mg = l : -1 != og.indexOf("Safari") && (ng = l));
        var pg = hg,
            qg = ig,
            rg = jg,
            sg = kg,
            tg = lg,
            ug = mg,
            vg = ng;

        function wg(a, b) {
            var c = Be(a);
            if (c == Be(window.location.href) || !c && 0 == a.lastIndexOf("/", 0))
                if (c = De(a), c = Ee(c)) {
                    for (var d = 0, e = 0; e < c.length; ++e) d = 31 * d + c.charCodeAt(e), d %= 4294967296;
                    c = "s_tempdata-" + d;
                    d = b ? Pe(b) : "";
                    Id(c, d, 5)
                }
        };
        var xg = {},
            yg = 0;

        function zg(a, b) {
            if (a) {
                var c = new Image,
                    d = "" + yg++;
                xg[d] = c;
                c.onload = c.onerror = function() {
                    b && xg[d] && b();
                    delete xg[d]
                };
                c.src = a;
                c = eval("null")
            }
        };

        function Ag(a, b, c) {
            cd(a, b || "null");
            a = "a=" + a + (b ? "&" + b : "").replace(/\//g, "&");
            zg("/gen_204?" + a, c)
        }

        function Bg(a, b, c, d) {
            a = {
                name: a,
                locale: c,
                feature: d
            };
            for (var e in b) a[e] = b[e];
            b = Qe("/sharing_services", a);
            zg(b)
        }

        function Cg(a, b, c, d) {
            Bg(a, {
                v: b
            }, c, d)
        }

        function Dg(a, b, c, d, e) {
            Bg(a, {
                list: b,
                v: c
            }, d, e)
        };

        function Eg(a, b, c, d, e, f, h) {
            var j, q;
            if (j = c.offsetParent) {
                var v = "HTML" == j.tagName || "BODY" == j.tagName;
                if (!v || "static" != Zd(j, "position")) q = ce(j), v || (v = (v = de(j)) && zb ? -j.scrollLeft : v && (!D || !Nb("8")) ? j.scrollWidth - j.clientWidth - j.scrollLeft : j.scrollLeft, q = fb(q, new eb(v, j.scrollTop)))
            }
            j = q || new eb;
            q = le(a);
            if (v = be(a)) {
                var H = new Vd(v.left, v.top, v.right - v.left, v.bottom - v.top),
                    v = Math.max(q.left, H.left),
                    F = Math.min(q.left + q.width, H.left + H.width);
                if (v <= F) {
                    var I = Math.max(q.top, H.top),
                        H = Math.min(q.top + q.height, H.top +
                            H.height);
                    I <= H && (q.left = v, q.top = I, q.width = F - v, q.height = H - I)
                }
            }
            v = Sb(a);
            I = Sb(c);
            if (v.b != I.b) {
                var F = v.b.body,
                    I = I.b.parentWindow || I.b.defaultView,
                    H = new eb(0, 0),
                    R = Ub(F) ? Ub(F).parentWindow || Ub(F).defaultView : window,
                    Ea = F;
                do {
                    var ra = R == I ? ce(Ea) : ge(Ea);
                    H.x += ra.x;
                    H.y += ra.y
                } while (R && R != I && (Ea = R.frameElement) && (R = R.parent));
                F = fb(H, ce(F));
                D && !vc(v) && (F = fb(F, wc(v)));
                q.left += F.x;
                q.top += F.y
            }
            a = (b & 4 && de(a) ? b ^ 2 : b) & -5;
            b = new eb(a & 2 ? q.left + q.width : q.left, a & 1 ? q.top + q.height : q.top);
            b = fb(b, j);
            e && (b.x += (a & 2 ? -1 : 1) * e.x, b.y += (a &
                1 ? -1 : 1) * e.y);
            var $;
            if (h && ($ = be(c))) $.top -= j.y, $.right -= j.x, $.bottom -= j.y, $.left -= j.x;
            return Fg(b, c, d, f, $, h, k)
        }

        function Fg(a, b, c, d, e, f, h) {
            a = a.ma();
            var j = 0,
                q = (c & 4 && de(b) ? c ^ 2 : c) & -5;
            c = je(b);
            h = h ? h.ma() : c.ma();
            if (d || 0 != q) q & 2 ? a.x -= h.width + (d ? d.right : 0) : d && (a.x += d.left), q & 1 ? a.y -= h.height + (d ? d.bottom : 0) : d && (a.y += d.top);
            if (f) {
                if (e) {
                    j = a;
                    d = 0;
                    if (65 == (f & 65) && (j.x < e.left || j.x >= e.right)) f &= -2;
                    if (132 == (f & 132) && (j.y < e.top || j.y >= e.bottom)) f &= -5;
                    j.x < e.left && f & 1 && (j.x = e.left, d |= 1);
                    j.x < e.left && (j.x + h.width > e.right && f & 16) && (h.width = Math.max(h.width - (j.x + h.width - e.right), 0), d |= 4);
                    j.x + h.width > e.right && f & 1 && (j.x = Math.max(e.right -
                        h.width, e.left), d |= 1);
                    f & 2 && (d |= (j.x < e.left ? 16 : 0) | (j.x + h.width > e.right ? 32 : 0));
                    j.y < e.top && f & 4 && (j.y = e.top, d |= 2);
                    j.y >= e.top && (j.y + h.height > e.bottom && f & 32) && (h.height = Math.max(h.height - (j.y + h.height - e.bottom), 0), d |= 8);
                    j.y + h.height > e.bottom && f & 4 && (j.y = Math.max(e.bottom - h.height, e.top), d |= 2);
                    f & 8 && (d |= (j.y < e.top ? 64 : 0) | (j.y + h.height > e.bottom ? 128 : 0));
                    j = d
                } else j = 256;
                if (j & 496) return j
            }
            f = a;
            e = zb && (sb || Db) && Nb("1.9");
            f instanceof eb ? (a = f.x, f = f.y) : (a = f, f = k);
            b.style.left = ie(a, e);
            b.style.top = ie(f, e);
            if (!(c == h || (!c ||
                    !h ? 0 : c.width == h.width && c.height == h.height))) a = vc(Sb(Ub(b))), D && (!a || !Nb("8")) ? (c = b.style, a ? (D ? (a = ne(b, "paddingLeft"), e = ne(b, "paddingRight"), f = ne(b, "paddingTop"), d = ne(b, "paddingBottom"), a = new Ud(f, e, d, a)) : (a = Yd(b, "paddingLeft"), e = Yd(b, "paddingRight"), f = Yd(b, "paddingTop"), d = Yd(b, "paddingBottom"), a = new Ud(parseFloat(f), parseFloat(e), parseFloat(d), parseFloat(a))), b = fe(b), c.pixelWidth = h.width - b.left - a.left - a.right - b.right, c.pixelHeight = h.height - b.top - a.top - a.bottom - b.bottom) : (c.pixelWidth = h.width, c.pixelHeight =
                h.height)) : (b = b.style, zb ? b.MozBoxSizing = "border-box" : Ab ? b.WebkitBoxSizing = "border-box" : b.boxSizing = "border-box", b.width = Math.max(h.width, 0) + "px", b.height = Math.max(h.height, 0) + "px");
            return j
        };
        var Gg = {},
            Hg = "ontouchstart" in document;

        function Ig(a, b, c) {
            b in Gg || (Gg[b] = new of );
            Gg[b].Ta(a, c)
        }

        function Jg(a, b, c) {
            var d;
            switch (a) {
                case "mouseover":
                case "mouseout":
                    d = 3;
                    break;
                case "mouseenter":
                case "mouseleave":
                    d = 9
            }
            return tc(c, function(a) {
                return B(a, b)
            }, l, d)
        }

        function Kg(a) {
            var b = "mouseover" == a.type && "mouseenter" in Gg || "mouseout" == a.type && "mouseleave" in Gg,
                c = a.type in Gg || b;
            if ("HTML" != a.target.tagName && c) {
                if (b) {
                    var b = "mouseover" == a.type ? "mouseenter" : "mouseleave",
                        c = Gg[b],
                        d;
                    for (d in c.Z) {
                        var e = Jg(b, d, a.target);
                        e && !tc(a.relatedTarget, function(a) {
                            return a == e
                        }, l) && c.va(d, e, b, a)
                    }
                }
                if (b = Gg[a.type])
                    for (d in b.Z)(e = Jg(a.type, d, a.target)) && b.va(d, e, a.type, a)
            }
        }
        Q(document, "blur", Kg, l);
        Q(document, "change", Kg, l);
        Q(document, "click", Kg);
        Q(document, "focus", Kg, l);
        Q(document, "mouseover", Kg);
        Q(document, "mouseout", Kg);
        Q(document, "mousedown", Kg);
        Q(document, "keydown", Kg);
        Q(document, "keyup", Kg);
        Q(document, "keypress", Kg);
        Q(document, "cut", Kg);
        Q(document, "paste", Kg);
        Hg && (Q(document, "touchstart", Kg), Q(document, "touchend", Kg), Q(document, "touchcancel", Kg));
        var Lg = window.yt && window.yt.uix && window.yt.uix.widgets_ || {};
        u("yt.uix.widgets_", Lg);

        function Mg(a) {
            a = a.getInstance();
            var b = Y(a);
            !(b in Lg) && a.bd() && (a.register(), Lg[b] = a)
        };

        function Ng() {
            this.b = {}
        }
        p = Ng.prototype;
        p.Xc = !!eval("/*@cc_on!@*/false");
        p.bd = function() {
            return l
        };

        function Z(a, b, c, d) {
            d = Y(a, d);
            var e = t(c, a);
            Ig(d, b, e);
            a.b[c] = e
        }
        p.na = function(a, b, c) {
            var d = this.getData(a, b);
            if (d && (d = s(d))) {
                var e = Xa(arguments, 2);
                Wa(e, 0, 0, a);
                d.apply(m, e)
            }
        };
        p.getData = function(a, b) {
            return P(a, b)
        };
        p.setData = function(a, b, c) {
            dd(a, b, c)
        };
        p.O = function(a) {
            return uc(a, Y(this))
        };

        function Y(a, b) {
            return "yt-uix" + (a.R ? "-" + a.R : "") + (b ? "-" + b : "")
        };

        function Og() {
            this.b = {}
        }
        w(Og, Ng);
        ba(Og);
        p = Og.prototype;
        p.R = "button";
        p.register = function() {
            Z(this, "click", this.lh);
            Z(this, "keydown", this.mh);
            Z(this, "keypress", this.nh)
        };
        p.lh = function(a) {
            if (a && !a.disabled) {
                if (this.getData(a, "button-toggle")) {
                    var b = uc(a, Y(this, "group"));
                    if (b && this.getData(b, "button-toggle-group")) {
                        var c = this.getData(b, "button-toggle-group"),
                            b = G(Y(this), b),
                            d = Y(this, "toggled"),
                            e = B(a, d);
                        x(b, function(b) {
                            b != a || "optional" == c && e ? z(b, d) : y(a, d)
                        })
                    } else db(a, Y(this, "toggled"))
                }
                this.click(a)
            }
        };
        p.mh = function(a, b, c) {
            if (!c.altKey && (!c.ctrlKey && !c.shiftKey) && (b = Pg(this, a))) {
                var d = function(a) {
                    var b = "";
                    a.tagName && (b = a.tagName.toLowerCase());
                    return "ul" == b || "table" == b
                };
                if (d(b)) d = b;
                else var e = [],
                    d = mc(b, d, e, l) ? e[0] : k;
                if (d) {
                    var d = d.tagName.toLowerCase(),
                        f;
                    "ul" == d ? f = this.vh : "table" == d && (f = this.uh);
                    f && (d = t(f, this), e = re(b), (f = 9 == c.keyCode) || 32 == c.keyCode || 13 == c.keyCode ? (c = Qg(this, b)) ? (a = gc(c), "a" == a.tagName.toLowerCase() ? window.location = a.href : Dd(a)) : f && Rg(this, a) : e ? 27 == c.keyCode ? (Qg(this, b), Rg(this,
                        a)) : d(a, b, c) : (b = B(a, Y(this, "reverse")) ? 38 : 40, c.keyCode == b && (Dd(a), c.preventDefault())))
                }
            }
        };
        p.nh = function(a, b, c) {
            !c.altKey && (!c.ctrlKey && !c.shiftKey) && (a = Pg(this, a), re(a) && c.preventDefault())
        };

        function Qg(a, b) {
            var c = Y(a, "menu-item-highlight"),
                d = K(c, b);
            d && z(d, c);
            return d
        }

        function Sg(a, b, c) {
            y(c, Y(a, "menu-item-highlight"));
            b.setAttribute("aria-activedescendant", c.getAttribute("id"))
        }
        p.uh = function(a, b, c) {
            var d = Qg(this, b);
            b = od("table", m, b);
            var e = od("tr", m, b),
                e = J("td", m, e).length;
            b = J("td", m, b);
            d = Tg(d, b, e, c); - 1 != d && (Sg(this, a, b[d]), c.preventDefault())
        };
        p.vh = function(a, b, c) {
            if (40 == c.keyCode || 38 == c.keyCode) {
                var d = Qg(this, b);
                b = J("li", m, b);
                d = Tg(d, b, 1, c);
                Sg(this, a, b[d]);
                c.preventDefault()
            }
        };

        function Tg(a, b, c, d) {
            var e = b.length;
            a = Ia(b, a);
            if (-1 == a)
                if (38 == d.keyCode) a = e - c;
                else {
                    if (37 == d.keyCode || 38 == d.keyCode || 40 == d.keyCode) a = 0
                }
            else 39 == d.keyCode ? (a % c == c - 1 && (a -= c), a += 1) : 37 == d.keyCode ? (0 == a % c && (a += c), a -= 1) : 38 == d.keyCode ? (a < c && (a += e), a -= c) : 40 == d.keyCode && (a >= e - c && (a -= e), a += c);
            return a
        }

        function Ug(a, b) {
            var c = b.iframeMask;
            c || (c = document.createElement("iframe"), c.src = 'javascript:""', c.className = Y(a, "menu-mask"), b.iframeMask = c);
            return c
        }

        function Vg(a, b) {
            if (a.getData(b, "button-menu-root-container")) {
                var c = a.getData(b, "button-menu-root-container");
                return uc(b, c)
            }
            return document.body
        }
        p.le = function(a) {
            if (a) {
                var b = Pg(this, a);
                if (b) {
                    a.setAttribute("aria-pressed", "true");
                    a.setAttribute("aria-expanded", "true");
                    b.originalParentNode = b.parentNode;
                    b.activeButtonNode = a;
                    b.parentNode.removeChild(b);
                    this.getData(a, "button-has-sibling-menu") ? a.parentNode.appendChild(b) : Vg(this, a).appendChild(b);
                    b.style.minWidth = a.offsetWidth - 2 + "px";
                    var c = Ug(this, a);
                    c && document.body.appendChild(c);
                    var c = uc(a, Y(this, "group")),
                        d = !!this.getData(a, "button-menu-ignore-group"),
                        c = c && !d ? c : a,
                        d = 5,
                        e = 4,
                        f = le(a);
                    if (B(a, Y(this,
                            "reverse"))) {
                        d = 4;
                        e = 5;
                        f = f.top + "px";
                        try {
                            b.style.maxHeight = f
                        } catch (h) {}
                    }
                    B(a, "flip") && (B(a, Y(this, "reverse")) ? (d = 6, e = 7) : (d = 7, e = 6));
                    var j;
                    this.getData(a, "button-has-sibling-menu") ? j = ae(c) : this.getData(a, "button-menu-root-container") && (j = Vg(this, a));
                    D && !Nb("8") && (j = m);
                    var q;
                    j && (q = le(j), q = new Ud(-q.top, q.left, q.top, -q.left));
                    j = new eb(0, 1);
                    B(a, Y(this, "center-menu")) && (j.x -= Math.round((je(b).width - je(a).width) / 2));
                    if (f = Ug(this, a)) {
                        var v = je(b);
                        f.style.width = v.width + "px";
                        f.style.height = v.height + "px";
                        Eg(c, d,
                            f, e, j, q)
                    }
                    Eg(c, d, b, e, j, q);
                    T(b);
                    this.na(a, "button-menu-action", l);
                    y(a, Y(this, "active"));
                    q = t(this.Xg, this, a);
                    b = Q(document, "click", q);
                    q = Q(document, "contextmenu", q);
                    this.setData(a, "button-listener", b);
                    this.setData(a, "button-context-menu-listener", q)
                }
            }
        };

        function Rg(a, b) {
            if (b) {
                var c = Pg(a, b);
                if (c) {
                    b.setAttribute("aria-pressed", "false");
                    b.setAttribute("aria-expanded", "false");
                    U(c);
                    a.na(b, "button-menu-action", n);
                    var d = Ug(a, b);
                    N(function() {
                        d && d.parentNode && d.parentNode.removeChild(d);
                        c.originalParentNode && (c.parentNode.removeChild(c), c.originalParentNode.appendChild(c), c.originalParentNode = m, c.activeButtonNode = m)
                    }, 1)
                }
                var e = uc(b, Y(a, "group"));
                z(b, Y(a, "active"));
                e && z(e, Y(a, "group-active"));
                if (e = a.getData(b, "button-listener")) yd(e), fd(b, "button-listener");
                if (e = a.getData(b, "button-context-menu-listener")) yd(e), fd(b, "button-context-menu-listener")
            }
        }

        function Wg(a, b) {
            return uc(b.activeButtonNode || b.parentNode, Y(a))
        }
        p.Xg = function(a, b) {
            var c = Bd(b),
                d = uc(c, Y(this));
            if (d) {
                var d = Pg(this, d),
                    e = Pg(this, a);
                if (d == e) return
            }
            if (!uc(c, Y(this, "menu")) || B(c, Y(this, "menu-item")) || B(c, Y(this, "menu-close")))
                if (Rg(this, a), (d = uc(c, Y(this, "menu"))) && this.getData(a, "button-menu-indicate-selected"))(e = K(Y(this, "content"), a)) && lc(e, pc(c)), e = Y(this, "menu-item-selected"), (d = K(e, d)) && z(d, e), y(c.parentNode, e)
        };

        function Pg(a, b) {
            if (!b.widgetMenu) {
                var c = a.getData(b, "button-menu-id"),
                    c = c && E(c),
                    d = Y(a, "menu");
                c ? (y(c, d), y(c, Y(a, "menu-external"))) : c = K(d, b);
                b.widgetMenu = c
            }
            return b.widgetMenu
        }
        p.click = function(a) {
            if (Pg(this, a)) {
                var b = Pg(this, a),
                    c = Wg(this, b);
                c && c != a ? (Rg(this, c), N(t(this.le, this, a), 1)) : re(b) ? Rg(this, a) : this.le(a);
                a.focus()
            }
            this.na(a, "button-action")
        };
        var Xg = Ab ? "webkitTransitionEnd" : yb ? "oTransitionEnd" : "transitionend";

        function Yg() {
            this.b = {}
        }
        w(Yg, Ng);
        ba(Yg);
        p = Yg.prototype;
        p.R = "expander";
        p.register = function() {
            Z(this, "click", this.Ah, "head");
            Z(this, "keypress", this.Bh, "head")
        };
        p.Ah = function(a) {
            Zg(this, a)
        };
        p.Bh = function(a, b, c) {
            c && 13 == c.keyCode && Zg(this, a)
        };

        function Zg(a, b) {
            var c = a.O(b);
            c && (db(c, Y(a, "collapsed")), a.na(c, "expander-action"))
        }

        function $g(a, b) {
            var c = a.O(b);
            c && (y(c, Y(a, "collapsed")), a.na(c, "expander-action"))
        }
        p.getBodyElement = function(a) {
            return K(Y(this, "body"), a)
        };

        function ah() {
            this.b = {}
        }
        w(ah, Ng);
        ba(ah);
        p = ah.prototype;
        p.R = "tooltip";
        p.sc = 0;
        p.register = function() {
            Z(this, "mouseover", this.fe);
            Z(this, "mouseout", this.$c);
            Z(this, "click", this.$c);
            Z(this, "touchstart", this.Yg);
            Z(this, "touchend", this.oe);
            Z(this, "touchcancel", this.oe)
        };
        p.bd = function() {
            return !(this.Xc && 0 == Lb.indexOf("6"))
        };
        p.fe = function(a) {
            if (!(this.sc && 1E3 > pa() - this.sc)) {
                var b = parseInt(this.getData(a, "tooltip-hide-timer"), 10);
                b && (fd(a, "tooltip-hide-timer"), Yc(b));
                var b = t(function() {
                        bh(this, a);
                        fd(a, "tooltip-show-timer")
                    }, this),
                    c = parseInt(this.getData(a, "tooltip-show-delay"), 10) || 0,
                    b = N(b, c);
                this.setData(a, "tooltip-show-timer", b.toString());
                a.title && (this.setData(a, "tooltip-text", a.title), a.title = "")
            }
        };
        p.$c = function(a) {
            var b = parseInt(this.getData(a, "tooltip-show-timer"), 10);
            b && (Yc(b), fd(a, "tooltip-show-timer"));
            b = t(function() {
                ch(this, a);
                fd(a, "tooltip-hide-timer")
            }, this);
            b = N(b, 50);
            this.setData(a, "tooltip-hide-timer", b.toString());
            if (b = this.getData(a, "tooltip-text")) a.title = b
        };
        p.Yg = function(a, b, c) {
            this.sc = 0;
            a = Jg(b, Y(this), c.changedTouches[0].target);
            this.fe(a)
        };
        p.oe = function(a, b, c) {
            this.sc = pa();
            a = Jg(b, Y(this), c.changedTouches[0].target);
            this.$c(a)
        };

        function dh(a, b, c, d) {
            a.setData(b, "tooltip-text", c);
            var e = a.getData(b, "content-id");
            if (e = E(e)) e.innerHTML = c, d && ch(a, b)
        }

        function bh(a, b) {
            if (b) {
                var c = a.getData(b, "tooltip-text") || b.title;
                if (c) {
                    var d = E(eh(a, b));
                    if (!d) {
                        d = document.createElement("div");
                        d.id = eh(a, b);
                        d.className = Y(a, "tip");
                        var e = document.createElement("div");
                        e.className = Y(a, "tip-body");
                        var f = document.createElement("div");
                        f.className = Y(a, "tip-arrow");
                        var h = document.createElement("div");
                        h.className = Y(a, "tip-content");
                        var j;
                        j = m;
                        tb && B(b, Y(a, "masked")) && ((j = E("yt-uix-tooltip-shared-mask")) ? (j.parentNode.removeChild(j), T(j)) : (j = document.createElement("iframe"),
                            j.src = 'javascript:""', j.id = "yt-uix-tooltip-shared-mask", j.className = Y(a, "tip-mask")));
                        var q = eh(a, b, "content");
                        h.id = q;
                        a.setData(b, "content-id", q);
                        e.appendChild(h);
                        j && d.appendChild(j);
                        d.appendChild(e);
                        d.appendChild(f);
                        (rd(["fullscreenElement", "fullScreenElement"]) || document.body).appendChild(d);
                        dh(a, b, c);
                        if ((c = parseInt(a.getData(b, "tooltip-max-width"), 10)) && e.offsetWidth > c) e.style.width = c + "px", y(h, Y(a, "normal-wrap"));
                        h = B(b, Y(a, "reverse"));
                        fh(a, b, d, e, j, h) || fh(a, b, d, e, j, !h);
                        var v = Y(a, "tip-visible");
                        N(function() {
                            y(d,
                                v)
                        }, 0)
                    }
                }
            }
        }

        function fh(a, b, c, d, e, f) {
            C(c, Y(a, "tip-reverse"), f);
            var h = 0;
            f && (h = 1);
            var j = je(b);
            f = new eb((j.width - 10) / 2, f ? j.height : 0);
            var q = ce(b);
            Fg(new eb(q.x + f.x, q.y + f.y), c, h);
            h = Wb(window);
            q = ge(c);
            c = je(d);
            var v = c.width / 2;
            e && (e.style.left = "3px", e.style.height = c.height + "px", e.style.width = c.width + "px");
            e = !!(h.height < q.y + j.height);
            j = !!(q.y < j.height);
            f = !!(q.x < v);
            h = !!(h.width < q.x + v);
            q = (c.width + 3) / -2 - -5;
            a = a.getData(b, "force-tooltip-direction");
            if ("left" == a || f) q = -5;
            else if ("right" == a || h) q = 20 - c.width - 3;
            d.style.left = q +
                "px";
            return !(e || j)
        }

        function ch(a, b) {
            if (b) {
                var c = E(eh(a, b));
                if (c) {
                    var d = E("yt-uix-tooltip-shared-mask"),
                        e = d && tc(d, function(a) {
                            return a == c
                        }, n, 2);
                    d && e && (d.parentNode.removeChild(d), U(d), document.body.appendChild(d));
                    fc(c);
                    fd(b, "content-id")
                }
            }
        }

        function eh(a, b, c) {
            a = Y(a) + id(b);
            c && (a += "-" + c);
            return a
        };

        function gh(a, b, c) {
            window.location = Qe(a, b || {}) + (c || "")
        }

        function hh(a, b) {
            var c = b || {};
            c.target = c.target || a.target || "YouTube";
            c.width = c.width || 600;
            c.height = c.height || 600;
            var d = c;
            d || (d = {});
            var e = window,
                c = "undefined" != typeof a.href ? a.href : String(a),
                f = d.target || a.target,
                h = [],
                j;
            for (j in d) switch (j) {
                case "width":
                case "height":
                case "top":
                case "left":
                    h.push(j + "=" + d[j]);
                    break;
                case "target":
                case "noreferrer":
                    break;
                default:
                    h.push(j + "=" + (d[j] ? 1 : 0))
            }
            j = h.join(",");
            if (d.noreferrer) {
                if (d = e.open("", f, j)) D && -1 != c.indexOf(";") && (c = "'" + c.replace(/'/g, "%27") + "'"), d.opener =
                    m, Ab ? d.location.href = c : (c = xa(c), d.document.write('<META HTTP-EQUIV="refresh" content="0; url=' + c + '">'), d.document.close())
            } else d = e.open(c, f, j);
            c = d;
            if (!c) return m;
            c.opener || (c.opener = window);
            c.focus();
            return c
        }

        function ih(a, b) {
            return !hh(a, b)
        };

        function jh(a) {
            var b = m;
            "transition" in a.style ? b = "transition-duration" : "webkitTransition" in a.style ? b = "-webkit-transition-duration" : "MozTransition" in a.style ? b = "-moz-transition-duration" : "OTransition" in a.style ? b = "-o-transition-duration" : "msTransition" in a.style && (b = "-ms-transition-duration");
            a = b ? (document.defaultView ? document.defaultView.getComputedStyle(a, m) : document.parentWindow.getComputedStyle(a, m)).getPropertyValue(b) : "0";
            return 1E3 * parseFloat(a)
        };

        function kh(a) {
            var b = L("CONVERSION_CONFIG_DICT");
            if (b) {
                var c = "followon_" + a;
                if (!b.baseUrl || !b.uid) a = m;
                else {
                    var d = b.rmktEnabled,
                        e = b.focEnabled && !b.isAd;
                    if (!d && !e) a = m;
                    else {
                        c = {
                            label: e ? c : "default"
                        };
                        if (d) {
                            d = {
                                utuid: b.uid,
                                type: a
                            };
                            b.vid && (d.utvid = b.vid);
                            b.eventLabel && (d.el = b.eventLabel);
                            b.playerStyle && (d.ps = b.playerStyle);
                            b.feature && (d.feature = b.feature);
                            b.ppe && (d.ppe = b.ppe);
                            var f = [],
                                h;
                            for (h in d) f.push(encodeURIComponent(h) + "=" + encodeURIComponent(d[h]));
                            c.data = f.join(";")
                        }
                        if (e && "view" == a && b.vid && b.uid && (b.oeid ||
                                b.ieid)) b.oeid && (c.oeid = b.oeid), b.ieid && (c.ieid = b.ieid), c.evid = b.vid;
                        e && (c.foc_id = b.uid);
                        a = Qe(b.baseUrl, c)
                    }
                }
                a && zg(a)
            }
        };

        function lh(a, b, c, d, e) {
            this.u = a;
            this.Fc = n;
            a = Ce() + "/share_ajax";
            c = {
                action_get_email: 1,
                video_id: c,
                list: d
            };
            e && (c.new_share = 1);
            X(a, {
                format: "JSON",
                A: c,
                o: function(a, c) {
                    this.u.innerHTML = c.email_html;
                    this.Qa();
                    this.focus();
                    var d = c.sharing_binary_url;
                    if (d) {
                        var e = c.contacts;
                        fg(d, t(function() {
                            var a = s("yt.sharing.ContactTools");
                            a && a.createContactTools(this.Ac, m, e, b)
                        }, this))
                    }
                },
                D: this
            })
        }
        p = lh.prototype;
        p.Qa = function() {
            this.C = this.u.getElementsByTagName("form")[0];
            Q(this.C, "submit", t(this.pf, this));
            K("share-email-send", this.C);
            this.La = K("share-email-success", this.u);
            this.g = K("share-email-remail", this.La);
            Q(this.g, "click", t(function() {
                mh(this);
                this.focus()
            }, this));
            this.Ac = K("share-email-recipients", this.u);
            this.b = K("share-email-note", this.u);
            this.e = K("share-email-preview-note", this.u);
            Q(this.b, "keyup", t(this.of, this))
        };
        p.xa = function() {
            this.C && (this.Fc && mh(this), this.focus())
        };
        p.focus = function() {
            this.Ac.focus()
        };

        function mh(a) {
            a.Fc = n;
            a.Ac.value = "";
            a.b.value = "";
            a.e.innerHTML = "";
            U(a.La);
            T(a.C)
        }
        p.of = function() {
            var a = this.b.value,
                a = a.substring(0, 300),
                a = xa(a),
                a = a.replace(/\n/g, "<br>");
            this.e.innerHTML = a
        };
        p.pf = function(a) {
            a.preventDefault();
            var b = J("button", m, this.C)[0];
            b.disabled = l;
            var c = K("share-email-captcha", this.u),
                d = K("share-email-error", this.u),
                e = K("yt-alert-content", d);
            a = Ce() + De(this.C.action);
            X(a, {
                format: "JSON",
                method: "POST",
                Sa: Dc(this.C),
                o: function() {
                    this.Fc = l;
                    T(this.La);
                    U(this.C);
                    U(d);
                    U(c)
                },
                onError: function(a, b) {
                    b.captcha_html && (c.innerHTML = b.captcha_html, T(c));
                    b.errors && (e.innerHTML = b.errors.join("<br>"), T(d))
                },
                V: function() {
                    b.disabled = n
                },
                D: this
            })
        };

        function nh() {
            this.b = {}
        }
        w(nh, Ng);
        ba(nh);
        p = nh.prototype;
        p.R = "form-input";
        p.register = function() {
            D && !Nb(9) && (Z(this, "click", this.nc, "checkbox"), Z(this, "keypressed", this.nc, "checkbox"), Z(this, "click", this.ee, "radio"), Z(this, "keypressed", this.ee, "radio"));
            Z(this, "change", this.nc, "checkbox");
            Z(this, "blur", this.Lg, "select-element");
            Z(this, "change", this.Ja, "select-element");
            Z(this, "keyup", this.Ja, "select-element");
            Z(this, "focus", this.Mg, "select-element");
            Z(this, "keyup", this.Yc, "text");
            Z(this, "keyup", this.Yc, "textarea");
            Z(this, "keyup", this.Yc, "bidi");
            Z(this, "click", this.Ng, "reset")
        };
        p.nc = function(a) {
            var b = uc(a, Y(this, "checkbox-container"));
            a.checked && B(b, "partial") && (a.checked = n, a.g = n, z(b, "partial"));
            C(b, "checked", a.checked)
        };
        p.Ih = function(a) {
            var b = uc(a, Y(this, "radio-container"));
            b && C(b, "checked", a.checked)
        };
        p.ee = function() {
            oh()
        };
        p.Yc = function(a) {
            var b = a.value,
                c = "";
            Mc(b) ? c = "rtl" : Kc.test(b) && (c = "ltr");
            a.dir = c
        };
        p.Mg = function(a) {
            var b = uc(a, Y(this, "select"));
            y(b, "focused");
            this.Ja(a)
        };
        p.Lg = function(a) {
            var b = uc(a, Y(this, "select"));
            z(b, "focused");
            this.Ja(a)
        };
        p.Ja = function(a) {
            var b = uc(a, Y(this, "select")),
                b = K(Y(this, "select-value"), b),
                c = a.options[Math.max(a.selectedIndex, 0)];
            c && ("" != b.innerHTML && c.innerHTML != b.innerHTML && this.na(a, "onchange-callback"), b.innerHTML = c.innerHTML)
        };
        p.Ng = function() {
            var a = nh.getInstance(),
                b = G(Y(a, "checkbox"));
            x(b, a.nc, a);
            oh();
            ph()
        };

        function oh() {
            var a = nh.getInstance(),
                b = G(Y(a, "radio"));
            x(b, a.Ih, a)
        }

        function ph() {
            var a = nh.getInstance(),
                b = G(Y(a, "select-element"));
            x(b, a.Ja, a)
        };

        function qh(a, b, c, d) {
            this.u = a;
            this.pb = d || n;
            a = Ce() + "/share_ajax";
            b = {
                action_get_embed: 1,
                video_id: b,
                list: c
            };
            this.pb && (b.new_share = 1);
            X(a, {
                format: "JSON",
                A: b,
                o: function(a, b) {
                    this.u.innerHTML = b.embed_html;
                    this.tf = b.legacy_url;
                    this.sf = b.legacy_code;
                    this.rf = b.iframe_url;
                    this.qf = b.iframe_code;
                    this.Qa();
                    var c = Ld.getInstance();
                    this.Oa && (this.Oa.checked = !Qd(0, Td.Ld));
                    this.Nb.checked = Qd(0, Td.Kd);
                    this.Na && (this.Na.checked = Qd(0, Td.Md));
                    a: if (c = c.get("ems"), this.pb) {
                        "custom" == c && T(E("share-embed-customize"));
                        for (var d =
                                0; d < this.Pa.length; d++) {
                            var q = this.Pa[d];
                            if (q.value == c) {
                                q.selected = l;
                                nh.getInstance().Ja(this.ya);
                                break a
                            }
                        }
                        this.Pa[0].selected = l;
                        nh.getInstance().Ja(this.ya)
                    } else(c in this.pa ? this.pa[c] : ib(this.pa)).select();
                    rh(this);
                    this.xa()
                },
                D: this
            })
        }
        p = qh.prototype;
        p.ib = 0;
        p.zb = 0;
        p.Qa = function() {
            this.b = K("share-embed-code", this.u);
            Q(this.b, "click", t(this.Je, this));
            if (this.pb) {
                this.ya = E("embed-layout-options");
                this.Pa = J("option", m, this.ya);
                var a = parseInt(P(this.Pa[0], "width"), 10),
                    b = parseInt(P(this.Pa[0], "height"), 10);
                this.g = a / b;
                Q(this.ya, "change", t(function() {
                    var a = this.ya.options[Math.max(this.ya.selectedIndex, 0)],
                        a = !a ? m : a.value || a.text;
                    Ld.getInstance().set("ems", a);
                    Sd();
                    rh(this);
                    var b = E("share-embed-customize");
                    "custom" == a ? T(b) : (U(b), this.focus())
                }, this));
                a = E("share-embed-customize");
                this.i = K("share-embed-size-custom-width", a);
                this.e = K("share-embed-size-custom-height", a);
                Q(this.i, "keyup", t(this.Pe, this));
                Q(this.e, "keyup", t(this.Oe, this))
            } else {
                a = K("share-embed-size-list", this.u);
                b = G("share-embed-size-radio", a);
                this.pa = {};
                x(b, function(a) {
                    B(a, "share-embed-size-radio-custom") || (a = new sh(a), this.pa[a.name] = a)
                }, this);
                var b = ib(this.pa).width / ib(this.pa).height,
                    c = K("share-embed-size-radio-custom", a),
                    b = new th(c, b);
                this.z = this.pa[b.name] = b;
                S(a, "click", t(this.Le, this), "share-embed-size");
                a = K("share-embed-customize", a);
                Q(a, "keyup", t(this.Qe, this))
            }
            var d = {},
                a = G("share-embed-option", this.u);
            x(a, function(a) {
                d[a.name] = a
            });
            (this.Oa = d["show-related"]) && Q(this.Oa, "click", t(this.Ke, this));
            this.Nb = d["delayed-cookies"];
            Q(this.Nb, "click", t(this.Ie, this));
            this.k = d["use-https"];
            Q(this.k, "click", t(this.Ne, this));
            (this.Na = d["use-flash-code"] || m) && Q(this.Na, "click", t(this.Me, this))
        };
        p.Pe = function() {
            this.ib = parseInt(this.i.value, 10);
            this.zb = Math.round(this.ib / this.g) || 0;
            this.e.value = this.zb + "";
            rh(this)
        };
        p.Oe = function() {
            this.zb = parseInt(this.e.value, 10);
            this.ib = Math.round(this.zb * this.g) || 0;
            this.ib.value = this.ib + "";
            rh(this)
        };
        p.xa = function() {
            this.focus()
        };
        p.focus = function() {
            this.b && (this.b.focus(), this.b.select())
        };

        function rh(a) {
            var b = a.qf,
                c = a.rf;
            a.Na && a.Na.checked && (b = a.sf, c = a.tf);
            a.Nb.checked && (c = c.replace("youtube.com", "youtube-nocookie.com"));
            a.k.checked && (c = c.split("//"), c[0] = "https:", c = c.join("//"));
            var d = {};
            a.Oa && !a.Oa.checked && (d.rel = 0);
            c = Se(c, d);
            if (a.pb) {
                var e = a.ya.options[Math.max(a.ya.selectedIndex, 0)];
                e ? "custom" == e.value ? d = {
                    width: a.ib,
                    height: a.zb
                } : (d = parseInt(P(e, "width"), 10), e = parseInt(P(e, "height"), 10), d = {
                    width: d,
                    height: e
                }) : d = {
                    width: 0,
                    height: 0
                }
            } else d = a.pa, d = (e = kb(d, function(a) {
                    return a.b.checked
                },
                k)) && d[e], d = !d ? {
                width: 0,
                height: 0
            } : {
                width: d.width,
                height: d.height
            };
            if (!d.width || 200 > d.width) a.pb ? (d = parseInt(P(a.Pa[0], "width"), 10), e = parseInt(P(a.Pa[0], "height"), 10), d = {
                width: d,
                height: e
            }) : d = ib(a.pa);
            b = b.replace(/__url__/g, xa(c));
            b = b.replace(/__width__/g, d.width + "");
            b = b.replace(/__height__/g, d.height + "");
            b = xa(b);
            b != a.b.innerHTML && (a.b.innerHTML = b)
        }
        p.Ke = function() {
            var a = this.Oa.checked;
            Ld.getInstance();
            Rd(Td.Ld, !a);
            Sd();
            rh(this)
        };
        p.Ie = function() {
            var a = this.Nb.checked;
            Ld.getInstance();
            Rd(Td.Kd, a);
            Sd();
            rh(this)
        };
        p.Ne = function() {
            rh(this)
        };
        p.Me = function() {
            var a = this.Na.checked;
            Ld.getInstance();
            Rd(Td.Md, a);
            Sd();
            rh(this)
        };
        p.Je = function() {
            this.focus()
        };
        p.Le = function(a) {
            a = K("share-embed-size-radio", a.currentTarget);
            a = this.pa[a.value];
            a.select();
            Ld.getInstance().set("ems", a.name);
            Sd();
            rh(this);
            a != this.z && this.focus()
        };
        p.Qe = function() {
            rh(this)
        };

        function sh(a) {
            this.name = a.value;
            this.b = a;
            this.width = parseInt(P(this.b, "width"), 10);
            this.height = parseInt(P(this.b, "height"), 10)
        }
        sh.prototype.select = function() {
            this.b.checked = l;
            var a = sc(this.b, "li"),
                b = sc(a, "ul"),
                b = J("li", "selected", b);
            x(b, function(a) {
                z(a, "selected")
            });
            y(a, "selected")
        };

        function th(a, b) {
            sh.call(this, a);
            this.i = b;
            var c = sc(a, "li");
            this.g = K("share-embed-size-custom-width", c);
            this.e = K("share-embed-size-custom-height", c);
            Q(this.g, "keyup", t(this.z, this));
            Q(this.e, "keyup", t(this.k, this))
        }
        w(th, sh);
        th.prototype.z = function() {
            this.width = parseInt(this.g.value, 10);
            this.height = Math.round(this.width / this.i) || 0;
            this.e.value = this.height + ""
        };
        th.prototype.k = function() {
            this.height = parseInt(this.e.value, 10);
            this.width = Math.round(this.height * this.i) || 0;
            this.g.value = this.width + ""
        };

        function uh(a, b, c, d, e, f, h, j) {
            this.u = a;
            this.X = b || m;
            this.U = c || m;
            this.T = n;
            this.z = h || n;
            this.xb = j || m;
            a = Ce() + "/share_ajax";
            b = {
                action_get_share_box: 1,
                video_id: this.X,
                list: this.U,
                feature: this.xb
            };
            this.z && (b.new_share = 1, this.U && (b.render_playlist_options = 1));
            X(a, {
                format: "JSON",
                A: b,
                o: function(a, b) {
                    this.u.innerHTML = b.share_html;
                    this.Cd = b.url_short;
                    this.Bd = b.url_long;
                    this.xc = b.lang;
                    this.cb = m;
                    "session_index" in b && (this.cb = b.session_index);
                    this.Qa();
                    d && d();
                    this.xa()
                },
                D: this
            })
        }
        var vh = {
            FACEBOOK: "share_facebook",
            BLOGGER: "share_blogger",
            TWITTER: "share_twitter",
            GOOGLEPLUS: "share_gplus"
        };
        p = uh.prototype;
        p.Qa = function() {
            var a = K("share-panel-show-url-options");
            Q(a, "click", t(this.Qf, this));
            a = K("share-panel-show-more");
            Q(a, "click", t(this.Lf, this));
            a = K("share-panel-services", this.u);
            Q(a, "click", t(this.Mf, this));
            a = K("share-panel-embed", this.u);
            Q(a, "click", t(this.Jf, this));
            a = K("share-panel-email", this.u);
            Q(a, "click", t(this.If, this));
            (a = K("share-panel-hangout", this.u)) && Q(a, "click", t(this.Kf, this));
            this.$ = K("share-panel-url", this.u);
            Q(this.$, "click", t(this.Rf, this));
            Q(this.$, "focus", t(function() {
                y(this.$,
                    "focused")
            }, this));
            Q(this.$, "blur", t(function() {
                z(this.$, "focused")
            }, this));
            this.ab = K("share-panel-long-url", this.u);
            this.i = K("share-panel-start-at", this.u);
            this.ga = K("share-panel-start-at-time", this.u);
            Q(this.ga, "change", t(this.Hf, this));
            Q(this.ga, "click", t(this.Pf, this));
            Q(this.ga, "focus", t(function() {
                y(this.ga, "focused")
            }, this));
            Q(this.ga, "blur", t(function() {
                z(this.ga, "focused")
            }, this));
            this.Ma = K("share-panel-hd", this.u);
            this.k = K("share-panel-url-options", this.u);
            Q(this.k, "click", t(this.Xb, this));
            this.H = K("share-panel-services", this.u);
            this.N = K("share-panel-buttons", this.u);
            a = K("share-panel-show-more", this.u);
            Q(a, "click", t(this.Of, this));
            S(this.u, "click", t(this.Nf, this), "share-service-button");
            this.z && (S(this.u, "click", t(this.Sf, this), "share-service-expand-arrow"), this.g = K("share-panel-services-container", this.u), Q(E("share-with-playlist"), "click", t(this.Vf, this)), Q(E("share-with-playlist-current"), "click", t(this.Tf, this)), Q(E("share-with-playlist-first"), "click", t(this.Uf, this)))
        };
        p.Sf = function(a) {
            var b = uc(a.target, "secondary");
            a = K("overlay", b);
            var c = B(b, "expanded"),
                d = jh(a),
                e = "rtl" == document.body.getAttribute("dir") ? "right" : "left",
                c = c ? "0px" : je(b).width + "px";
            a.style[e] = c;
            N(function() {
                db(b, "expanded")
            }, d)
        };
        p.xa = function() {
            this.$ && !B(this.$, "focused") && (this.$.focus(), this.$.select())
        };
        p.Xb = function() {
            if (!B(this.$, "focused")) {
                var a = this.Cd;
                this.ab && this.ab.checked && (a = this.Bd);
                var b = {};
                this.Ma && this.Ma.checked && (b.hd = 1);
                var c;
                if (c = !this.i.disabled)
                    if (c = this.i.checked) {
                        var d = this.ga.value;
                        c = ["h", "m", "s"];
                        var e = Ua(c);
                        e.reverse();
                        var f = {},
                            d = d.toLowerCase().match(/\d+\s*[hms]?/g) || [],
                            d = Ja(d, function(a) {
                                var b = (a.match(/[hms]/) || [""])[0];
                                return b ? (f[b] = parseInt(a.match(/\d+/)[0], 10), n) : l
                            });
                        for (d.reverse(); d.length && e.length;) {
                            var h = e.shift();
                            h in f || (f[h] = parseInt(d.shift(), 10))
                        }
                        if (d.length ||
                            59 < f.s || 59 < f.m || 9 < f.h) c = m;
                        else {
                            var j = "";
                            x(c, function(a) {
                                f[a] && (j += f[a] + a)
                            });
                            c = j || m
                        }
                    } c && (b.t = c);
                a = Qe(a, b);
                this.$.value != a && (this.$.value = a)
            }
        };
        p.Hf = function() {
            this.T = l;
            this.i.checked = l;
            this.Xb()
        };
        p.Pf = function() {
            this.i.checked = l;
            this.ga.value.match(/[1-9]/) || (this.ga.value = "")
        };
        p.Rf = function() {
            this.$.select()
        };
        p.If = function() {
            var a = Yg.getInstance();
            $g(a, this.N);
            $g(a, this.k);
            $g(a, this.H);
            this.e && U(this.e);
            this.g && U(this.g);
            this.b || (this.b = K("share-panel-email-container", this.u));
            se(this.b);
            !P(this.b, "disabled") && re(this.b) && (this.ba ? this.ba.xa() : this.ba = new lh(this.b, this.cb, this.X, this.U, this.z));
            kh("share_mail")
        };
        p.Kf = function() {
            var a = L("PLAYER_REFERENCE");
            a && a.pauseVideo && a.pauseVideo();
            var a = Qe("https://web.archive.org/web/20121218011521/https://talkgadget.google.com/hangouts", {
                    hl: this.xc,
                    authuser: this.cb,
                    gid: "youtube",
                    gd: this.X,
                    hs: 5
                }),
                b = window.screen.height,
                c = Math.min(0.9 * window.screen.width, 1E3),
                b = Math.min(0.9 * b, 800);
            Cg("HANGOUT", this.X + "");
            hh(a, {
                width: c,
                height: b
            })
        };
        p.Jf = function() {
            var a = Yg.getInstance();
            $g(a, this.N);
            $g(a, this.k);
            $g(a, this.H);
            this.b && U(this.b);
            this.g && U(this.g);
            this.e || (this.e = K("share-panel-embed-container", this.u));
            se(this.e);
            !P(this.e, "disabled") && re(this.e) && (this.ia ? this.ia.xa() : this.ia = new qh(this.e, this.X, this.U, this.z));
            kh("share_embed")
        };
        p.Nf = function(a) {
            a = P(a.currentTarget, "service-name") || "";
            (a = vh[a]) && kh(a)
        };
        p.Qf = function() {
            $g(Yg.getInstance(), this.H);
            this.b && U(this.b);
            this.e && U(this.e)
        };
        p.Lf = function() {
            $g(Yg.getInstance(), this.k);
            this.b && U(this.b);
            this.e && U(this.e)
        };
        p.Of = function() {
            wh(this)
        };
        p.Mf = function() {
            wh(this);
            this.g && T(this.g)
        };

        function wh(a) {
            a.b && U(a.b);
            a.e && U(a.e)
        }
        p.Vf = function(a) {
            xh(this);
            var b = n;
            a.target.checked && (b = sc(E("share-with-playlist-first"), "li"), b = B(b, "yt-uix-button-menu-item-selected"));
            yh(this, a.target.checked, b)
        };

        function zh(a) {
            E("share-with-playlist").checked = l;
            xh(a)
        }

        function xh(a) {
            var b = E("share-with-playlist").checked;
            K("share-panel-start-at", a.g).disabled = b;
            K("share-panel-start-at-time", a.g).disabled = b
        }
        p.Tf = function() {
            zh(this);
            yh(this, l)
        };
        p.Uf = function() {
            zh(this);
            yh(this, l, l)
        };

        function yh(a, b, c) {
            var d = {
                action_get_share_urls: 1,
                video_id: a.X
            };
            b && (d.list = a.U);
            c && (d.use_first_video = l);
            X("share_ajax", {
                format: "JSON",
                A: d,
                o: function(a, b) {
                    this.Cd = b.url_short;
                    this.Bd = b.url_long;
                    this.Xb();
                    E("share-services-container").innerHTML = b.share_services_html
                },
                D: a
            })
        };

        function Ah() {}
        p = Ah.prototype;
        p.he = n;
        p.Kb = m;
        p.mc = m;
        p.init = function() {
            if (!this.he) {
                this.he = l;
                this.Kb = K("player-root", k);
                this.mc = K("player-actions-container", this.Kb);
                var a = K("player-actions-close", this.mc);
                Q(a, "click", t(this.Sg, this))
            }
        };
        p.Sg = function() {
            C(this.Kb, "actions-mode", n)
        };
        p.Qg = function() {
            600 > this.Kb.clientWidth && y(this.mc, "small-view")
        };
        p.Zc = m;
        p.zf = function(a) {
            a = a || {};
            this.init();
            C(this.Kb, "actions-mode", l);
            if (this.Zc) this.Zc.xa();
            else {
                var b = K("player-actions-share", this.mc);
                this.Zc = new uh(b, a.videoId, a.listId, t(this.Qg, this), 0, 0, n, a.feature)
            }
        };

        function Bh(a) {
            Bh[" "](a);
            return a
        }
        Bh[" "] = aa;
        var Ch = !D || D && 9 <= Pb,
            Dh = D && !Nb("9");
        !Ab || Nb("528");
        zb && Nb("1.9b") || D && Nb("8") || yb && Nb("9.5") || Ab && Nb("528");
        zb && !Nb("8") || D && Nb("9");

        function Eh(a, b) {
            this.type = a;
            this.currentTarget = this.target = b
        }
        p = Eh.prototype;
        p.ra = function() {};
        p.Za = n;
        p.kc = l;
        p.stopPropagation = function() {
            this.Za = l
        };
        p.preventDefault = function() {
            this.kc = n
        };

        function Fh(a, b) {
            a && this.init(a, b)
        }
        w(Fh, Eh);
        p = Fh.prototype;
        p.target = m;
        p.relatedTarget = m;
        p.clientX = 0;
        p.clientY = 0;
        p.keyCode = 0;
        p.charCode = 0;
        p.ctrlKey = n;
        p.altKey = n;
        p.shiftKey = n;
        p.Ka = m;
        p.init = function(a, b) {
            var c = this.type = a.type;
            Eh.call(this, c);
            this.target = a.target || a.srcElement;
            this.currentTarget = b;
            var d = a.relatedTarget;
            if (d) {
                if (zb) {
                    var e;
                    a: {
                        try {
                            Bh(d.nodeName);
                            e = l;
                            break a
                        } catch (f) {}
                        e = n
                    }
                    e || (d = m)
                }
            } else "mouseover" == c ? d = a.fromElement : "mouseout" == c && (d = a.toElement);
            this.relatedTarget = d;
            this.clientX = a.clientX !== k ? a.clientX : a.pageX;
            this.clientY = a.clientY !== k ? a.clientY : a.pageY;
            this.keyCode = a.keyCode || 0;
            this.charCode = a.charCode || ("keypress" == c ? a.keyCode : 0);
            this.ctrlKey = a.ctrlKey;
            this.altKey =
                a.altKey;
            this.shiftKey = a.shiftKey;
            this.Ka = a;
            a.defaultPrevented && this.preventDefault();
            delete this.Za
        };
        p.stopPropagation = function() {
            Fh.L.stopPropagation.call(this);
            this.Ka.stopPropagation ? this.Ka.stopPropagation() : this.Ka.cancelBubble = l
        };
        p.preventDefault = function() {
            Fh.L.preventDefault.call(this);
            var a = this.Ka;
            if (a.preventDefault) a.preventDefault();
            else if (a.returnValue = n, Dh) try {
                if (a.ctrlKey || 112 <= a.keyCode && 123 >= a.keyCode) a.keyCode = -1
            } catch (b) {}
        };
        p.bh = function() {
            return this.Ka
        };

        function Gh() {}
        var Hh = 0;
        p = Gh.prototype;
        p.key = 0;
        p.Ua = n;
        p.$b = n;
        p.init = function(a, b, c, d, e, f) {
            ha(a) ? this.b = l : a && a.handleEvent && ha(a.handleEvent) ? this.b = n : g(Error("Invalid listener argument"));
            this.ob = a;
            this.e = b;
            this.src = c;
            this.type = d;
            this.capture = !!e;
            this.Zb = f;
            this.$b = n;
            this.key = ++Hh;
            this.Ua = n
        };
        p.handleEvent = function(a) {
            return this.b ? this.ob.call(this.Zb || this.src, a) : this.ob.handleEvent.call(this.ob, a)
        };
        var Ih = {},
            Jh = {},
            Kh = {},
            Lh = {};

        function Mh(a, b, c, d, e) {
            if (ea(b)) {
                for (var f = 0; f < b.length; f++) Mh(a, b[f], c, d, e);
                return m
            }
            a: {
                b || g(Error("Invalid event type"));d = !!d;
                var h = Jh;b in h || (h[b] = {
                    Q: 0,
                    ha: 0
                });h = h[b];d in h || (h[d] = {
                    Q: 0,
                    ha: 0
                }, h.Q++);
                var h = h[d],
                    f = ja(a),
                    j;h.ha++;
                if (h[f]) {
                    j = h[f];
                    for (var q = 0; q < j.length; q++)
                        if (h = j[q], h.ob == c && h.Zb == e) {
                            if (h.Ua) break;
                            j[q].$b = n;
                            a = j[q].key;
                            break a
                        }
                } else j = h[f] = [],
                h.Q++;
                var v = Nh,
                    H = Ch ? function(a) {
                        return v.call(H.src, H.key, a)
                    } : function(a) {
                        a = v.call(H.src, H.key, a);
                        if (!a) return a
                    },
                    q = H;q.src = a;h = new Gh;h.init(c,
                    q, a, b, d, e);h.$b = n;c = h.key;q.key = c;j.push(h);Ih[c] = h;Kh[f] || (Kh[f] = []);Kh[f].push(h);a.addEventListener ? (a == r || !a.Qd) && a.addEventListener(b, q, d) : a.attachEvent(b in Lh ? Lh[b] : Lh[b] = "on" + b, q);a = c
            }
            return a
        }

        function Oh(a, b, c, d, e) {
            if (ea(b))
                for (var f = 0; f < b.length; f++) Oh(a, b[f], c, d, e);
            else if (d = !!d, a = Ph(a, b, d))
                for (f = 0; f < a.length; f++)
                    if (a[f].ob == c && a[f].capture == d && a[f].Zb == e) {
                        Qh(a[f].key);
                        break
                    }
        }

        function Qh(a) {
            if (!Ih[a]) return n;
            var b = Ih[a];
            if (b.Ua) return n;
            var c = b.src,
                d = b.type,
                e = b.e,
                f = b.capture;
            c.removeEventListener ? (c == r || !c.Qd) && c.removeEventListener(d, e, f) : c.detachEvent && c.detachEvent(d in Lh ? Lh[d] : Lh[d] = "on" + d, e);
            c = ja(c);
            Kh[c] && (e = Kh[c], Ra(e, b), 0 == e.length && delete Kh[c]);
            b.Ua = l;
            if (b = Jh[d][f][c]) b.Rd = l, Rh(d, f, c, b);
            delete Ih[a];
            return l
        }

        function Rh(a, b, c, d) {
            if (!d.ec && d.Rd) {
                for (var e = 0, f = 0; e < d.length; e++) d[e].Ua ? d[e].e.src = m : (e != f && (d[f] = d[e]), f++);
                d.length = f;
                d.Rd = n;
                0 == f && (delete Jh[a][b][c], Jh[a][b].Q--, 0 == Jh[a][b].Q && (delete Jh[a][b], Jh[a].Q--), 0 == Jh[a].Q && delete Jh[a])
            }
        }

        function Ph(a, b, c) {
            var d = Jh;
            return b in d && (d = d[b], c in d && (d = d[c], a = ja(a), d[a])) ? d[a] : m
        }

        function Sh(a, b, c, d, e) {
            var f = 1;
            b = ja(b);
            if (a[b]) {
                a.ha--;
                a = a[b];
                a.ec ? a.ec++ : a.ec = 1;
                try {
                    for (var h = a.length, j = 0; j < h; j++) {
                        var q = a[j];
                        q && !q.Ua && (f &= Th(q, e) !== n)
                    }
                } finally {
                    a.ec--, Rh(c, d, b, a)
                }
            }
            return Boolean(f)
        }

        function Th(a, b) {
            a.$b && Qh(a.key);
            return a.handleEvent(b)
        }

        function Nh(a, b) {
            if (!Ih[a]) return l;
            var c = Ih[a],
                d = c.type,
                e = Jh;
            if (!(d in e)) return l;
            var e = e[d],
                f, h;
            if (!Ch) {
                f = b || s("window.event");
                var j = l in e,
                    q = n in e;
                if (j) {
                    if (0 > f.keyCode || f.returnValue != k) return l;
                    a: {
                        var v = n;
                        if (0 == f.keyCode) try {
                            f.keyCode = -1;
                            break a
                        } catch (H) {
                            v = l
                        }
                        if (v || f.returnValue == k) f.returnValue = l
                    }
                }
                v = new Fh;
                v.init(f, this);
                f = l;
                try {
                    if (j) {
                        for (var F = [], I = v.currentTarget; I; I = I.parentNode) F.push(I);
                        h = e[l];
                        h.ha = h.Q;
                        for (var R = F.length - 1; !v.Za && 0 <= R && h.ha; R--) v.currentTarget = F[R], f &= Sh(h, F[R], d, l, v);
                        if (q) {
                            h = e[n];
                            h.ha = h.Q;
                            for (R = 0; !v.Za && R < F.length && h.ha; R++) v.currentTarget = F[R], f &= Sh(h, F[R], d, n, v)
                        }
                    } else f = Th(c, v)
                } finally {
                    F && (F.length = 0)
                }
                return f
            }
            d = new Fh(b, this);
            return f = Th(c, d)
        };

        function Uh() {}
        w(Uh, mf);
        p = Uh.prototype;
        p.Qd = l;
        p.jc = m;
        p.Uc = function(a) {
            this.jc = a
        };
        p.addEventListener = function(a, b, c, d) {
            Mh(this, a, b, c, d)
        };
        p.removeEventListener = function(a, b, c, d) {
            Oh(this, a, b, c, d)
        };
        p.dispatchEvent = function(a) {
            var b = a.type || a,
                c = Jh;
            if (b in c) {
                if (ga(a)) a = new Eh(a, this);
                else if (a instanceof Eh) a.target = a.target || this;
                else {
                    var d = a;
                    a = new Eh(b, this);
                    nb(a, d)
                }
                var d = 1,
                    e, c = c[b],
                    b = l in c,
                    f;
                if (b) {
                    e = [];
                    for (f = this; f; f = f.jc) e.push(f);
                    f = c[l];
                    f.ha = f.Q;
                    for (var h = e.length - 1; !a.Za && 0 <= h && f.ha; h--) a.currentTarget = e[h], d &= Sh(f, e[h], a.type, l, a) && a.kc != n
                }
                if (n in c)
                    if (f = c[n], f.ha = f.Q, b)
                        for (h = 0; !a.Za && h < e.length && f.ha; h++) a.currentTarget = e[h], d &= Sh(f, e[h], a.type, n, a) && a.kc != n;
                    else
                        for (e = this; !a.Za && e &&
                            f.ha; e = e.jc) a.currentTarget = e, d &= Sh(f, e, a.type, n, a) && a.kc != n;
                a = Boolean(d)
            } else a = l;
            return a
        };
        p.W = function() {
            Uh.L.W.call(this);
            var a, b = 0,
                c = a == m;
            a = !!a;
            if (this == m) hb(Kh, function(d) {
                for (var e = d.length - 1; 0 <= e; e--) {
                    var f = d[e];
                    if (c || a == f.capture) Qh(f.key), b++
                }
            });
            else {
                var d = ja(this);
                if (Kh[d])
                    for (var d = Kh[d], e = d.length - 1; 0 <= e; e--) {
                        var f = d[e];
                        if (c || a == f.capture) Qh(f.key), b++
                    }
            }
            this.jc = m
        };
        new Uh;
        ub().match(/CPU OS (\d+)_/);
        rd(["fullscreenEnabled", "fullScreenEnabled"]);
        var Vh = {};

        function Wh(a, b, c) {
            if (a = E(a)) {
                b = b instanceof We ? b : new We(b);
                var d = !b.args.jsapicallback,
                    e = "player" + ja(a),
                    f = Vh[e];
                f && f.jd();
                f = new Xh(a, e, b, c);
                Vh[e] = f;
                N(function() {
                    d && (r.onYouTubePlayerReady = function() {
                        Yh(e)
                    });
                    f.write()
                }, 0);
                return f.b
            }
        }

        function Zh(a, b, c) {
            return Wh(a, b, {
                force: c
            })
        }

        function $h(a) {
            if (a = E(a)) {
                a = "player" + ja(a);
                var b = Vh[a];
                b && b.ra();
                delete Vh[a]
            }
        }

        function Yh(a) {
            a = Vh[a];
            if (!a.Ic) {
                a.Ic = l;
                var b = gc(a.g),
                    c = b.getApiInterface();
                x(c, function(a) {
                    "addEventListener" == a ? this.b.nativeAddEventListener = t(b[a], b) : "destroy" == a ? this.b.b = t(b[a], b) : this.b[a] = t(b[a], b)
                }, a);
                for (var d in a.i) a.b.nativeAddEventListener(d, a.i[d]);
                ai(a) && a.H && a.Rb("SHARE_CLICKED", t(a.H.zf, a.H));
                a.Rb("onTabOrderChange", t(a.xf, a));
                a.Rb("onNavigate", t(a.yf, a));
                a.Tb && a.Tb(a.z)
            }
        }

        function Xh(a, b, c, d) {
            this.g = this.e = a;
            this.z = b;
            bi(this, c, d);
            a = this.K;
            b = !!a.disable.html5;
            c = !!a.disable.flash;
            d = ub();
            (!d ? 0 : 0 <= d.toLowerCase().indexOf("android 2.2")) ? d = l: (d = document.createElement("video"), d = !(!d || !d.canPlayType || !d.canPlayType('video/mp4; codecs="avc1.42001E, mp4a.40.2"') && !d.canPlayType('video/webm; codecs="vp8.0, vorbis"')));
            d = d && (s("yt.player.Application") || a.assets.js);
            var e = !!a.html5;
            d || (a.args.html5_unavailable = "1");
            e && d || c ? (this.zc = this.yc, c || (this.Sb = this.kd)) : (this.zc = this.Qb ?
                this.We : this.kd, d && !b && (this.Sb = this.yc));
            this.Sb && (a.fallback = t(this.Ve, this));
            this.b = {
                addEventListener: t(this.Rb, this),
                destroy: t(this.jd, this)
            };
            a = this.ca = new of ;
            this.k || (this.k = []);
            this.k.push(a);
            this.i = {};
            this.H = ai(this) ? new Ah : m
        }
        w(Xh, mf);
        p = Xh.prototype;
        p.Ic = n;
        p.K = m;
        p.Qb = m;
        p.Tb = m;
        p.zc = m;
        p.Sb = m;

        function bi(a, b, c) {
            a.K = b.ma();
            a.ba = a.K.attrs.id;
            a.T = a.K.args.el;
            a.Qb = c || m;
            a.K.args.eurl || (b = document.location.toString(), -1 != b.indexOf("/embed/") && (b = "unknown", document.referrer && (b = document.referrer.substring(0, 128))), a.K.args.eurl = b);
            a.K.args.enablejsapi = "1";
            a.K.args.playerapiid = a.z;
            var d = a.e,
                e = a.T;
            a.K.fallbackMessage = function() {
                var a = O("PLAYER_FALLBACK_OVERRIDE");
                if (!a) {
                    var a = O("PLAYER_FALLBACK", k, 'The Adobe Flash Player or an HTML5 supported browser is required for video playback. <br> <a href="https://web.archive.org/web/20121218011521/http://get.adobe.com/flashplayer/">Get the latest Flash Player</a> <br> <a href="/html5">Learn more about upgrading to an HTML5 browser</a>'),
                        b = navigator.userAgent.match(/Version\/(\d).*Safari/);
                    b && 5 <= parseInt(b[1], 10) && (a = O("QUICKTIME_FALLBACK", k, 'The Adobe Flash Player or QuickTime is required for video playback. <br> <a href="https://web.archive.org/web/20121218011521/http://get.adobe.com/flashplayer/">Get the latest Flash Player</a> <br> <a href="https://web.archive.org/web/20121218011521/http://www.apple.com/quicktime/download/">Get the latest version of QuickTime</a>'))
                }
                d.innerHTML = '<div class="fallback-message">' + a + "</div>";
                "embedded" == e && x(d.getElementsByTagName("a"), function(a) {
                    a.setAttribute("target", "_blank")
                })
            };
            a.Tb || (a.Tb = a.K.args.jsapicallback ? ci(a.K.args.jsapicallback) : s("onYouTubePlayerReady"));
            a.K.args.jsapicallback = "ytPlayerOnYouTubePlayerReady"
        }
        p.Ve = function(a) {
            a = a || this.K;
            a instanceof We || (a = new We(a));
            delete a.fallback;
            a.html5 ? a.args.autoplay = 1 : Vf("html5_ajax", this.Bg);
            this.Ic = n;
            bi(this, a);
            ec(this.g);
            this.Sb()
        };
        p.write = function() {
            if (!this.N) {
                y(this.e, "player-root");
                var a = this.K.attrs.width;
                a && (this.e.style.width = ie(Number(a) || a, l));
                if (a = this.K.attrs.height) this.e.style.height = ie(Number(a) || a, l);
                Wd(this.e, "overflow", "hidden");
                if (!this.Qb && (ec(this.g), ai(this))) {
                    if (a = this.K.assets.css_actions) {
                        a = $b("div", {
                            "class": "player-actions-loaded"
                        });
                        document.body.appendChild(a);
                        var b = "none" == Yd(a, "display");
                        fc(a);
                        a = !b
                    }
                    a && gg(this.K.assets.css_actions);
                    a = $b("div", "player-container");
                    this.K.params.bgcolor && Wd(a, "background-color",
                        this.K.params.bgcolor);
                    b = $b("div", "player-actions-container", $b("div", "player-actions-share"), $b("div", "player-actions-close", $b("div", "player-actions-close-button")));
                    dc(this.e, a, b);
                    this.g = a;
                    s("yt.tracking.shareVideo") || (u("yt.tracking.shareVideo", Cg), u("yt.tracking.shareList", Dg));
                    s("yt.window.popup") || u("yt.window.popup", ih)
                }
                this.zc()
            }
        };
        p.yc = function() {
            var a = this.K.ma();
            a.attrs.id = this.ba + "-html5";
            var b = s("yt.player.Application");
            b ? new b(this.g, a) : fg(a.assets.js, t(this.yc, this))
        };
        p.kd = function() {
            var a = this.K.ma();
            a.attrs.id = this.ba + "-flash";
            a.attrs.width = a.attrs.width || "100%";
            a.attrs.height = a.attrs.height || "100%";
            hf(this.g, a)
        };
        p.We = function() {
            lf(this.K, this.Qb.force, t(this.Zd, this))
        };
        p.Zd = function() {
            if (!this.Ma) {
                var a = E(this.K.attrs.id);
                try {
                    a.getApiInterface();
                    Yh(this.z);
                    return
                } catch (b) {}
                N(t(this.Zd, this), 50)
            }
        };
        p.Rb = function(a, b) {
            var c = ci(b);
            if (c) {
                if (!this.i[a]) {
                    var d = "ytPlayer" + a + this.z,
                        e = t(function(b) {
                            this.ca.va(a, b)
                        }, this);
                    this.i[a] = d;
                    r[d] = e;
                    this.b.nativeAddEventListener && this.b.nativeAddEventListener(a, d)
                }
                this.ca.Ta(a, c)
            }
        };

        function ci(a) {
            var b = a;
            "string" == typeof a && (b = function() {
                s(a).apply(r, arguments)
            });
            return !b ? m : b
        }
        p.xf = function(a) {
            a = a ? jc : ic;
            for (var b = a(document.activeElement); b && !(1 == b.nodeType && (b.focus(), b == document.activeElement));) b = a(b)
        };
        p.yf = function(a) {
            var b = L("EVENT_ID");
            b && wg(a.url, {
                ei: b,
                feature: a.feature
            })
        };

        function ai(a) {
            return "embedded" == a.T || "profilepage" == a.T
        }
        p.Bg = function() {
            X("/html5", {
                yb: l,
                method: "POST",
                F: {
                    prefer_html5: l,
                    session_token: M("html5_ajax")
                }
            })
        };
        p.jd = function() {
            di(this.e)
        };
        p.W = function() {
            this.b.b && this.b.b();
            delete this.b;
            this.K.fallback = m;
            this.K.fallbackMessage = m;
            delete this.K;
            for (var a in this.i) delete r[this.i[a]];
            ec(this.g);
            Xh.L.W.call(this)
        };
        var ei = s("yt.player.embed") || Wh;
        u("yt.player.embed", ei);
        var fi = s("yt.player.update") || Zh;
        u("yt.player.update", fi);
        var di = s("yt.player.destroy") || $h;
        u("yt.player.destroy", di);
        s("ytPlayerOnYouTubePlayerReady") || u("ytPlayerOnYouTubePlayerReady", Yh);
        Mg(Og);
        Mg(Yg);
        Mg(ah);

        function gi() {};

        function hi() {}
        w(hi, gi);
        hi.prototype.ea = function() {
            var a = 0;
            Ac(this.Xa(l), function() {
                a++
            });
            return a
        };
        hi.prototype.clear = function() {
            var a;
            a = this.Xa(l);
            if (fa(a)) a = Ua(a);
            else {
                a = zc(a);
                var b = [];
                Ac(a, function(a) {
                    b.push(a)
                });
                a = b
            }
            var c = this;
            x(a, function(a) {
                c.remove(a)
            })
        };

        function ii(a) {
            this.b = a
        }
        w(ii, hi);

        function ji(a) {
            try {
                return !!a.b && !!a.b.getItem
            } catch (b) {}
            return n
        }
        p = ii.prototype;
        p.set = function(a, b) {
            try {
                this.b.setItem(a, b)
            } catch (c) {
                g("Storage mechanism: Quota exceeded")
            }
        };
        p.get = function(a) {
            a = this.b.getItem(a);
            !ga(a) && a !== m && g("Storage mechanism: Invalid value was encountered");
            return a
        };
        p.remove = function(a) {
            this.b.removeItem(a)
        };
        p.ea = function() {
            return this.b.length
        };
        p.Xa = function(a) {
            var b = 0,
                c = this.b,
                d = new yc;
            d.b = function() {
                b >= c.length && g(xc);
                var d;
                d = c.key(b++);
                if (a) return d;
                d = c.getItem(d);
                ga(d) || g("Storage mechanism: Invalid value was encountered");
                return d
            };
            return d
        };
        p.clear = function() {
            this.b.clear()
        };

        function ki() {
            var a = m;
            try {
                a = window.localStorage || m
            } catch (b) {}
            this.b = a
        }
        w(ki, ii);

        function li() {
            var a = m;
            try {
                a = window.sessionStorage || m
            } catch (b) {}
            this.b = a
        }
        w(li, ii);

        function mi(a) {
            this.Ha = a;
            this.pe = new Ff
        }
        p = mi.prototype;
        p.Ha = m;
        p.pe = m;
        p.set = function(a, b) {
            da(b) ? this.Ha.set(a, Gf(this.pe, b)) : this.Ha.remove(a)
        };
        p.get = function(a) {
            a = this.Ha.get(a);
            if (a !== m) try {
                return Df(a)
            } catch (b) {
                g("Storage: Invalid value was encountered")
            }
        };
        p.remove = function(a) {
            this.Ha.remove(a)
        };

        function ni(a) {
            mi.call(this, a)
        }
        w(ni, mi);

        function oi(a) {
            this.data = a
        }

        function pi(a) {
            return !da(a) || a instanceof oi ? a : new oi(a)
        }
        ni.prototype.set = function(a, b) {
            ni.L.set.call(this, a, pi(b))
        };
        ni.prototype.b = function(a) {
            a = ni.L.get.call(this, a);
            if (!da(a) || a instanceof Object) return a;
            g("Storage: Invalid value was encountered")
        };
        ni.prototype.get = function(a) {
            (a = this.b(a)) ? (a = a.data, da(a) || g("Storage: Invalid value was encountered")) : a = k;
            return a
        };

        function qi(a) {
            mi.call(this, a)
        }
        w(qi, ni);

        function ri(a) {
            var b = a.creation;
            a = a.expiration;
            return !!a && a < pa() || !!b && b > pa()
        }
        qi.prototype.set = function(a, b, c) {
            if (b = pi(b)) {
                if (c) {
                    if (c < pa()) {
                        qi.prototype.remove.call(this, a);
                        return
                    }
                    b.expiration = c
                }
                b.creation = pa()
            }
            qi.L.set.call(this, a, b)
        };
        qi.prototype.b = function(a, b) {
            var c = qi.L.b.call(this, a);
            if (c)
                if (!b && ri(c)) qi.prototype.remove.call(this, a);
                else return c
        };

        function si(a) {
            mi.call(this, a)
        }
        w(si, qi);

        function ti(a, b, c) {
            var d = c && 0 < c ? c : 0;
            c = d ? pa() + 1E3 * d : 0;
            if (d = d ? ui : vi) {
                ga(b) || (b = JSON.stringify(b, k));
                try {
                    d.set(a, b, c)
                } catch (e) {
                    d.remove(a)
                }
            }
        }

        function wi(a) {
            if (!vi && !ui) return m;
            var b;
            try {
                b = vi.get(a), b = ga(b) ? b : ui.get(a)
            } catch (c) {
                return m
            }
            if (!ga(b)) return m;
            try {
                b = JSON.parse(b, k)
            } catch (d) {}
            return b
        }

        function xi() {
            if (ui) {
                var a = ui,
                    b = [];
                Ac(a.Ha.Xa(l), function(c) {
                    var d;
                    try {
                        d = si.prototype.b.call(a, c, l)
                    } catch (e) {
                        if ("Storage: Invalid value was encountered" == e) return;
                        g(e)
                    }
                    ri(d) && b.push(c)
                });
                x(b, function(b) {
                    si.prototype.remove.call(a, b)
                })
            }
        }
        var ui = new si(new ki);
        ji(ui.Ha) || (ui = m);
        var vi = new si(new li);
        ji(vi.Ha) || (vi = m);
        var yi = s("yt.timing.data_") || {};
        u("yt.timing.data_", yi);

        function zi(a, b) {
            var c = yi.timer || {};
            c[a] = b ? b : pa();
            yi.timer = c
        }

        function Ai(a) {
            a = a || L("TIMING_ACTION");
            var b = yi.timer || {},
                c = yi.info_args || {},
                d = b.start,
                e = "",
                f = [],
                h = [];
            delete b.start;
            yi.srt && (e = "&srt=" + yi.srt);
            b.aft && b.plev && (b.aft = Math.min(b.aft, b.plev));
            for (var j in b) {
                var q = Math.max(Math.round(b[j] - d), 0);
                f.push(j + "." + q)
            }
            for (j in c) h.push(j + "=" + c[j]);
            b.vr && b.gv && f.push("vl." + Math.round(b.vr - b.gv));
            var v;
            !b.aft && b.vr && b.cl ? v = b.cl > b.vr ? b.cl - d : b.vr - d : !b.aft && b.vr ? v = b.vr - d : b.aft || (v = b.ol - d);
            f.push("aft." + Math.max(Math.round(v), 0));
            zg(["https:" == window.location.protocol ?
                "https://web.archive.org/web/20121218011521/https://gg.google.com/csi" : "https://web.archive.org/web/20121218011521/http://csi.gstatic.com/csi", "?v=2&s=youtube&action=", a, e, "&", h.join("&"), "&rt=", f.join(",")
            ].join(""))
        }

        function Bi() {
            var a = L("TIMING_ACTION"),
                b = yi.timer || {};
            a && b.start && (yi.wff && -1 != a.indexOf("ajax") && b.vr && b.cl ? Ai() : yi.wff && -1 == a.indexOf("ajax") && b.vr ? Ai() : !yi.wff && (b.ol || b.aft) && Ai())
        };

        function Ci() {
            this.b = {}
        }
        w(Ci, Ng);
        ba(Ci);
        Ci.prototype.R = "char-counter";
        Ci.prototype.register = function() {
            Z(this, "keydown", this.e, "input");
            Z(this, "paste", this.e, "input");
            Z(this, "cut", this.e, "input")
        };
        Ci.prototype.e = function(a) {
            var b = this.O(a);
            if (b) {
                var c = "true" == this.getData(b, "count-char-by-size"),
                    d = parseInt(this.getData(b, "char-limit"), 10);
                isNaN(d) || 0 >= d || N(t(function() {
                    var e = parseInt(a.getAttribute("maxlength"), 10);
                    if (!isNaN(e)) {
                        var f = Di(a, c);
                        if (c) {
                            if (f > e) {
                                var h = a.value,
                                    j = h.length,
                                    q = 0,
                                    e = f - e,
                                    f = "",
                                    v = 0;
                                do f += h[j - q], v = unescape(encodeURIComponent(f)).length, q++; while (v < e);
                                a.value = a.value.substring(0, j - q)
                            }
                        } else f > e && (a.value = a.value.substring(0, e))
                    }
                    h = parseInt(this.getData(b, "warn-at-chars-remaining"),
                        10);
                    isNaN(h) && (h = 0);
                    j = d - Di(a, c);
                    C(b, Y(this, "maxed-out"), j < h);
                    K(Y(this, "remaining"), b).innerHTML = j
                }, this), 0)
            }
        };

        function Di(a, b) {
            var c = a.value;
            return b ? unescape(encodeURIComponent(c)).length : c.length
        };

        function Ei() {
            this.b = {}
        }
        w(Ei, Ng);
        p = Ei.prototype;
        p.bd = function() {
            return this.Xc && 0 == Lb.indexOf("6") ? n : l
        };
        p.O = function(a) {
            var b = Ng.prototype.O.call(this, a);
            return !b ? a : b
        };
        p.getData = function(a, b) {
            var c = Ei.L.getData.call(this, a, "card-config");
            return c && (c = s(c)) && c[b] ? c[b] : Ei.L.getData.call(this, a, b)
        };
        p.Fb = function(a) {
            var b = this.O(a);
            if (b) {
                y(b, Y(this, "active"));
                var c = Fi(this, a, b);
                if (c) {
                    c.cardTargetNode = a;
                    c.cardRootNode = b;
                    Gi(this, a, c);
                    var d = Y(this, "card-visible"),
                        e = this.getData(a, "card-delegate-show") && this.getData(b, "card-action");
                    this.na(b, "card-action", a);
                    U(c);
                    N(function() {
                        e || T(c);
                        y(c, d)
                    }, 10)
                }
            }
        };

        function Fi(a, b, c) {
            var d = c || b,
                e = Y(a, "card"),
                f = e + id(d);
            c = E(f);
            var h = Hi(a, d);
            if (c) return c;
            c = document.createElement("div");
            c.id = f;
            c.className = e;
            (d = a.getData(d, "card-class")) && y(c, d);
            d = document.createElement("div");
            d.className = Y(a, "card-border");
            b = a.getData(b, "orientation") || "horizontal";
            e = document.createElement("div");
            e.className = "yt-uix-card-border-arrow yt-uix-card-border-arrow-" + b;
            f = document.createElement("div");
            f.className = Y(a, "card-body");
            a = document.createElement("div");
            a.className = "yt-uix-card-body-arrow yt-uix-card-body-arrow-" +
                b;
            fc(h);
            f.appendChild(h);
            d.appendChild(a);
            d.appendChild(f);
            c.appendChild(e);
            c.appendChild(d);
            document.body.appendChild(c);
            return c
        }

        function Gi(a, b, c) {
            var d = a.getData(b, "orientation") || "horizontal",
                e = a.getData(b, "position"),
                f = !!a.getData(b, "force-position"),
                d = "horizontal" == d,
                h = "bottomright" == e || "bottomleft" == e,
                j = "topright" == e || "bottomright" == e,
                q, v;
            j && h ? (v = 7, q = 4) : j && !h ? (v = 6, q = 5) : !j && h ? (v = 5, q = 6) : (v = 4, q = 7);
            var H = de(document.body),
                e = de(b);
            H != e && (v ^= 2);
            var F;
            d ? (e = b.offsetHeight / 2 - 12, F = new eb(-12, b.offsetHeight + 6)) : (e = b.offsetWidth / 2 - 6, F = new eb(b.offsetWidth + 6, -12));
            var I = je(c),
                e = Math.min(e, (d ? I.height : I.width) - 24 - 6);
            6 > e && (e = 6, d ? F.y +=
                12 - b.offsetHeight / 2 : F.x += 12 - b.offsetWidth / 2);
            var R = m;
            f || (R = 10);
            I = Y(a, "card-flip");
            a = Y(a, "card-reverse");
            C(c, I, j);
            C(c, a, h);
            R = Eg(b, v, c, q, F, m, R);
            !f && R && (R & 48 && (j = !j, v ^= 2, q ^= 2), R & 192 && (h = !h, v ^= 1, q ^= 1), C(c, I, j), C(c, a, h), Eg(b, v, c, q, F));
            b = K("yt-uix-card-body-arrow", c);
            f = K("yt-uix-card-border-arrow", c);
            d = d ? h ? "top" : "bottom" : !H && j || H && !j ? "left" : "right";
            b.setAttribute("style", "");
            f.setAttribute("style", "");
            b.style[d] = e + "px";
            f.style[d] = e + "px";
            h = K("yt-uix-card-arrow", c);
            b = K("yt-uix-card-arrow-background", c);
            h &&
                b && (c = "right" == d ? je(c).width - e - 13 : e + 11, e = c / Math.sqrt(2), Wd(h, "left", c + "px"), Wd(h, "margin-left", "1px"), Wd(b, "margin-left", -e + "px"), Wd(b, "margin-top", e + "px"))
        }
        p.ka = function(a) {
            var b = this.O(a);
            if (b && (a = Fi(this, a, b))) z(b, Y(this, "active")), z(a, Y(this, "card-visible")), U(a), a.cardTargetNode = m, a.cardRootNode = m
        };

        function Ii(a, b, c) {
            var d = a.O(b);
            if (d) {
                var e = Hi(a, d);
                e && (e.innerHTML = c, B(d, Y(a, "active")) && (c = Fi(a, b, d), Gi(a, b, c), T(c)))
            }
        }

        function Hi(a, b) {
            var c = b.cardContentNode;
            if (!c) {
                var d = Y(a, "content"),
                    e = Y(a, "card-content");
                (c = K(d, b)) || (c = document.createElement("div"));
                A(c, d, e);
                b.cardContentNode = c
            }
            return c
        }
        p.ae = {
            Rg: 200,
            Og: 200
        };

        function Ji() {
            this.b = {}
        }
        w(Ji, Ei);
        ba(Ji);
        p = Ji.prototype;
        p.R = "clickcard";
        p.register = function() {
            Z(this, "click", this.rh, "target");
            Z(this, "click", this.qh, "close")
        };
        p.rh = function(a) {
            var b = this.getData(a, "card-target");
            a = b ? E(b) : a;
            b = this.O(a);
            B(b, Y(this, "active")) ? (this.ka(a), z(b, Y(this, "active"))) : (this.Fb(a), y(b, Y(this, "active")))
        };
        p.Fb = function(a) {
            Ki(this);
            Ji.L.Fb.call(this, a);
            var b = this.O(a);
            P(b, "click-outside-persists") || (this.e = a, this.g = Q(document, "click", t(this.bg, this)))
        };
        p.ka = function(a) {
            Ji.L.ka.call(this, a);
            this.g && yd(this.g)
        };
        p.bg = function(a) {
            uc(a.target, "yt-uix" + (this.R ? "-" + this.R : "") + "-card") || Ki(this)
        };

        function Ki(a) {
            a.e && (a.ka(a.e), a.e = m)
        }
        p.qh = function(a) {
            (a = uc(a, Y(this, "card"))) && this.ka(a.cardTargetNode)
        };

        function Li() {
            this.b = {}
        }
        w(Li, Ng);
        ba(Li);
        Li.prototype.R = "close";
        Li.prototype.register = function() {
            Z(this, "click", this.e)
        };
        Li.prototype.e = function(a) {
            var b, c = this.getData(a, "close-parent-class"),
                d = this.getData(a, "close-parent-id");
            d ? b = E(d) : c && (b = uc(a, c));
            b && U(b);
            this.na(a, "close-callback", b)
        };

        function Mi(a) {
            var b, c = window.location.href,
                d = n,
                e, f, h, j = n;
            h = E("page");
            var q = B(h, "watch"),
                v = a || m;
            if (!v && !q) return m;
            v && (f = uc(v, "context-data-container"));
            if (f) d = "true" == P(f, "context-open");
            else if (q && (f = E("watch-context-item-list")), !f) return m;
            a = G("context-data-item", f);
            if (!a || !a.length) return m;
            if (q) {
                if (j = l, q = E("watch-context-container"), h = P(q, "context-type"), q = K("context-back-link", q)) c = q.href
            } else h = B(h, "search-base") || E("search-base-div") ? "search" : B(h, "channel") ? "channel" : B(h, "home") ? "home" : B(h,
                "feed") ? "feed" : "default";
            f = P(f, "context-subsource");
            if (q = E("context-source-container")) e = P(q, "context-source"), b = P(q, "context-image");
            var H = [],
                F = 0;
            x(a, function(a, b) {
                var c;
                switch (P(a, "context-item-type")) {
                    case "playlist":
                        var d = {
                            type: "playlist"
                        };
                        hb(Ni, function(b, c) {
                            d[b] = P(a, c)
                        });
                        c = d;
                        break;
                    case "video":
                        var e = {
                            type: "video"
                        };
                        hb(Oi, function(b, c) {
                            e[b] = P(a, c)
                        });
                        c = e
                }
                c && (H.push(c), v && kc(a, v) && (F = b))
            });
            a = {};
            a.clickindex = F;
            a.items = H;
            a.image = b;
            a.link = c;
            a.open = d;
            a.source = e;
            a.subsource = f;
            a.type = h;
            a.propagated = j;
            return a
        }
        var Ni = {
                "context-item-actionuser": "actionuser",
                "context-item-actionverb": "actionverb",
                "context-item-count": "count",
                "context-item-count-label": "countlabel",
                "context-item-id": "id",
                "context-item-title": "title",
                "context-item-user": "user",
                "context-item-videos": "videos"
            },
            Oi = {
                "context-item-actionuser": "actionuser",
                "context-item-actionverb": "actionverb",
                "context-item-id": "id",
                "context-item-time": "time",
                "context-item-title": "title",
                "context-item-user": "user",
                "context-item-views": "views"
            };

        function Pi() {
            this.b = {}
        }
        w(Pi, Ng);
        ba(Pi);
        Pi.prototype.R = "contextlink";
        Pi.prototype.register = function() {
            Z(this, "click", this.e)
        };
        Pi.prototype.e = function(a) {
            var b = a.href;
            if (b) {
                var c = Be(b);
                if (c == window.location.host || !c && 0 == b.lastIndexOf("/", 0))
                    if (c = De(b), c = Ee(c)) {
                        c = Le(b, "v");
                        if (!c) {
                            var d = (Le(b, "video_ids") || "").split(",");
                            d && 1 < d.length && (b = parseInt(Le(b, "index"), 10), c = 0 < b ? d[b] : d[0]);
                            if (!c) return
                        }(a = Mi(a)) && ti("context-" + c, a, 600)
                    }
            }
        };

        function Qi() {
            this.b = {}
        }
        w(Qi, Ei);
        ba(Qi);
        p = Qi.prototype;
        p.R = "hovercard";
        p.register = function() {
            Z(this, "mouseenter", this.gh, "target");
            Z(this, "mouseleave", this.ih, "target");
            Z(this, "mouseenter", this.hh, "card");
            Z(this, "mouseleave", this.jh, "card")
        };
        p.gh = function(a) {
            if (Ri != a) {
                Ri && (this.ka(Ri), Ri = m);
                var b = t(this.Fb, this, a),
                    c = parseInt(this.getData(a, "delay-show"), 10),
                    b = N(b, -1 < c ? c : this.ae.Rg);
                this.setData(a, "card-timer", b.toString());
                Ri = a;
                a.alt && (this.setData(a, "card-alt", a.alt), a.alt = "");
                a.title && (this.setData(a, "card-title", a.title), a.title = "")
            }
        };
        p.ih = function(a) {
            var b = parseInt(this.getData(a, "card-timer"), 10);
            Yc(b);
            this.O(a).isCardHidable = l;
            b = parseInt(this.getData(a, "delay-hide"), 10);
            b = -1 < b ? b : this.ae.Og;
            N(t(this.Pg, this, a), b);
            if (b = this.getData(a, "card-alt")) a.alt = b;
            if (b = this.getData(a, "card-title")) a.title = b
        };
        p.Pg = function(a) {
            this.O(a).isCardHidable && (this.ka(a), Ri = m)
        };
        p.hh = function(a) {
            a && (a.cardRootNode.isCardHidable = n)
        };
        p.jh = function(a) {
            a && this.ka(a.cardTargetNode)
        };
        var Ri = m;

        function Si() {
            this.b = {}
        }
        w(Si, Ng);
        ba(Si);
        p = Si.prototype;
        p.R = "overlay";
        p.register = function() {
            Z(this, "click", this.Sc, "target");
            Z(this, "click", this.gc, "close")
        };
        p.Sc = function(a) {
            if (a = this.O(a)) {
                var b = Y(this, "fg"),
                    c = E(b);
                if (!c) {
                    var d = K(Y(this, "content"), a);
                    if (d) {
                        c = document.createElement("div");
                        c.id = b;
                        c.className = b;
                        b = this.getData(a, "overlay-hidden") || "";
                        dd(c, "overlay-hidden", b);
                        var b = this.getData(a, "overlay-class") || "",
                            e = this.getData(a, "overlay-style") || "default",
                            f = this.getData(a, "overlay-shape") || "default";
                        y(c, b, Y(this, e), Y(this, f));
                        f = document.createElement("div");
                        f.className = Y(this, "fg-content");
                        b = document.createElement("div");
                        e = Y(this, "base");
                        b.id = e;
                        y(b,
                            e);
                        var h = Y(this, "bg"),
                            e = document.createElement("div");
                        e.id = h;
                        e.className = h;
                        e.style.height = Yb() + "px";
                        h = document.createElement("span");
                        y(h, Y(this, "align"));
                        b.appendChild(h);
                        f.innerHTML = d.innerHTML;
                        d = J("iframe", m, f);
                        x(d, function(a) {
                            var b = this.getData(a, "onload");
                            b && ((b = s(b)) && Q(a, "load", b), a.src = this.getData(a, "src") || a.src)
                        }, this);
                        c.appendChild(f);
                        var j = Ua(d);
                        x(document.getElementsByTagName("iframe"), function(a) {
                            -1 == Ia(j, a) && y(a, "iframe-hid")
                        });
                        d = document.getElementsByTagName("embed");
                        f = document.getElementsByTagName("object");
                        h = t(function(a) {
                            var b = a.style.visibility || "visible";
                            "hidden" != b && (this.setData(a, "overlay-hidden", "true"), this.setData(a, "overlay-visibility-value", b), a.style.visibility = "hidden")
                        }, this);
                        x(d, h);
                        x(f, h);
                        b.appendChild(c);
                        document.body.appendChild(e);
                        document.body.appendChild(b);
                        this.getData(a, "disable-shortcuts") || (c = t(function(a) {
                            B(a.target, Y(this, "base")) && this.gc()
                        }, this), Q(b, "click", c), Q(document, "keydown", t(this.ce, this)));
                        this.na(a, "overlay-shown")
                    }
                }
            }
        };
        p.gc = function() {
            var a = Y(this, "bg"),
                b = E(Y(this, "fg"));
            if (b) {
                if (B(b, Y(this, "unclosable"))) return;
                U(b);
                document.body.removeChild(b.parentNode)
            }(a = E(a)) && document.body.removeChild(a);
            a = J("iframe", "iframe-hid", k);
            x(a, function(a) {
                z(a, "iframe-hid")
            });
            var a = document.getElementsByTagName("embed"),
                c = document.getElementsByTagName("object"),
                d = t(function(a) {
                    this.getData(a, "overlay-hidden") && (a.style.visibility = this.getData(a, "overlay-visibility-value"), fd(a, "overlay-hidden"))
                }, this);
            x(a, d);
            x(c, d);
            Ad(document,
                "keydown", t(this.ce, this));
            b && this.na(b, "overlay-hidden")
        };
        p.ce = function(a) {
            27 == a.keyCode && this.gc()
        };

        function Ti() {
            var a = Si.getInstance(),
                b = E(Y(a, "fg"));
            return !b ? m : K(Y(a, "fg-content"), b)
        };

        function Ui() {
            this.b = {}
        }
        w(Ui, Ng);
        ba(Ui);
        Ui.prototype.R = "redirect-link";
        Ui.prototype.register = function() {
            Z(this, "click", this.e)
        };
        Ui.prototype.e = function(a) {
            if (!P(a, "redirect-href-updated")) {
                dd(a, "redirect-href-updated", "true");
                var b = L("XSRF_REDIRECT_TOKEN"),
                    c = L("XSRF_FIELD_NAME");
                if (b && c) {
                    var d = {};
                    d.q = a.href;
                    d[c] = b;
                    a.href = Qe("/redirect", d)
                }
            }
        };

        function Vi() {
            this.b = {}
        }
        w(Vi, Ng);
        ba(Vi);
        p = Vi.prototype;
        p.R = "scroller";
        p.register = function() {
            Z(this, "mouseenter", this.wh);
            Z(this, "mouseleave", this.xh)
        };
        p.wh = function(a) {
            var b = Q(a, "mousewheel", t(this.sh, this, a));
            this.setData(a, "scroller-mousewheel-listener", b);
            b = Q(a, "scroll", t(this.th, this, a));
            this.setData(a, "scroller-scroll-listener", b)
        };
        p.xh = function(a) {
            yd(this.getData(a, "scroller-mousewheel-listener") || "");
            this.setData(a, "scroller-mousewheel-listener", "");
            yd(this.getData(a, "scroller-scroll-listener") || "");
            this.setData(a, "scroller-scroll-listener", "")
        };
        p.sh = function(a, b) {
            b.preventDefault();
            b.wheelDeltaY && (a.scrollTop = a.scrollTop + b.wheelDeltaY)
        };
        p.th = function(a) {
            this.na(a, "scroll-action")
        };

        function Wi(a) {
            if (!a.length) return 0;
            var b = a[0],
                c = b.offsetHeight;
            1 < a.length && (c = a[1].offsetTop - b.offsetTop);
            return c
        }
        p.Ed = function(a, b) {
            if (a && b) {
                var c = G(Y(this, "scroll-unit"), a),
                    c = Ia(c, b);
                0 <= c && this.Wa(a, c)
            }
        };
        p.Wa = function(a, b) {
            if (a && !(isNaN(b) || 0 > b)) {
                var c = G(Y(this, "scroll-unit"), a);
                if (!(0 >= c.length)) {
                    b >= c.length && (b = c.length - 1);
                    var d = Wi(c),
                        e = a.offsetHeight,
                        f = Math.max(Math.floor(a.scrollTop / d), 0);
                    b > f - 1 && (d = Math.floor(e / d), e = c.length, b + d > e && (b = e - d + 1));
                    0 > b && (b = 0);
                    Xi(this, a, c[b].offsetTop)
                }
            }
        };

        function Xi(a, b, c) {
            b && !isNaN(c) && (0 > c && (c = 0), b.scrollTop = c, a.setData(b, "scroller-offset", c + ""))
        }
        p.Fd = function(a) {
            var b = this.getData(a, "scroller-offset"),
                b = parseInt(b, 10) || 0;
            Xi(this, a, b)
        };

        function Yi() {
            this.b = {}
        }
        w(Yi, Ng);
        ba(Yi);
        Yi.prototype.R = "sessionlink";
        Yi.prototype.register = function() {
            Z(this, "click", this.e)
        };
        Yi.prototype.e = function(a) {
            Zi(a)
        };

        function Zi(a) {
            var b = P(a, "sessionlink-target") || a.href;
            b && (a = P(a, "sessionlink") || "", a = Me(a), wg(b, a))
        };

        function $i() {
            this.b = {}
        }
        w($i, Ng);
        ba($i);
        p = $i.prototype;
        p.R = "slider";
        p.register = function() {
            Z(this, "click", this.eh, "num");
            Z(this, "click", this.fh, "prev");
            Z(this, "click", this.dh, "next");
            Z(this, "mouseover", this.kh, "ajax-trigger")
        };
        p.eh = function(a) {
            if (a) {
                var b = this.O(a);
                a = parseInt(this.getData(a, "slider-num"), 10);
                if (isNaN(a) || 0 > a) a = 0;
                this.lc(b, a)
            }
        };
        p.dh = function(a, b, c) {
            if (a) {
                a = this.O(a);
                if (B(a, Y(this, "fluid"))) {
                    if (a) {
                        var d = this.getBodyElement(a);
                        b = aj(this, d);
                        var e = bj(this, b),
                            f = 0 < e.length;
                        b = parseInt(this.getData(a, "slider-offset"), 10);
                        if (isNaN(b) || 0 < b) b = 0;
                        var h = cj(this, a);
                        f ? (d = dj(this, a, e), h = Math.floor(h / d), b = Math.abs(Math.floor(b / d)) - 1, this.Wa(a, (0 <= b ? b : 0) + h)) : (e = ej(this, a) ? d.scrollHeight : d.scrollWidth, this.Xc && 8 > document.documentMode ? Math.abs(b - h) < e && (b -= h) : d.offsetWidth < e && (b -= h), fj(this, a, b))
                    }
                } else if (a) {
                    b = parseInt(this.getData(a, "slider-current"),
                        10);
                    if (isNaN(b) || 0 > b) b = 0;
                    d = parseInt(this.getData(a, "slider-slides"), 10);
                    if (isNaN(d) || 0 > d) d = 0;
                    b = Math.min(b + 1, d - 1);
                    this.lc(a, b)
                }
                c.preventDefault()
            }
        };
        p.fh = function(a, b, c) {
            if (a) {
                a = this.O(a);
                if (B(a, Y(this, "fluid"))) {
                    if (a) {
                        b = this.getBodyElement(a);
                        b = aj(this, b);
                        var d = bj(this, b),
                            e = 0 < d.length;
                        b = parseInt(this.getData(a, "slider-offset"), 10);
                        if (isNaN(b) || 0 < b) b = 0;
                        var f = cj(this, a);
                        e ? (d = dj(this, a, d), f = Math.floor(f / d), b = Math.abs(Math.floor(b / d)) - 1, this.Wa(a, (0 <= b ? b : 0) - f)) : (b += f, 0 < b && (b = 0), fj(this, a, b))
                    }
                } else if (a) {
                    b = parseInt(this.getData(a, "slider-current"), 10);
                    if (isNaN(b) || 0 > b) b = 0;
                    b = Math.max(b - 1, 0);
                    this.lc(a, b)
                }
                c.preventDefault()
            }
        };
        p.kh = function(a) {
            if (a = this.O(a)) {
                var b = Y(this, "ajax-trigger"),
                    c = G(b, a);
                x(c, function(a) {
                    z(a, b)
                });
                gj(this, a)
            }
        };

        function gj(a, b, c) {
            var d = a.getData(b, "slider-ajax-url");
            d && !a.getData(b, "slider-loaded") && (a.setData(b, "slider-loaded", "true"), X(d, {
                D: a,
                o: function(a, d) {
                    var h = cc(d.slides_html),
                        j = K(Y(this, "slides"), b);
                    j && h && dc(j, h);
                    c && c()
                }
            }))
        }

        function ej(a, b) {
            return B(b, Y(a, "vertical"))
        }

        function cj(a, b) {
            var c = a.getBodyElement(b);
            return ej(a, b) ? c.offsetHeight : c.offsetWidth
        }
        p.lc = function(a, b) {
            if (a)
                if (this.getData(a, "slider-ajax-url") && !this.getData(a, "slider-loaded")) gj(this, a, t(this.lc, this, a, b));
                else {
                    var c = J(m, Y(this, "num"), a),
                        d = Y(this, "num-current"),
                        e;
                    x(c, function(a) {
                        e = this.getData(a, "slider-num") == b;
                        C(a, d, e);
                        B(a, "yt-uix-button") && C(a, "yt-uix-button-toggled", e)
                    }, this);
                    var c = K(Y(this, "slides"), a),
                        f = ej(this, a);
                    if (c) {
                        var h = aj(this, c);
                        if (h) {
                            var j = -1 * b * (f ? h.offsetHeight : h.offsetWidth) + "px";
                            f ? c.style.top = j : de(h) ? c.style.right = j : c.style.left = j
                        }
                    }
                    if (c = K("yt-uix-pager-current-page",
                            a)) c.innerHTML = b + 1;
                    this.setData(a, "slider-current", b + "");
                    a && (c = parseInt(this.getData(a, "slider-current"), 10), f = parseInt(this.getData(a, "slider-slides"), 10), h = G(Y(this, "next"), a), j = G(Y(this, "prev"), a), x(h, function(a) {
                        a.disabled = n
                    }), x(j, function(a) {
                        a.disabled = n
                    }), 0 == c && x(j, function(a) {
                        a.disabled = l
                    }), c == f - 1 && x(h, function(a) {
                        a.disabled = l
                    }))
                }
        };
        p.Ed = function(a, b) {
            if (a) {
                var c = this.getBodyElement(a),
                    c = aj(this, c),
                    c = bj(this, c),
                    c = Ia(c, b);
                0 <= c && this.Wa(a, c)
            }
        };
        p.Wa = function(a, b) {
            if (a) {
                var c = this.getBodyElement(a),
                    c = aj(this, c),
                    d = bj(this, c);
                if (!(0 >= d.length)) {
                    b >= d.length && (b = d.length - 1);
                    var e = parseInt(this.getData(a, "slider-offset"), 10);
                    if (isNaN(e) || 0 < e) e = 0;
                    var c = cj(this, a),
                        f = dj(this, a, d),
                        e = Math.abs(Math.floor(e / f)) - 1;
                    if (b > (0 <= e ? e : 0)) {
                        var e = Math.floor(c / f),
                            h = d.length;
                        b + e > h && (b = h - e + 1)
                    }
                    0 > b && (b = 0);
                    d = d[b];
                    e = de(a) ? d.offsetLeft - c + f + 10 : -1 * (d.offsetLeft - 10);
                    fj(this, a, e)
                }
            }
        };

        function fj(a, b, c) {
            if (b) {
                isNaN(c) && (c = 0);
                var d = a.getBodyElement(b),
                    d = aj(a, d),
                    e = J(m, Y(a, "title"), d),
                    f = de(b) ? "right" : "left";
                d.style[f] = c + "px";
                x(e, function(a) {
                    a.style[f] = -1 * c + "px"
                });
                a.setData(b, "slider-offset", c + "")
            }
        }
        p.Fd = function(a) {
            var b = this.getData(a, "slider-offset"),
                b = parseInt(b, 10) || 0;
            fj(this, a, b)
        };
        p.getBodyElement = function(a) {
            return K(Y(this, "body"), a)
        };

        function aj(a, b) {
            return K(Y(a, "slide"), b)
        }

        function bj(a, b) {
            return J(m, Y(a, "slide-unit"), b)
        }

        function dj(a, b, c) {
            if (0 == c.length) return 0;
            a = ej(a, b);
            b = c[0];
            var d = a ? b.offsetHeight : b.offsetWidth;
            1 < c.length && (c = c[1], d = a ? c.offsetTop - b.offsetHeight : de(b) ? b.offsetLeft - c.offsetLeft : c.offsetLeft - b.offsetLeft);
            return d
        };

        function hj() {
            this.b = {};
            this.e = []
        }
        w(hj, Ng);
        ba(hj);
        hj.prototype.R = "subscription-button";
        hj.prototype.register = function() {
            Z(this, "click", this.pg);
            this.e.push(V("subscription_subscribe_loading", this.Td, this), V("subscription_subscribe_loaded", this.Sd, this), V("subscription_unsubscirbe_loading", this.Td, this), V("subscription_unsubscribe_loaded", this.Sd, this), V("subscription_subscribe_success", this.ng, this), V("subscription_unsubscribe_success", this.og, this))
        };
        var ij = {
                oh: "yt-uix-button-subscription-container",
                ph: "yt-subscription-button-disabled-mask-container",
                Tg: "yt-uix-button-subscribe",
                Ug: "yt-uix-button-subscribed",
                ie: "hover-enabled"
            },
            jj = {
                je: "is-subscribed",
                ke: "subscription-id",
                Rh: "channel-external-id",
                xk: "style-type"
            };
        p = hj.prototype;
        p.pg = function(a) {
            if (!a.getAttribute("href")) {
                var b = this.getData(a, "channel-external-id");
                this.getData(a, "is-subscribed") ? (a = this.getData(a, "subscription-id"), W("subscription_unsubscribe", b, a)) : W("subscription_subscribe", b)
            }
        };
        p.Td = function(a) {
            this.qc(a, this.qe, l)
        };
        p.Sd = function(a) {
            this.qc(a, this.qe, n)
        };
        p.ng = function(a, b) {
            this.qc(a, this.re, l, b)
        };
        p.og = function(a) {
            this.qc(a, this.re, n)
        };
        p.re = function(a, b, c) {
            b ? (this.setData(a, jj.je, "true"), c && this.setData(a, jj.ke, c)) : (fd(a, jj.je), fd(a, jj.ke));
            c = this.getData(a, "style-type");
            b = !!this.getData(a, "is-subscribed");
            c = "-" + c;
            var d = ij.Ug + c;
            C(a, ij.Tg + c, !b);
            C(a, d, b);
            b ? N(function() {
                y(a, ij.ie)
            }, 1E3) : z(a, ij.ie)
        };
        p.qe = function(a, b) {
            var c = uc(a, ij.oh);
            C(c, ij.ph, b);
            a.disabled = b
        };
        p.Fh = function(a, b, c) {
            var d = Xa(arguments, 2);
            x(a, function(a) {
                b.apply(this, Ta(a, d))
            }, this)
        };
        p.qc = function(a, b, c) {
            var d, e = a;
            d = G(Y(this));
            d = Ja(d, function(a) {
                return e == this.getData(a, "channel-external-id")
            }, this);
            d = Ta([d], Xa(arguments, 1));
            this.Fh.apply(this, d)
        };

        function kj() {
            this.b = {}
        }
        w(kj, Ng);
        ba(kj);
        kj.prototype.R = "tile";
        kj.prototype.register = function() {
            Z(this, "click", this.e)
        };
        kj.prototype.e = function(a, b, c) {
            if (!sc(c.target, "a") && !sc(c.target, "button") && (a = K(Y(this, "link"), a))) D && !Nb(9) ? a.click() : (B(a, "yt-uix-sessionlink") && Zi(a), gh(a.href))
        };

        function lj(a, b) {
            this.lb = a;
            this.e = n;
            this.ca = new of ;
            S(this.lb, "click", t(this.k, this), "yt-dialog-dismiss");
            mj(this, "content");
            this.g = b
        }
        var nj = {
            LOADING: "loading",
            Th: "content",
            Ck: "working"
        };

        function mj(a, b) {
            var c = K("yt-dialog-fg-content", a.lb),
                d = [];
            hb(nj, function(a) {
                d.push("yt-dialog-show-" + a)
            });
            A(c, d, "yt-dialog-show-" + b)
        }

        function oj(a) {
            if (!a.e) {
                var b = Og.getInstance(),
                    c = G(Y(b, "menu"), a.lb);
                x(c, function(a) {
                    a = Wg(b, a);
                    dd(a, "button-menu-root-container", "yt-dialog-base")
                });
                a.e = l
            }
            document.activeElement && document.activeElement != document.body && document.activeElement.blur();
            a.b || (a.b = E("yt-dialog-bg"), a.b || (a.b = document.createElement("div"), a.b.id = "yt-dialog-bg", a.b.className = "yt-dialog-bg", document.body.appendChild(a.b)));
            a.b.style.height = Yb() + "px";
            T(a.b);
            var c = document.getElementsByTagName("embed"),
                d = document.getElementsByTagName("object"),
                e = t(function(a) {
                    var b = a.style.visibility;
                    !nd(a, this.lb) && "hidden" != b && (dd(a, "dialog-hidden", "true"), b && dd(a, "dialog-visibility-value", b), a.style.visibility = "hidden")
                }, a);
            x(c, e);
            x(d, e);
            a.g || Q(document, "keydown", t(a.i, a));
            T(a.lb)
        }
        lj.prototype.k = function(a) {
            a = a.currentTarget;
            a.disabled || (a = P(a, "action") || "", pj(this, a))
        };

        function pj(a, b) {
            a.ca.va("pre-all");
            a.ca.va("pre-" + b);
            U(a.lb);
            U(a.b);
            var c = document.getElementsByTagName("embed"),
                d = document.getElementsByTagName("object"),
                e = t(function(a) {
                    if (P(a, "dialog-hidden")) {
                        fd(a, "dialog-hidden");
                        var b = P(a, "dialog-visibility-value");
                        a.style.visibility = b ? b : ""
                    }
                }, a);
            x(c, e);
            x(d, e);
            a.g || Ad(document, "keydown", t(a.i, a));
            a.ca.va("post-all");
            a.ca.va("post-" + b)
        }
        lj.prototype.i = function(a) {
            27 == a.keyCode && pj(this, "cancel")
        };
        u("yt.ui.Dialog", lj);

        function qj(a) {
            if (!a.metaKey && !a.ctrlKey) {
                var b = a.target;
                if (!("INPUT" == b.tagName || "TEXTAREA" == b.tagName || "SELECT" == b.tagName)) switch (a.keyCode) {
                    case 78:
                        a.shiftKey && W("player-shortcut-next");
                        break;
                    case 80:
                        a.shiftKey && W("player-shortcut-prev");
                        break;
                    case 106:
                        W("player-shortcut-rewind");
                        break;
                    case 108:
                        W("player-shortcut-fast-forward");
                        break;
                    case 107:
                        W("player-shortcut-play-pause")
                }
            }
        };
        var rj = {},
            sj = 0,
            tj = 0,
            uj = 0,
            vj = n,
            wj = [];

        function xj() {
            return rj.se.y + rj.te.height + tj
        }

        function yj(a, b) {
            vj = l;
            rj.se = b;
            rj.te = a;
            sj = xj();
            zj();
            L("MEASURE_THUMBNAIL_DELAY_LOAD") && zi("tdl")
        }

        function Aj(a) {
            rj.te = a;
            Bj()
        }

        function Cj(a) {
            rj.se = a;
            Bj()
        }

        function Bj() {
            var a = xj(),
                b = uj,
                c = Math.abs(b - a);
            if (!b || 400 <= c) {
                c = Dj(a);
                for (b = Dj(b); b < c;) $f("thumb-group-" + c), c--;
                uj = a
            }
        }

        function Ej(a) {
            Fj(function(a, c) {
                var d = P(a, "group-key");
                d && (Zf(a, d), fd(a, "group-key"));
                a.src = c
            }, a)
        }

        function zj(a, b) {
            vj && Fj(function(a, c) {
                var f = P(a, "group-key");
                P(a, "thumb-manual") || f && !b || (f && Zf(a, f), f = "thumb-group-" + Dj(ue(a).y), Yf(a, c, f), dd(a, "group-key", f))
            }, a);
            for (var c = Dj(xj()); 0 <= c; c--) $f("thumb-group-" + c)
        }

        function Fj(a, b) {
            var c = J("img", m, b);
            x(c, function(b) {
                var c = P(b, "thumb");
                c && a.call(r, b, c)
            })
        }

        function Dj(a) {
            return Math.ceil(Math.max(0, a - sj) / 400)
        };

        function Gj(a, b) {
            this.b = new lj(a, l);
            this.i = b;
            this.k = this.e = this.X = ""
        }
        var Hj = m;

        function Ij(a, b, c, d) {
            var e = E("feed-privacy-lb");
            e && (Hj = new Gj(e, a), Hj.X = b || "", Hj.k = c || "", Hj.e = d || "", a = Hj, gg(L("FEED_PRIVACY_CSS_URL")), Jj(a, m, {
                channel_id: a.e,
                setting_type: a.i,
                time_created: a.k,
                video_id: a.X
            }))
        }

        function Kj(a) {
            Ij("SUBSCRIPTIONS", k, k, a)
        }

        function Lj(a, b) {
            Ij("COMMENTS", a, b)
        }

        function Mj(a) {
            Ij("LIKES", a)
        }

        function Nj(a) {
            Ij("FAVORITES", a)
        }

        function Jj(a, b, c) {
            b = b || {};
            c = c || {};
            c.session_token = M("feed_privacy_ajax");
            a = {
                method: "POST",
                format: "XML",
                A: b,
                F: c,
                o: t(a.z, a),
                onError: t(a.H, a)
            };
            X("/feed_privacy_ajax", a)
        }
        Gj.prototype.z = function(a) {
            var b = Of(a);
            a = Sf(b, "invalid_request");
            var c = Sf(b, "missing_setting_type"),
                d = Sf(b, "already_seen_dialog");
            if (!a && !c && !d)
                if (a = E("feed-privacy-dialog"), c = L("PLAYER_REFERENCE"), d = Sf(b, "success_message")) {
                    var e = E("alerts"),
                        b = Sf(b, "alert_template"),
                        f = document.createElement("div");
                    f.innerHTML = b;
                    b = gc(f);
                    if (e) {
                        b.removeAttribute("id");
                        z(b, "yt-alert-warn");
                        y(b, "yt-alert-success");
                        var f = K("yt-alert-message", b),
                            h = K("yt-alert-content", b);
                        (f || h).innerHTML = d;
                        e.appendChild(b);
                        T(b)
                    }
                    for (var j in ud) ud[j][0] ==
                        a && yd(j);
                    window.scroll(0, 0);
                    pj(this.b, "cancel");
                    c && c.playVideo && c.playVideo()
                } else c && c.pauseVideo && c.pauseVideo(), a.innerHTML = Sf(b, "html_content"), S(a, "click", t(this.g, this, n), "make-activity-public-button"), S(a, "click", t(this.g, this, l), "make-activity-private-button"), Ej(a), mj(this.b, "content"), oj(this.b)
        };
        Gj.prototype.H = function() {
            pj(this.b, "cancel")
        };
        Gj.prototype.g = function(a) {
            var b = {};
            b[a ? "action_make_private" : "action_make_public"] = "1";
            a = {
                setting_type: this.i
            };
            mj(this.b, "working");
            Jj(this, b, a)
        };

        function Oj(a) {
            this.Jc = n;
            this.xb = m;
            a ? (this.e(), this.b()) : (a = E("body-container"), S(a, "mousedown", t(this.e, this), "create-channel-lightbox"), S(a, "click", t(this.b, this), "create-channel-lightbox"))
        }
        Oj.prototype.e = function() {
            this.Jc || (gg(L("CREATE_CHANNEL_CSS_URL")), fg(L("CREATE_CHANNEL_JS_URL"), t(function() {
                this.Jc = l;
                this.xb && Pj(this, this.xb)
            }, this)))
        };
        Oj.prototype.g = function() {
            var a = L("CREATE_CHANNEL_NEXT_URL");
            a && ("/" == a ? gh(a) : window.history.back())
        };
        Oj.prototype.b = function(a) {
            var b = "default";
            if (a && (a = P(a.currentTarget, "upsell"), "settings" == a || "upload" == a || "playlist" == a || "guide" == a || "comment" == a)) b = a;
            Pj(this, b)
        };

        function Pj(a, b) {
            if (a.Jc) {
                var c;
                switch (b) {
                    case "settings":
                        c = "/profile";
                        break;
                    case "guide":
                        c = L("CREATE_CHANNEL_NEXT_URL_GUIDE");
                        break;
                    case "upload":
                        c = L("CREATE_CHANNEL_NEXT_URL_UPLOAD");
                        break;
                    default:
                        c = document.location.href
                }
                s(L("HAS_GPLUS") ? "yt.www.account.CreateChannelLightboxForm.init" : "yt.www.account.CreateGplusDialog.init")(a.g, b, c)
            } else a.xb = b
        };
        var Qj, Rj, Sj, Tj, Uj = n;

        function Vj(a) {
            a ? document.body.style.cursor = "wait" : "wait" == document.body.style.cursor && (document.body.style.cursor = "default")
        }

        function Wj() {
            if (!E("link-gplus-css")) {
                eg(L("LINK_GPLUS_JS_URL"), Xj);
                var a = L("LINK_GPLUS_CSS_URL"),
                    b = J("head", k, k)[0],
                    a = $b("link", {
                        id: "link-gplus-css",
                        rel: "stylesheet",
                        href: a
                    });
                b.insertBefore(a, b.childNodes[0] || m)
            }
        }

        function Xj() {
            Uj = l;
            Rj && Uj && Yj()
        }

        function Zj(a) {
            if (!Qj) {
                var b = E("link-gplus-lb");
                if (!b) return;
                Qj = new lj(b, l)
            }
            a ? (b = uc(a.target, "link-gplus-lightbox"), Sj = B(b, "ignore-opt-out"), Tj = P(b, "upsell"), a.preventDefault()) : (Sj = n, Tj = "signin", (a = L("SIGNIN_TYPE")) && (Tj = a));
            Rj = l;
            Vj(l);
            Uj && Yj()
        }

        function Yj() {
            var a = "";
            "upload" == Tj ? a = "/my_videos_upload" : "active_signin" == Tj && (a = L("LINK_GPLUS_NEXT_URL"));
            s("yt.www.account.LinkGplusDialog.fetchAndShow")(Tj, a, Sj)
        };

        function $j(a, b) {
            this.b = a;
            this.e = b;
            Q(E("premium-yva"), "click", t(this.xd, this))
        }
        p = $j.prototype;
        p.Lh = function() {
            U("ad_creative_1");
            W("ads-masthead-hide");
            zj(E("page"), l);
            this.e || U("ad_creative_collapse_btn_1");
            T("ad_creative_expand_btn_1");
            ak(this);
            Ag("homepage_collapse_masthead_ad", k, k)
        };
        p.xd = function() {
            T("ad_creative_expand_btn_1");
            fc(E("premium-yva"));
            Wd(document.getElementById("feed"), {
                "margin-top": 0
            });
            ak(this)
        };
        p.Jh = function() {
            A(document.getElementById("premium-yva"), "premium-yva-unexpanded", "premium-yva-expanded")
        };
        p.Kh = function() {
            A(document.getElementById("premium-yva"), "premium-yva-expanded", "premium-yva-unexpanded")
        };

        function ak(a) {
            Ld.getInstance().set("HIDDEN_MASTHEAD_ID", a.b);
            Sd()
        }
        p.Gh = function() {
            U("premium-yva");
            z(E("premium-yva"), "premium-yva-unexpanded")
        };
        p.Mh = function() {
            Ld.getInstance().set("HIDDEN_MASTHEAD_ID", n);
            Sd();
            Ag("homepage_expand_masthead_ad", k, k);
            gh(document.location.href)
        };
        var bk;

        function ck() {
            var a = Ti();
            U(K("flag-comment-step1", a));
            T(K("flag-comment-step2", a));
            U(K("flag-comment-step3", a))
        }

        function dk() {
            var a = Ti(),
                b = K("flag-comment-form", a),
                c = K("flag-comment-block-user-input", a),
                d = K("submit-flag-comment", a),
                e = K("flag-comment-error-msg", a);
            U(e);
            c.disabled = l;
            d.disabled = l;
            X("/comment_servlet", {
                format: "XML",
                method: "POST",
                A: {
                    flag_comment: 1
                },
                F: Me(Dc(b)),
                o: function(b, c) {
                    c && c.html_content ? (U(K("flag-comment-step1", a)), U(K("flag-comment-step2", a)), T(K("flag-comment-step3", a)), K("flag-comment-captcha-placeholder", a).innerHTML = c.html_content) : Si.getInstance().gc()
                },
                onError: function(a, b) {
                    var j =
                        b && b.error_message;
                    if (j) {
                        var q = K("yt-alert-message", e);
                        lc(q, j)
                    }
                    T(e);
                    c.disabled = n;
                    d.disabled = n
                }
            })
        }

        function ek(a) {
            var b = Ti(),
                c = K("abuse-type-placeholder", b);
            a = sc(a.currentTarget, "LABEL");
            lc(c, pc(a));
            K("continue-flag-comment", b).disabled = n
        };

        function fk(a, b, c) {
            this.k = !!c;
            this.C = a;
            this.Aa = od("button", m, a);
            this.Y = od("textarea", m, a);
            this.Ra = m;
            this.b = K("comments-remaining-count", this.C);
            "CHARACTERS_REMAINING" in Qc && (this.b = K("comments-remaining", this.C));
            this.i = parseInt(P(this.b, "max-count"), 10);
            this.eb = K("comments-post-message", this.C);
            this.dd = K("yt-alert-content", this.eb);
            this.Pb = K("comments-threshold-countdown", this.C);
            this.uc = K("comments-threshold-count", this.Pb);
            "SECONDS_REMAINING" in Qc && (this.uc = this.Pb);
            this.g = [];
            this.tc = [];
            this.e =
                m;
            gk(this);
            hk(this, this.Y, "focus", this.md);
            hk(this, this.Y, "blur", this.Xe);
            hk(this, this.C, "submit", this.ld);
            hk(this, this.Y, "change", this.nd);
            hk(this, this.Y, "keyup", this.nd);
            hk(this, this.Y, "keydown", this.Ye);
            b && this.md()
        }

        function ik(a) {
            jk(a);
            kk(a);
            z(a.C, "has-focus");
            a.Aa.disabled = n;
            a.Y.value = "";
            gk(a);
            a.Y.blur();
            a.e = m;
            yd(a.g);
            a.g = [];
            x(a.tc, function(a) {
                Zc(a)
            });
            a.tc = [];
            fd(a.C, "initialized");
            W("comment-form-reset")
        }
        p = fk.prototype;
        p.focus = function() {
            this.Y.focus()
        };

        function hk(a, b, c, d) {
            a.g.push(Q(b, c, t(d, a)))
        }

        function jk(a) {
            a.Ra && (a.Ra.innerHTML = "")
        }

        function gk(a) {
            var b = a.i - a.Y.value.length;
            a.b.innerHTML = "CHARACTERS_REMAINING" in Qc ? $c("CHARACTERS_REMAINING" in Qc ? Qc.CHARACTERS_REMAINING : {}, b) : "" + b;
            b = 0 > b;
            C(a.b, "too-many", b);
            a.Aa.disabled = b
        }

        function kk(a) {
            U(a.Pb);
            T(K("comments-remaining"));
            a.uc.innerHTML = "";
            a.Aa.disabled = n
        }
        p.nd = function() {
            this.Y.readOnly || gk(this)
        };
        p.Ye = function(a) {
            if (this.k) switch (a.keyCode) {
                case 13:
                    this.ld(a);
                    break;
                case 27:
                    ik(this)
            }
        };
        p.md = function() {
            B(this.C, "has-focus") || U(this.eb);
            y(this.C, "has-focus");
            W("comments-focus", this.C)
        };
        p.Xe = function() {
            W("comments-blur", this.C)
        };
        p.ld = function(a) {
            a.preventDefault();
            if (!this.Aa.disabled) {
                this.Aa.disabled = l;
                this.Y.readOnly = l;
                a = Me(Dc(this.C));
                a.screen = Pe({
                    h: window.screen.height,
                    w: window.screen.width,
                    d: window.screen.colorDepth
                });
                var b = a.comment,
                    b = {
                        return_ajax: "true",
                        len: b.length,
                        wc: b.split(/\s+/).length
                    };
                this.C.reply_parent_id.value && (b.reply = 1);
                this.e && (b.tag = this.e);
                var c = L("PLAYBACK_ID");
                c && (a.plid = c);
                X(this.C.action, {
                    format: "XML",
                    method: "POST",
                    A: b,
                    F: a,
                    V: function(a, b) {
                        var c = b.str_code;
                        switch (c) {
                            case "OK":
                                c = document.createElement("ul");
                                c.innerHTML = b.html_content;
                                c = gc(c);
                                if (this.C.reply_parent_id.value) {
                                    var h = sc(this.C, m, "comments-post-container"),
                                        j = sc(h, m, "comment");
                                    fc(h);
                                    A(j, "replying", "has-child");
                                    y(c, "child");
                                    C(c, "last", !(j.nextElementSibling != k ? j.nextElementSibling : hc(j.nextSibling)));
                                    j.parentNode && j.parentNode.insertBefore(c, j.nextSibling)
                                } else h = sc(this.C, m, "comments-section"), h = K("comment-list", h), h.insertBefore(c, h.childNodes[0] || m), ik(this);
                                Ej(c);
                                W("comment-submit-success");
                                "True" == b.show_feed_privacy_dialog && W("SHOW-COMMENT-DIALOG",
                                    L("VIDEO_ID"), b.time_created);
                                break;
                            case "PENDING":
                                jk(this);
                                this.dd.innerHTML = O("COMMENT_PENDING");
                                A(this.eb, "yt-alert-error", "yt-alert-info");
                                T(this.eb);
                                break;
                            default:
                                switch (c) {
                                    case "PENDING":
                                        h = O("COMMENT_PENDING");
                                        break;
                                    case "BLOCKED":
                                        h = O("COMMENT_BLOCKED");
                                        break;
                                    case "EMAIL":
                                        h = O("COMMENT_ERROR_EMAIL");
                                        break;
                                    case "INLINE_CAPTCHAFAIL":
                                        h = O("COMMENT_CAPTCHAFAIL");
                                        break;
                                    case "SHOW_COUNTDOWN":
                                        h = O("SHOW_COUNTDOWN");
                                        break;
                                    case "FAILED_MAINTENANCE":
                                        h = O("COMMENT_FAILED_MAINTENANCE");
                                        break;
                                    case "FAILED_OWNER_LINKING":
                                        h =
                                            O("COMMENT_OWNER_LINKING")
                                }
                                h = h || m || O("COMMENT_ERROR");
                                this.dd.innerHTML = h;
                                A(this.eb, "yt-alert-info", "yt-alert-error");
                                T(this.eb);
                                switch (c) {
                                    case "INLINE_CAPTCHA":
                                    case "INLINE_CAPTCHAFAIL":
                                        X("/comment_servlet?gimme_captcha=1", {
                                            format: "XML",
                                            method: "POST",
                                            F: {
                                                session_token: M("comment_servlet")
                                            },
                                            o: function(a, b) {
                                                if (!this.Ra) {
                                                    this.Ra = document.createElement("div");
                                                    this.Ra.className = "comment-captcha";
                                                    var c = this.Y;
                                                    c.parentNode && c.parentNode.insertBefore(this.Ra, c.nextSibling)
                                                }
                                                this.Ra.innerHTML = b.html_content;
                                                this.Aa.disabled = n
                                            },
                                            D: this
                                        });
                                        break;
                                    case "SHOW_COUNTDOWN":
                                        var q = parseInt(b.countdown_timer, 10) || 30,
                                            c = t(function() {
                                                0 == q ? (Zc(v), kk(this)) : (q--, this.uc.innerHTML = "SECONDS_REMAINING" in Qc ? $c("SECONDS_REMAINING" in Qc ? Qc.SECONDS_REMAINING : {}, q) : "" + q)
                                            }, this);
                                        U(K("comments-remaining"));
                                        T(this.Pb);
                                        this.Aa.disabled = l;
                                        var v = Xc(c, 1E3);
                                        c();
                                        this.tc.push(v);
                                        break;
                                    default:
                                        this.Aa.disabled = n, jk(this)
                                }
                        }
                        this.Y.readOnly = n
                    },
                    D: this
                });
                kh("comment")
            }
        };

        function lk(a) {
            this.u = a;
            this.Yb = K("yt-uix-pager-show-more");
            this.b = !!L("ENABLE_LIVE_COMMENTS");
            this.g = [];
            this.wb()
        }
        lk.prototype.wb = function() {
            var a = K("comments-pagination", this.u);
            a && P(a, "ajax-enabled") && this.g.push(S(this.u, "click", t(this.e, this), "yt-uix-pager-button"))
        };
        lk.prototype.e = function(a) {
            a.preventDefault();
            a = a.currentTarget;
            if (!B(a, "yt-uix-button-toggled")) {
                this.Yb == a && fc(this.Yb);
                var b = parseInt(P(a, "page"), 10);
                T("comments-loading");
                W("comments-page-changing");
                X("/watch_ajax?action_get_comments=1", {
                    format: "XML",
                    A: {
                        v: L("VIDEO_ID"),
                        p: b,
                        commentthreshold: L("COMMENTS_THRESHHOLD"),
                        commenttype: "everything",
                        enable_live_comments: this.b ? "yes" : m,
                        page_size: L("COMMENTS_PAGE_SIZE"),
                        source: L("COMMENT_SOURCE")
                    },
                    o: function(a, d) {
                        if (d.html_content) {
                            var e = d.html_content;
                            if (this.Yb) {
                                var f =
                                    document.createElement("div");
                                f.innerHTML = e;
                                this.u.appendChild(f);
                                this.Yb = K("yt-uix-pager-show-more", f)
                            } else this.u.innerHTML = e;
                            Ej(this.u);
                            if (e = E("comments-textarea")) e.disabled = n, e.id = "";
                            if (e = K("comment-list", this.u)) f = K("live-comments-setting", this.u), W("comments-page-changed", e, f, b)
                        }
                        U("comments-loading")
                    },
                    D: this
                })
            }
        };

        function mk(a, b, c) {
            a = sc(a, "form");
            gd(a, "initialized") || (dd(a, "initialized", "true"), bk = new fk(a, !b, c), b && bk.focus())
        }

        function nk() {
            var a = E("comments-view");
            new lk(a);
            ok.push(S(a, "click", pk, "comment-action"));
            if (a = E("comments-textarea")) a.disabled = n, a.id = "";
            L("COMMENT_OPEN_REPLY_BOX") && (a = G("comment", E("linked-comments-header")), qk(a[a.length - 1]))
        }

        function pk(a) {
            a = a.currentTarget;
            var b = sc(a, m, "comment");
            switch (P(a, "action")) {
                case "approve":
                    a = P(b, "id");
                    var c = L("VIDEO_ID");
                    z(b, "pending");
                    X("/comment_servlet?field_approve_comment=1", {
                        format: "XML",
                        method: "POST",
                        F: {
                            comment_id: a,
                            entity_id: c,
                            session_token: M("comment_servlet")
                        },
                        onError: function() {
                            y(b, "pending")
                        }
                    });
                    break;
                case "block":
                    confirm(O("BLOCK_USER")) && (rk(b, l), y(b, "blocked"));
                    break;
                case "unblock":
                    rk(b, n);
                    z(b, "blocked");
                    break;
                case "flag-in-place":
                    if (sk()) {
                        var d = E("comment-flag-area");
                        a = P(b, "id");
                        var c = P(b, "author-id"),
                            e = pc(K("author", b)),
                            f = K("comment-text", b).innerHTML,
                            h = L("VIDEO_ID");
                        Si.getInstance().Sc(d);
                        d = Ti();
                        K("flagged-comment-id", d).value = a;
                        K("flagged-comment-author-id", d).value = c;
                        K("flagged-comment-video-id", d).value = h;
                        lc(K("flagged-comment-author-name", d), e);
                        K("flagged-comment-text", d).appendChild(cc(f));
                        Q(K("continue-flag-comment", d), "click", ck);
                        S(d, "click", dk, "submit-flag-comment");
                        S(d, "click", ek, "abuse-type-radio-input")
                    }
                    break;
                case "flag":
                    tk(b, "mark_comment_as_spam");
                    break;
                case "flag-profile-pic":
                    tk(b,
                        "flag_profile_pic");
                    break;
                case "unflag":
                    a = P(b, "id");
                    X("/comment_servlet", {
                        format: "XML",
                        method: "POST",
                        F: {
                            unmark_comment_as_spam: a,
                            entity_id: L("VIDEO_ID"),
                            session_token: M("comment_servlet")
                        }
                    });
                    break;
                case "hide":
                    y(b, "hidden");
                    break;
                case "show":
                    z(b, "hidden");
                    break;
                case "remove":
                    a = P(b, "id");
                    c = L("VIDEO_ID");
                    U(b);
                    X("/comment_servlet?remove_comment=1", {
                        format: "XML",
                        method: "POST",
                        F: {
                            comment_id: a,
                            entity_id: c,
                            session_token: M("comment_servlet")
                        },
                        onError: function() {
                            T(b)
                        }
                    });
                    break;
                case "reply":
                    qk(b);
                    break;
                case "realtime-reply":
                    sk() &&
                        (bk || (a = K("comments-textarea", E("comments-view")), mk(a)), a = bk, ik(a), a.focus());
                    break;
                case "vote-up":
                    uk(b, l);
                    break;
                case "vote-down":
                    uk(b, n);
                    break;
                case "show-parent":
                    a = P(b, "id");
                    c = L("VIDEO_ID");
                    z(b, "has-child");
                    y(b, "child");
                    if (e = E("parent-comment-loading")) {
                        var j = md(e);
                        b.parentNode && b.parentNode.insertBefore(j, b);
                        T(j)
                    }
                    X("/comment_servlet?get_comment_parent=1", {
                        format: "XML",
                        method: "POST",
                        F: {
                            comment_id: a,
                            entity_id: c,
                            session_token: M("comment_servlet")
                        },
                        o: function(a, c) {
                            var d = document.createElement("ul");
                            d.innerHTML = c.html_content;
                            d = gc(d);
                            b.parentNode && b.parentNode.insertBefore(d, b);
                            fc(j);
                            zj(d)
                        },
                        onError: function(a, c) {
                            y(b, "has-child");
                            z(b, "child");
                            fc(j);
                            c && c.error_message ? window.alert(c.error_message) : window.alert("Request failed, please try later.")
                        }
                    })
            }
        }

        function sk() {
            return L("COMMENTS_SIGNIN_URL") ? (gh(L("COMMENTS_SIGNIN_URL")), n) : !L("COMMENTS_YPC_CAN_POST_OR_REACT_TO_COMMENT") ? n : l
        }

        function rk(a, b) {
            var c = {};
            c["action_" + (b ? "" : "un") + "block_commenter"] = 1;
            var d = P(a, "id");
            X("/link_ajax", {
                format: "XML",
                method: "POST",
                A: c,
                F: {
                    session_token: M("link_ajax"),
                    comment_id: d
                },
                o: function(a, b) {
                    b && b.success_message && window.alert(b.success_message)
                }
            })
        }

        function tk(a, b) {
            if (sk()) {
                var c = P(a, "id"),
                    d = L("VIDEO_ID");
                U(a);
                y(a, "flagged");
                d = {
                    entity_id: d
                };
                d[b] = c;
                X("/comment_servlet", {
                    format: "XML",
                    method: "POST",
                    A: d,
                    F: {
                        session_token: M("comment_servlet")
                    },
                    onError: function() {
                        T(a);
                        z(a, "flagged")
                    }
                })
            }
        }

        function qk(a) {
            if (sk())
                if (B(a, "replying")) B(a, "replying") && (z(a, "replying"), a = K("comments-post-container", a), fc(a));
                else {
                    y(a, "replying");
                    var b = K("comments-post", E("watch7-discussion") || E("watch7-discussion")),
                        b = md(b),
                        c = document.createElement("div");
                    c.className = "comments-post-container";
                    a.appendChild(c);
                    c.appendChild(b);
                    b = new fk(b);
                    ik(b);
                    c = P(a, "id");
                    b.C.reply_parent_id.value = c;
                    if (a = P(a, "tag")) b.e = a;
                    b.focus()
                }
        }

        function uk(a, b) {
            if (sk() && !P(a, "voted")) {
                var c = P(a, "id"),
                    d = L("VIDEO_ID"),
                    e = P(a, "score") || "0",
                    f = b ? 1 : -1;
                dd(a, "voted", f + "");
                b ? A(a, "voted-down", "voted-up") : A(a, "voted-up", "voted-down");
                c = {
                    a: f,
                    id: c,
                    video_id: d,
                    old_vote: e
                };
                (d = P(a, "tag")) && (c.tag = d);
                X("/comment_voting", {
                    format: "XML",
                    method: "POST",
                    A: c,
                    F: {
                        session_token: M("comment_voting")
                    }
                })
            }
        }
        var ok = [];
        var vk = n,
            wk = n;
        var xk = ["FL", "LL", "QL", "SV", "WL"];

        function yk() {
            return parseInt(L("SHUFFLE_VALUE"), 10) || 0
        };

        function zk() {
            var a = Jd("watch_queue_new");
            return a ? a.split(",") : []
        }

        function Ak(a) {
            a = Xa(a, 0, 100);
            (a = a.join(",")) ? Id("watch_queue_new", a): Kd("watch_queue_new")
        };

        function Bk(a, b, c, d) {
            this.g = a;
            this.U = b;
            this.ta = this.fb = n;
            this.ca = new of ;
            this.P = c || [];
            this.Mb = d || 0;
            this.vb = {};
            this.i = !c;
            this.ub = "";
            this.b = -1;
            this.gb = 1;
            this.Lb = this.qa = 0;
            this.qb = this.rb = "";
            this.e = this.bb = this.La = m
        }

        function Ck(a) {
            a.ca.va("LIST_UPDATED")
        }
        p = Bk.prototype;
        p.isEqual = function(a) {
            return this.g != a.g ? n : this.Va() == a.Va()
        };
        p.Oc = function(a) {
            this.ub = a.ub || "";
            this.b = a.ja();
            this.qa = a.qa;
            this.gb = a.gb;
            this.rb = a.rb;
            this.qb = a.qb;
            this.Mb = a.Mb
        };
        p.Da = function() {
            return this.g
        };
        p.Va = function() {
            return this.g + (this.U || "")
        };

        function Dk(a) {
            return a.da() ? Ek(a, "shuffled_ids", function() {
                return Ka(Fk(this), function(a) {
                    return a.id
                })
            }) : a.Ea()
        }
        p.Vc = function(a) {
            var b = Dk(this);
            if (!b.length) return "";
            a = this.ja() + a;
            a >= b.length && (a %= b.length);
            return b[a]
        };

        function Gk(a, b) {
            var c = Dk(a);
            return Ka(b, function(a) {
                var b;
                a: {
                    b = function(b) {
                        return b == a
                    };
                    for (var f = ga(c) ? c.split("") : c, h = c.length - 1; 0 <= h; h--)
                        if (h in f && b.call(k, f[h])) {
                            b = h;
                            break a
                        } b = -1
                }
                return b
            })
        }
        p.Ea = function() {
            return Ua(this.P)
        };

        function Fk(a) {
            return Ek(a, "shuffled_videos", function() {
                function a(b) {
                    var c = 1,
                        e = [];
                    for (b = b.split(""); b.length;) {
                        var c = (d + c) % b.length,
                            f = b[c];
                        Sa(b, c);
                        e.push(f)
                    }
                    return e.join("")
                }
                var c = this.Ea(),
                    d = yk(),
                    e = [];
                x(c, function(c, d) {
                    e.push({
                        id: c,
                        key: a(c),
                        index: d
                    })
                });
                Ha.sort.call(e, function(a, b) {
                    return Ya(a.key, b.key)
                } || Ya);
                var f = d >> 8;
                Na(e, function(a) {
                    return f == a.index
                });
                c = Xa(e, f).concat(Xa(e, 0, f));
                return Ka(c, function(a) {
                    return {
                        id: a.id,
                        Mc: a.index
                    }
                })
            })
        }
        p.getVideoData = function(a) {
            return this.vb[a] || {}
        };
        p.ea = function() {
            return this.Ea().length
        };
        p.ja = function() {
            return this.da() ? Na(Fk(this), function(a) {
                return a.Mc == this.b
            }, this) : this.b
        };
        p.da = function() {
            return 0 < this.qa
        };
        p.Ca = function() {
            return 0 <= this.b
        };
        p.Bb = function() {
            return !!this.fb
        };
        p.Lc = function() {
            return n
        };
        p.hb = function() {
            return n
        };

        function Hk(a, b, c, d) {
            var e = Dk(a)[b];
            if (!e) return m;
            var f = {
                v: e
            };
            if (1 < (Ek(a, "occurrences", function() {
                    var a = {};
                    x(this.Ea(), function(b) {
                        a[b] = (a[b] || 0) + 1
                    });
                    return a
                })[e] || 0)) e = b + 1 + a.Lb, a.da() && (e = Fk(a)[b].Mc + 1), f.index = e;
            c && (f.playnext = a.gb);
            a.da() && (f.shuffle = a.qa);
            d && (f.feature = d);
            return Se(a.ub, f)
        }
        p.clear = function() {
            this.we();
            Ck(this)
        };
        p.removeItem = function(a) {
            this.da() && (a = Fk(this)[a].Mc);
            var b = this.Ea()[a];
            this.Gd(a);
            this.b > a ? this.b -= 1 : this.b == a && (this.b = -1);
            Ck(this);
            return b
        };
        p.Gd = function(a) {
            this.fb = l;
            var b = this.P[a];
            Sa(this.P, a);
            X(this.fc(), {
                format: "XML",
                method: "POST",
                F: {
                    video_ids: b,
                    session_token: M("addto_ajax") || "",
                    playlist_id: this.U || "",
                    index: a
                },
                o: function(a, b) {
                    this.La = b.html_content
                },
                onError: function(a, b) {
                    this.bb = b.error_message || O("ERROR_OCCURRED")
                },
                V: function() {
                    this.fb = n;
                    Ck(this)
                },
                D: this
            })
        };
        p.load = function(a) {
            this.i && !this.fb && Ik(this);
            Jk(this, a)
        };

        function Jk(a, b) {
            var c = Dk(a),
                c = Ja(c, function(a) {
                    return !(a in this.vb)
                }, a);
            x(c, function(a) {
                this.vb[a] = {}
            }, a);
            var d = t(function(a) {
                for (var c in a) this.vb[c] = a[c];
                Ck(this);
                b && b()
            }, a);
            c.length && X("/video_info_ajax", {
                method: "POST",
                A: {
                    action_get_videos_data: 1,
                    count: c.length
                },
                F: {
                    video_ids: c.join(",")
                },
                o: function(a, b) {
                    b.data && d(b.data)
                }
            })
        }

        function Ik(a, b, c) {
            a.fb = l;
            a.i = n;
            var d = {
                style: "bottomfeedr_json",
                action_get_list: 1,
                list: a.Va()
            };
            c && nb(d, c);
            X("/list_ajax", {
                A: d,
                o: function(a, b) {
                    var c = b.data;
                    this.P = Ua(c.videos);
                    this.U = c.list_id;
                    this.ta = !!c.editable;
                    this.ub = c.video_url || "";
                    this.rb = c.menu_title_html;
                    this.qb = c.menu_html;
                    this.Mb = c.video_count;
                    this.Lb = c.index_offset;
                    var c = c.video_data,
                        d;
                    for (d in c) this.vb[d] = c[d]
                },
                onError: function() {},
                V: function() {
                    this.fb = n;
                    Jk(this);
                    Ck(this);
                    b && b()
                },
                D: a
            })
        }

        function Ek(a, b, c) {
            if (a.e && b in a.e) return a.e[b];
            c = c.call(a);
            a.e && (a.e[b] = c);
            return c
        };

        function Kk(a, b, c) {
            Bk.call(this, "FL", a, b, c)
        }
        w(Kk, Bk);
        Kk.prototype.fc = function() {
            return "/addto_ajax?action_delete_from_favorites=1"
        };

        function Lk(a, b, c) {
            Bk.call(this, "LL", a, b, c)
        }
        w(Lk, Bk);
        Lk.prototype.fc = function() {
            return "/addto_ajax?action_delete_from_liked=1"
        };

        function Mk(a, b, c) {
            Bk.call(this, "ML", a, b, c)
        }
        w(Mk, Bk);
        Mk.prototype.Lc = function() {
            return !!this.ta
        };
        Mk.prototype.hb = function() {
            return !!this.ta
        };

        function Nk(a, b, c, d) {
            Bk.call(this, a, b, c, d)
        }
        w(Nk, Bk);
        p = Nk.prototype;
        p.Tc = function(a) {
            Va(this.P, a);
            X("/addto_ajax", {
                format: "XML",
                method: "POST",
                A: {
                    action_add_to_playlist: 1
                },
                F: {
                    playlist_id: this.U,
                    video_ids: a.join(","),
                    session_token: M("addto_ajax")
                },
                onError: function() {
                    this.bb = O("ERROR_OCCURRED");
                    Ck(this)
                },
                D: this
            })
        };
        p.fc = function() {
            return "/addto_ajax?action_delete_from_playlist=1"
        };
        p.we = function() {
            var a = this.P.length;
            Qa(this.P);
            X("/addto_ajax", {
                format: "XML",
                method: "POST",
                A: {
                    action_clear_playlist: 1,
                    list_length: a,
                    type: this.g
                },
                F: {
                    playlist_id: this.U,
                    session_token: M("addto_ajax")
                },
                onError: function() {
                    this.bb = O("ERROR_OCCURRED");
                    Ck(this)
                },
                D: this
            })
        };
        p.Dd = function(a, b) {
            var c = this.P[a];
            Sa(this.P, a);
            Wa(this.P, b, 0, c);
            var d = Ua(this.P);
            X("/addto_ajax?action_move_playlist_video=1", {
                format: "XML",
                method: "POST",
                F: {
                    video_ids: c,
                    playlist_id: this.U,
                    source_index: a,
                    target_index: b,
                    session_token: M("addto_ajax")
                },
                onError: function() {
                    var e;
                    a: if (e = this.P, !fa(e) || !fa(d) || e.length != d.length) e = n;
                        else {
                            for (var f = e.length, h = 0; h < f; h++)
                                if (e[h] !== d[h]) {
                                    e = n;
                                    break a
                                } e = l
                        } e && (Sa(this.P, b), Wa(this.P, a, 0, c));
                    this.bb = O("ERROR_OCCURRED");
                    Ck(this)
                },
                D: this
            })
        };
        p.hb = function() {
            return !!this.ta
        };

        function Ok(a) {
            Bk.call(this, "QL", m);
            this.ta = l;
            this.i = !a
        }
        w(Ok, Bk);
        p = Ok.prototype;
        p.Oc = function(a) {
            Ok.L.Oc.call(this, a);
            this.i = n
        };
        p.Ea = function() {
            return zk()
        };
        p.Tc = function(a) {
            var b = zk();
            Va(b, a);
            Ak(b)
        };
        p.Gd = function(a) {
            var b = Dk(this)[a];
            a = zk();
            b = Ia(a, b);
            0 <= b && (Sa(a, b), Ak(a))
        };
        p.we = function() {
            Ak([])
        };
        p.Dd = function(a, b) {
            var c = zk(),
                d = c[a];
            Sa(c, a);
            Wa(c, b, 0, d);
            Ak(c)
        };
        p.hb = function() {
            return !!this.ta
        };

        function Pk(a, b, c) {
            Bk.call(this, "SV", a, b, c);
            this.ta = l
        }
        w(Pk, Bk);
        Pk.prototype.load = function(a) {
            Pk.L.load.call(this, a);
            !this.Bb() && this.Ca() && (a = Dk(this), this.ja() >= a.length - 1 && Ik(this, m, {
                load_more: "1"
            }))
        };
        Pk.prototype.fc = function() {
            return "/addto_ajax?action_delete_from_station=1"
        };

        function Qk(a, b, c, d) {
            var e = m;
            switch (a) {
                case "PL":
                case "SP":
                case "BP":
                case "WL":
                    e = new Nk(a, b, c, d);
                    break;
                case "FL":
                    e = new Kk(b, c, d);
                    break;
                case "LL":
                    e = new Lk(b, c, d);
                    break;
                case "AV":
                case "BB":
                case "ML":
                case "MC":
                    e = new Mk(b, c, d);
                    break;
                case "QL":
                    e = new Ok;
                    break;
                case "SV":
                    e = new Pk(b, c, d);
                    break;
                default:
                    e = new Bk(a, b, c, d)
            }
            return e
        };
        var Rk = "";

        function Sk() {
            Ig("addto-watch-later-button", "click", Tk);
            Ig("addto-watch-later-button-success", "click", Uk);
            Ig("addto-watch-later-button-sign-in", "click", Vk);
            S(E("shared-addto-watch-later-login"), "click", Wk, "sign-in-link")
        }

        function Vk(a) {
            Rk = P(a, "video-ids")
        }

        function Wk(a) {
            var b = Se("/addto_ajax", {
                    action_redirect_to_signin_with_add: 1,
                    list_type: "WL",
                    video_ids: Rk,
                    next_url: document.location
                }),
                c = document.createElement("form");
            c.action = b;
            c.method = "POST";
            b = document.createElement("input");
            b.type = "hidden";
            b.name = "session_token";
            b.value = M("addto_ajax_logged_out");
            c.appendChild(b);
            document.body.appendChild(c);
            c.submit();
            a.preventDefault()
        }

        function Tk(a) {
            cb(a, "addto-watch-later-button", "addto-watch-later-button-loading");
            var b = P(a, "video-ids");
            X("/addto_ajax", {
                method: "POST",
                format: "XML",
                A: {
                    action_add_to_watch_later_list: 1
                },
                F: {
                    session_token: M("addto_ajax"),
                    video_ids: b
                },
                o: function(c, d) {
                    Xk(d.list_id, b, a)
                },
                onError: function(c, d) {
                    6 == d.return_code ? Xk(d.list_id, b, a) : Yk(a, d)
                }
            })
        }

        function Uk(a) {
            cb(a, "addto-watch-later-button-success", "addto-watch-later-button-loading");
            var b = P(a, "video-ids");
            X("/addto_ajax", {
                method: "POST",
                format: "XML",
                A: {
                    action_delete_from_watch_later_list: 1
                },
                F: {
                    session_token: M("addto_ajax"),
                    video_ids: b
                },
                o: function() {
                    cb(a, "addto-watch-later-button-loading", "addto-watch-later-button")
                },
                onError: function(b, d) {
                    Yk(a, d)
                }
            })
        }

        function Xk(a, b, c) {
            cb(c, "addto-watch-later-button-loading", "addto-watch-later-button-success");
            var d = O("ADDTO_WATCH_LATER_ADDED");
            dh(ah.getInstance(), c, d);
            W("WATCH_LATER_UPDATED", a, b.split(","))
        }

        function Yk(a, b) {
            cb(a, "addto-watch-later-button-loading", "addto-watch-later-button-error");
            var c = b.error_message || O("ADDTO_WATCH_LATER_ERROR");
            dh(ah.getInstance(), a, c)
        };

        function Zk(a) {
            this.e = a;
            this.b = []
        }
        w(Zk, mf);
        var $k = [];

        function al(a, b, c, d) {
            ea(c) || ($k[0] = c, c = $k);
            for (var e = 0; e < c.length; e++) {
                var f = Mh(b, c[e], d || a, n, a.e || a);
                a.b.push(f)
            }
        }

        function bl(a, b, c, d, e, f) {
            if (ea(c))
                for (var h = 0; h < c.length; h++) bl(a, b, c[h], d, e, f);
            else {
                a: {
                    d = d || a;f = f || a.e || a;e = !!e;
                    if (b = Ph(b, c, e))
                        for (c = 0; c < b.length; c++)
                            if (!b[c].Ua && b[c].ob == d && b[c].capture == e && b[c].Zb == f) {
                                b = b[c];
                                break a
                            } b = m
                }
                b && (b = b.key, Qh(b), Ra(a.b, b))
            }
        }
        Zk.prototype.W = function() {
            Zk.L.W.call(this);
            x(this.b, Qh);
            this.b.length = 0
        };
        Zk.prototype.handleEvent = function() {
            g(Error("EventHandler.handleEvent not implemented"))
        };
        D || zb && Nb("1.9.3");
        var cl = r.window;

        function dl(a, b) {
            ha(a) ? b && (a = t(a, b)) : a && "function" == typeof a.handleEvent ? a = t(a.handleEvent, a) : g(Error("Invalid listener argument"));
            cl.setTimeout(a, 10)
        };
        new of ;

        function el(a, b) {
            this.b = a;
            var c = b || m;
            if (!c) {
                var d = [],
                    e = {};
                this.b.replace(fl, function(a, b) {
                    b in e || (e[b] = l, d.push(b))
                });
                c = d
            }
            c = sa("__%s__", "(" + c.join("|") + ")");
            this.e = RegExp(c, "g")
        }
        var fl = /__([a-z]+(?:_[a-z]+)*)__/g;

        function gl(a, b) {
            var c = E(a).innerHTML,
                c = c.replace(/^\s*(<\!--\s*)?/, ""),
                c = c.replace(/(\s*--\>)?\s*$/, "");
            return new el(c, b)
        }
        el.prototype.kb = function(a, b, c) {
            var d = t(function(d, f) {
                b && (f = b(f));
                return c ? a[f] || "" : xa(a[f] || "")
            }, this);
            return this.b.replace(this.e, d)
        };

        function hl(a) {
            this.J = a;
            var b, c;
            il() ? (b = E("watch7-playlist-tray"), c = E("watch7-playlist-bar-title"), a = E("watch7-playlist-tray-item-template")) : (b = E("playlist-bar-tray"), c = E("playlist-bar-title"), a = E("playlist-bar-template"));
            this.b = b;
            this.k = c;
            this.oa = od("ol", m, this.b);
            this.e = E("playlist-bar-extras-menu");
            b = jb(jl);
            this.g = gl(a, b);
            a = P(a, "video-thumb-url") || "";
            this.i = new el(a, b);
            S(this.b, "click", t(function() {
                N(t(this.Dc, this), 0)
            }, this), "playlist-bar-tray-button")
        }
        var jl = {
            classes: "classes",
            list_position: "index",
            video_encrypted_id: "id",
            video_title: "title",
            video_url: "url",
            video_display_name: "display_name",
            video_thumb_url: "thumb_url"
        };
        hl.prototype.kb = function(a, b, c, d, e, f) {
            var h = d.rb;
            h && (this.k.innerHTML = h, this.e && (this.e.innerHTML = d.qb));
            var j = [];
            x(a, function(a, b) {
                var e = b + f == c,
                    h = d.getVideoData(a);
                h.id = a;
                h.url = Hk(d, b);
                j.push(kl(this, h, b + 1 + f, e))
            }, this);
            this.oa.innerHTML = j.join("");
            e ? this.scroll(3) : this.scroll(5);
            a = G("item-count", this.J);
            x(a, function(a) {
                a.innerHTML = b
            });
            a = G("playing-index", this.J);
            x(a, function(a) {
                a.innerHTML = c + 1
            })
        };

        function kl(a, b, c, d) {
            function e(a) {
                return jl[a]
            }
            b.index = c;
            b.thumb_url = a.i.kb(b, e);
            c = [];
            b.unviewable ? (c.push("playlist-bar-item-unviewable"), b.thumb_url = "//web.archive.org/web/20121218011521/http://s.ytimg.com/yts/img/meh_mini-vfl0Ugnu3.png") : b.title || c.push("loading");
            d && c.push("playlist-bar-item-playing");
            b.classes = c.join(" ");
            return a.g.kb(b, e)
        }
        hl.prototype.Dc = function() {
            var a;
            if (il()) {
                a = Vi.getInstance();
                var b = this.b;
                if (b)
                    if (a = G(Y(a, "scroll-unit"), b), 0 >= a.length) a = [];
                    else {
                        var c = b.scrollTop,
                            d = Wi(a),
                            e = b.offsetHeight,
                            b = Math.max(Math.floor(c / d), 0),
                            c = Math.min(Math.ceil((c + e) / d), a.length);
                        a = Xa(a, b, c)
                    }
                else a = []
            } else if (c = $i.getInstance(), d = this.b, a = c.getBodyElement(d), a = aj(c, a), a = bj(c, a), a.length) {
                b = parseInt(c.getData(d, "slider-offset"), 10);
                if (isNaN(b) || 0 < b) b = 0;
                e = cj(c, d);
                d = dj(c, d, a);
                c = Math.floor(-b / d);
                c = Math.max(0, c);
                d = Math.ceil((-b + e) / d);
                d = Math.min(d,
                    a.length);
                a = Xa(Ua(a), c, d)
            } else a = [];
            x(a, function(a) {
                Ej(a)
            })
        };
        hl.prototype.scroll = function(a, b) {
            var c;
            c = il() ? Vi.getInstance() : $i.getInstance();
            switch (a) {
                case 3:
                    var d = od("li", "playlist-bar-item-playing", this.oa);
                    d ? c.Ed(this.b, d) : c.Wa(this.b, 0);
                    break;
                case 4:
                    b && c.Wa(this.b, b);
                    break;
                case 5:
                    c.Fd(this.b)
            }
            this.Dc()
        };
        hl.prototype.ic = function(a) {
            var b = 0,
                c = t(function() {
                    var d = J("li", "playlist-bar-item", this.oa),
                        e = !(b % 2);
                    x(a, function(a) {
                        C(d[a], "playlist-bar-item-highlight", e)
                    });
                    b++;
                    6 > b && N(c, 150)
                }, this);
            c()
        };

        function il() {
            return E("watch7-playlist-container") != m
        };

        function ll(a, b) {
            this.J = a;
            this.N = E("page");
            this.Ba = new hl(this.J);
            this.g = b;
            this.Cc = this.z = n;
            this.k = E("playlist-bar-bar");
            Q(this.k, "click", t(this.df, this));
            this.Ma = E("playlist-bar-play-button");
            Q(this.Ma, "click", t(this.kf, this));
            this.ab = E("playlist-bar-prev-button") || E("watch7-playlist-bar-prev-button");
            this.H = E("playlist-bar-next-button") || E("watch7-playlist-bar-next-button");
            Q(this.ab, "click", t(this.lf, this));
            Q(this.H, "click", t(this.hf, this));
            this.e = E("playlist-bar-autoplay-button");
            Q(this.e, "click",
                t(this.cf, this));
            this.T = E("playlist-bar-shuffle-button") || E("watch7-playlist-bar-shuffle-button");
            Q(this.T, "click", t(this.mf, this));
            this.ba = E("playlist-bar-toggle-button") || E("watch7-playlist-bar-toggle-button");
            Q(this.ba, "click", t(this.nf, this));
            this.i = E("playlist-bar-options-menu");
            S(this.i, "click", t(this.jf, this), "yt-uix-button-menu-item");
            this.oa = E("playlist-bar-tray-content");
            S(this.oa, "click", t(this.ef, this), "delete");
            S(this.oa, "click", t(this.ff, this), "load-lists");
            S(this.oa, "click", t(this.gf,
                this), "load-more");
            this.ia = gl(E("playlist-bar-next-up-template") || E("watch7-playlist-bar-next-up-template"), ["video_encrypted_id"]);
            ml(this, b, function() {
                T("watch7-playlist-tray");
                U("watch7-playlist-loading")
            });
            this.j.ea() ? nl(this) : A(this.J, ["min", "max"], "hid");
            if (P(this.J, "masked")) {
                var c = document.createElement("iframe");
                c.id = "playlist-bar-mask";
                c.frameBorder = "0";
                c.src = 'javascript:""';
                this.J.insertBefore(c, this.J.firstChild)
            }
        }

        function ml(a, b, c, d) {
            if (a.j && (a.j.ca.clear("LIST_UPDATED"), a.g.isEqual(b) || d)) b.Oc(a.g), a.g = b;
            a.j = b;
            a.j.ca.Ta("LIST_UPDATED", a.mb, a);
            a.j.load(c);
            a.mb(l)
        }
        p = ll.prototype;
        p.Da = function() {
            return this.j.Da()
        };
        p.Va = function() {
            return this.j.Va()
        };
        p.Ca = function() {
            return this.j.Ca()
        };

        function ol(a) {
            return a.Ca() && B(a.J, "autoplay-on")
        }

        function pl(a, b) {
            b ? A(a.J, "autoplay-off", "autoplay-on") : A(a.J, "autoplay-on", "autoplay-off");
            Ld.getInstance();
            Rd(Td.Kg, !b);
            Sd();
            Tc("LIST_AUTO_PLAY_ON", b)
        }
        p.da = function() {
            return B(this.J, "shuffle-on")
        };
        p.Bb = function() {
            return B(this.J, "loading")
        };

        function nl(a) {
            Qd(Ld.getInstance(), Td.de) ? ql(a) : rl(a)
        }

        function ql(a) {
            A(a.J, ["hid", "max"], "min");
            sl(a, l)
        }

        function rl(a) {
            A(a.J, ["hid", "min"], "max");
            sl(a, l);
            N(t(a.Ba.Dc, a.Ba), 300)
        }

        function tl(a) {
            var b;
            B(a.J, "min") ? (rl(a), b = n) : (ql(a), b = l);
            Ag("bf", "toggleBar=1&collapsed=" + b, k);
            Ld.getInstance();
            Rd(Td.de, b);
            Sd();
            ul(a, l)
        }
        p.df = function(a) {
            tc(a.target, function(a) {
                a = a.tagName && a.tagName.toLowerCase();
                return "a" == a || "button" == a
            }, l) || tl(this)
        };
        p.jf = function(a) {
            a.stopPropagation();
            switch (P(a.currentTarget, "action")) {
                case "clear":
                    this.clear();
                    break;
                case "load-lists":
                    vl(this);
                    break;
                case "show-active":
                    this.g && ml(this, this.g);
                    break;
                case "save":
                    this.Bb() || (rl(this), wl(this, {
                        A: {
                            action_get_save_playlist_form: 1
                        },
                        o: function(a, c) {
                            A(this.J, "lists", "save");
                            var d = c.html;
                            this.Jd = E("playlist-bar-save");
                            this.Jd.innerHTML = d;
                            d = E("playlist-bar-title-edit");
                            d.focus();
                            d.select();
                            Q(E("playlist-bar-save-cancel"), "click", t(this.hg, this));
                            Q(E("playlist-bar-save-form"),
                                "submit", t(this.ig, this))
                        }
                    }))
            }
        };
        p.nf = function() {
            db(this.N, "watch-playlist-collapsed");
            tl(this)
        };
        p.cf = function() {
            var a = !ol(this);
            pl(this, a);
            sl(this)
        };
        p.mf = function() {
            var a = !this.da(),
                b = 0;
            Tc("SHUFFLE_ENABLED", a);
            a && Tc("SHUFFLE_VALUE", Math.max(1, 1E6 * Math.random()));
            a ? (A(this.J, "shuffle-off", "shuffle-on"), b = yk()) : A(this.J, "shuffle-on", "shuffle-off");
            this.j.qa = b;
            this.mb();
            this.Ba.scroll(3)
        };
        p.kf = function() {
            xl(this, l, "bf_play")
        };
        p.lf = function() {
            yl(this, "bf_prev")
        };
        p.hf = function() {
            xl(this, l, "bf_next")
        };
        p.ef = function(a) {
            a.preventDefault();
            var b = J("li", "playlist-bar-item", this.oa);
            a = sc(a.currentTarget, "li", "playlist-bar-item");
            b = Ia(b, a);
            this.j.Lc() && (a = this.j.Da(), zl(this), Ag("bf", "copyFrom=1&action=delete&list_type=" + a, k));
            var c = this.j.Da(),
                d = Dk(this.j)[b];
            this.j.removeItem(b);
            Al(this, O("PLAYLIST_VIDEO_DELETED"), n, n, n, function() {
                this.j.Tc([d]);
                this.mb();
                var a = this.j.ea() - 1;
                this.Ba.scroll(4, a);
                this.Ba.ic([a]);
                Ag("bf", "undo_delete=1&list_type=" + c, k)
            });
            Ag("bf", "delete=1&list_type=" + c, k)
        };
        p.Gf = function(a) {
            var b = a.sourceIndex;
            a = a.targetIndex;
            if (!(b == a || 0 > b || 0 > a)) {
                if (this.j.Lc()) {
                    var c = this.j.Da();
                    zl(this);
                    Ag("bf", "copyFrom=1&action=drag&list_type=" + c, k)
                }
                c = this.j;
                if (!c.da() && c.hb()) {
                    var d = Dk(c);
                    d[b] && d[a] && (c.Dd(b, a), d = c.b, d == b ? c.b = a : d > b && d <= a ? c.b -= 1 : d < b && d >= a && (c.b += 1));
                    Ck(c)
                }
                b = Pe({
                    moved_item_delta: Math.abs(a - b),
                    list_type: this.j.Da()
                });
                Ag("bf", b, k)
            }
        };

        function yl(a, b) {
            var c;
            c = a.j;
            var d = c.ja() - 1;
            0 > d && (d = c.ea() - 1);
            if (c = Hk(c, d, n, b)) Bl(a, c, b), gh(c)
        }

        function xl(a, b, c) {
            b || Ag("bf", "autoplay=1&playcount=" + a.j.gb, k);
            var d;
            d = a.j;
            var e = d.ja() + 1;
            e >= d.ea() && (e = 0);
            if (d = Hk(d, e, !b, c)) Bl(a, d, c, !b), gh(d)
        }

        function Cl(a, b) {
            if (!(1 > b || 5 < b)) {
                Ag("bf", "delayedautoplay=" + b, k);
                a.e && bh(ah.getInstance(), a.e);
                var c = O("AUTOPLAY_WARNING" + b);
                c && Al(a, c, n, l, E("watch7-playlist-container") != m)
            }
        }
        p.clear = function() {
            var a = this.j.Ea();
            this.j.clear();
            Al(this, O("LIST_CLEARED"), n, n, n, function() {
                this.j.Tc(a);
                this.mb();
                Ag("bf", "undo_clear=1&list_type=" + b, k)
            });
            var b = this.j.Da();
            Ag("bf", "clear=1&list_type=" + b, k)
        };
        p.Vc = function(a) {
            return this.j.Vc(a)
        };
        p.mb = function(a) {
            var b = this.j.Bb(),
                c = !b && !!this.j.ta,
                d = !this.j.ea(),
                e = this.j.Ca();
            this.i && (e ? A(this.i, "passive", "active") : A(this.i, "active", "passive"));
            var f = [],
                h = [];
            (e ? h : f).push("active");
            (!e ? h : f).push("passive");
            (b ? h : f).push("loading");
            (c ? h : f).push("editable");
            (d ? h : f).push("empty");
            A(this.J, f, h);
            if (!b) {
                b = this.j;
                b.e = {};
                try {
                    var j = Dk(this.j),
                        q = this.j.Mb,
                        v = this.j.ja();
                    this.Ba.kb(j, q, v, this.j, !!a, this.j.Lb);
                    this.Cc = n
                } finally {
                    b.e = m
                }
            }
            a = this.j.bb;
            j = this.j.La;
            a ? Al(this, a, l, n) : j && Al(this, j, n, l);
            a = this.j;
            a.La = m;
            a.bb = m;
            sl(this);
            this.j.hb() && this.j.ea() && !this.z && (this.z = l, fg((L("DRAGDROP_BINARY_URL") || "") + "", t(function() {
                Q(this.oa, "mouseover", t(function() {
                    this.Cc || (this.Cc = l, this.j.hb() && !this.j.da() && s("yt.www.lists.dragdrop").createDraggables())
                }, this));
                var a = s("yt.www.lists.dragdrop");
                a.init(this.oa, "playlist-bar-item");
                a.subscribe("DROPPED_AT_INDEX", this.Gf, this)
            }, this)))
        };

        function sl(a, b) {
            var c = O("AUTOPLAY_OFF_TOOLTIP");
            ol(a) && (c = O("AUTOPLAY_ON_TOOLTIP"));
            var d = O("SHUFFLE_OFF_TOOLTIP");
            a.da() && (d = O("SHUFFLE_ON_TOOLTIP"));
            var e = O("NEXT_VIDEO_NOTHUMB_TOOLTIP");
            if (a.j.Ca()) {
                var f = Dk(a.j),
                    h = a.j.ja();
                if ((f = (h = f[f.length == h + 1 ? 0 : h + 1]) && a.j.getVideoData(h)) && f.title) e = a.ia.kb({
                    video_encrypted_id: h
                }), e = a.k ? O("NEXT_VIDEO_TOOLTIP", {
                    "{next_video_title}": f.title
                }) + " " + e : '<div class="playlist-bar-next-tip">' + e + " " + O("NEXT_VIDEO_TOOLTIP", {
                    "{next_video_title}": f.title
                }) + "</div>"
            }
            f =
                "";
            f = a.k ? B(a.J, "min") ? O("SHOW_PLAYLIST_TOOLTIP") : O("HIDE_PLAYLIST_TOOLTIP") : B(a.N, "watch-playlist-collapsed") ? O("SHOW_PLAYLIST_TOOLTIP") : O("HIDE_PLAYLIST_TOOLTIP");
            h = ah.getInstance();
            dh(h, a.H, e);
            a.e && dh(h, a.e, c);
            dh(h, a.T, d);
            dh(h, a.ba, f, b)
        }
        p.Ia = m;
        p.dc = m;

        function Al(a, b, c, d, e, f) {
            b && (a.b || (a.b = E("playlist-bar-notifications"), S(a.b, "click", t(a.ag, a), "playlist-bar-undo")), a.dc = f || m, a.dc && (b += ' <a class="playlist-bar-undo">' + O("UNDO_LINK") + "</a>"), K("yt-alert-content", a.b).innerHTML = b, b = K("yt-alert-icon", a.b), qe(b, !e), C(a.b, "yt-alert-error", !!c), C(a.b, "yt-alert-success", !c), T(a.b), a.Ia && (Yc(a.Ia), a.Ia = m), d && (c = t(function() {
                ul(this)
            }, a), a.Ia = N(c, 1E4)))
        }
        p.showError = function(a, b) {
            Al(this, a, l, b)
        };

        function ul(a, b) {
            var c = !!a.Ia;
            if (!b || !c) U(a.b), a.dc = m, a.Ia && (Yc(a.Ia), a.Ia = m)
        }
        p.ag = function(a) {
            a.stopPropagation();
            a.preventDefault();
            a = this.dc;
            ul(this);
            a.call(this)
        };
        p.ic = function(a) {
            a = Gk(this.j, a);
            a.length && (this.Ba.ic(a), this.Ba.scroll(4, a[0]))
        };
        p.hg = function(a) {
            a.preventDefault();
            z(this.J, "save")
        };
        p.ig = function(a) {
            a.preventDefault();
            var b = Dk(this.j).join(",");
            b && (ul(this), a = Dc(a.target), wl(this, {
                A: {
                    action_save_playlist: 1
                },
                method: "POST",
                Sa: a + ("&video_ids=" + b),
                o: function(a, b) {
                    this.Jd.innerHTML = "";
                    z(this.J, "save");
                    var e = Qk("PL", b.list_id);
                    ml(this, e, m, l);
                    e = O("PLAYLIST_BAR_PLAYLIST_SAVED");
                    Al(this, e, n, l)
                }
            }))
        };
        p.ff = function(a) {
            a.preventDefault();
            vl(this)
        };
        p.gf = function() {
            var a = this.j;
            Ik(a, m, {
                load_more: "1"
            });
            Ck(a)
        };

        function vl(a) {
            a.Bb() || (rl(a), wl(a, {
                A: {
                    action_get_playlists: 1
                },
                o: function(a, c) {
                    A(this.J, "save", "lists");
                    this.xg = E("playlist-bar-lists-back");
                    this.vg = Q(this.xg, "click", t(this.yg, this));
                    var d = c.html;
                    this.Hb = E("playlist-bar-lists");
                    this.Hb.innerHTML = d;
                    Ej(this.Hb);
                    this.wg = S(this.Hb, "click", t(this.zg, this), "playlist-bar-playlist-item")
                }
            }))
        }
        p.zg = function(a) {
            a.preventDefault();
            var b = a.currentTarget;
            b && (Dl(this), a = P(b, "list-type") || "", b = P(b, "list-id") || "", a = Qk(a, b), ml(this, a))
        };
        p.yg = function(a) {
            a.preventDefault();
            Dl(this)
        };

        function Dl(a) {
            z(a.J, "lists");
            a.Hb && (a.Hb.innerHTML = "");
            yd(a.wg);
            yd(a.vg)
        }

        function wl(a, b) {
            y(a.J, "loading");
            nb(b, {
                format: "JSON",
                onError: function(a, b) {
                    var e = O("ERROR_OCCURRED");
                    b && b.errors && (e = b.errors[0]);
                    this.showError(e, l)
                },
                V: function() {
                    z(this.J, "loading")
                },
                D: a
            });
            X("/playlist_bar_ajax", b)
        }
        p.ja = function() {
            return this.j.ja()
        };

        function zl(a) {
            var b = a.j.Ea();
            Ak([]);
            var c = zk();
            Va(c, b);
            Ak(c);
            b = new Ok;
            c = a.j.ja();
            b.b = c;
            b.qa = a.j.qa;
            ml(a, b)
        }

        function Bl(a, b, c, d) {
            var e = L("EVENT_ID");
            e && (e = {
                ei: e
            }, c && (e.feature = c), a.j.da() && (e.shuffle = a.j.qa), d && (e.playnext = a.j.gb), wg(b, e));
            if (L("WATCH_CONTEXT_CLIENTSIDE") && (a = Le(b, "v")))(b = Mi()) && ti("context-" + a, b, 600)
        };
        var El = m,
            Fl = n;

        function Gl() {
            if (!El) {
                var a = E("playlist-bar") || E("watch7-playlist-bar");
                if (a) {
                    var b;
                    if (B(a, "active")) {
                        b = P(a, "list-type") || "";
                        if ("QL" == b) b = new Ok(l);
                        else {
                            var c = P(a, "list-id") || "",
                                d = (P(a, "video-ids") || "").split(","),
                                e = 0,
                                f = P(a, "list-length");
                            f && (e = parseInt(f, 10));
                            b = Qk(b, c, d, e)
                        }
                        c = parseInt(P(a, "index-offset"), 10) || 0;
                        b.Lb = c;
                        b.b = parseInt(L("PLAYLIST_BAR_PLAYING_INDEX"), 10) || 0;
                        b.gb = parseInt(L("LIST_AUTO_PLAY_VALUE"), 10) || 0;
                        c = 0;
                        L("SHUFFLE_ENABLED") && (c = yk());
                        b.qa = c
                    } else b = new Ok(l);
                    c = P(a, "video-url");
                    b.ub =
                        c || "";
                    c = B(a, "editable");
                    b.ta = c;
                    if (c = E("playlist-bar-title") || E("watch7-playlist-bar-title")) b.rb = c.innerHTML;
                    if (c = E("playlist-bar-extras-menu")) b.qb = c.innerHTML;
                    El = new ll(a, b)
                }
            }
            return El
        }

        function Hl(a, b) {
            var c = Gl();
            if (ol(c)) {
                var d = b || "mr_meh";
                0 < a ? (Cl(c, a), N(function() {
                    Hl(a - 1, d)
                }, 1E3)) : xl(c, n, d)
            }
        }

        function Il(a, b, c, d, e, f) {
            if (Fl) {
                var h = Gl();
                if (h) {
                    var j = f || [];
                    a = Qk(a, b, d || m, e || 0);
                    b = l;
                    h.Ca() && (b = h.j.isEqual(a));
                    b ? (ml(h, a, function() {
                        h.ic(j);
                        Al(h, c, n, l)
                    }), nl(h)) : Al(h, c, n, l)
                }
            }
        }

        function Jl(a) {
            var b = L("LIST_END_TIME");
            b || (b = a.getDuration());
            for (var c = 5; 0 < c; c--) a.addCueRange("NEAR_END" + c, b - c, b - c + 1);
            a.addEventListener("onCueRangeEnter", "yt.www.lists.handleNearPlaybackEnd")
        }

        function Kl() {
            var a = Gl();
            if (!Fl || !a || !a.Ca()) return n;
            a = Gl().Da();
            return !Pa(xk, a)
        };

        function Ll(a) {
            var b = {
                    video_ids: a.pd,
                    playlist_id: a.Ze || "",
                    new_playlist_name: a.rd || "",
                    session_token: M("addto_ajax")
                },
                c = L("PLAYBACK_ID");
            c && (b.plid = c);
            c = {};
            a.qd && (c["private"] = a.qd);
            a.Bc && (c.feature = a.Bc);
            var d = "";
            switch (a.od) {
                case "PL":
                    d = a.rd ? "action_add_to_new_playlist" : "action_add_to_playlist";
                    break;
                case "FL":
                    d = "action_add_to_favorites";
                    break;
                case "WL":
                    d = "action_add_to_watch_later_list"
            }
            c[d] = 1;
            X("/addto_ajax", {
                yb: l,
                format: "XML",
                method: "POST",
                A: c,
                F: b,
                D: a.D,
                onError: a.onError,
                o: a.o
            })
        };
        var Ml = {
            Nh: "activedescendant",
            Oh: "atomic",
            Ph: "autocomplete",
            Qh: "busy",
            Sh: "checked",
            Uh: "controls",
            Vh: "describedby",
            Wh: "disabled",
            Xh: "dropeffect",
            Yh: "expanded",
            bk: "flowto",
            ck: "grabbed",
            dk: "haspopup",
            ek: "hidden",
            fk: "invalid",
            Pd: "label",
            gk: "labelledby",
            hk: "level",
            ik: "live",
            jk: "multiline",
            kk: "multiselectable",
            mk: "orientation",
            nk: "owns",
            pk: "posinset",
            qk: "pressed",
            rk: "readonly",
            sk: "relevant",
            tk: "required",
            uk: "selected",
            vk: "setsize",
            wk: "sort",
            yk: "valuemax",
            zk: "valuemin",
            Ak: "valuenow",
            Bk: "valuetext"
        };
        var Nl = !!window.DOMTokenList,
            Ol = Nl ? function(a) {
                return a.classList
            } : function(a) {
                a = a.className;
                return ga(a) && a.match(/\S+/g) || []
            },
            Pl = Nl ? function(a, b) {
                return a.classList.contains(b)
            } : function(a, b) {
                return Pa(Ol(a), b)
            },
            Ql = Nl ? function(a, b) {
                a.classList.add(b)
            } : function(a, b) {
                Pl(a, b) || (a.className += 0 < a.className.length ? " " + b : b)
            },
            Rl = Nl ? function(a, b) {
                a.classList.remove(b)
            } : function(a, b) {
                Pl(a, b) && (a.className = Ja(Ol(a), function(a) {
                    return a != b
                }).join(" "))
            };

        function Sl() {}
        ba(Sl);
        Sl.prototype.b = 0;
        Sl.getInstance();

        function Tl(a) {
            this.g = a || Sb()
        }
        w(Tl, Uh);
        p = Tl.prototype;
        p.cg = Sl.getInstance();
        p.Id = m;
        p.za = n;
        p.fa = m;
        p.nb = m;
        p.hc = m;
        p.Ib = m;
        p.cd = n;
        p.getId = function() {
            return this.Id || (this.Id = ":" + (this.cg.b++).toString(36))
        };
        p.G = function() {
            return this.fa
        };
        p.Uc = function(a) {
            this.nb && this.nb != a && g(Error("Method not supported"));
            Tl.L.Uc.call(this, a)
        };
        p.zd = function() {
            this.fa = this.g.createElement("div")
        };
        p.kb = function(a) {
            this.za && g(Error("Component already rendered"));
            this.fa || this.zd();
            a ? a.insertBefore(this.fa, m) : this.g.b.body.appendChild(this.fa);
            (!this.nb || this.nb.za) && this.tb()
        };
        p.vc = function(a) {
            this.fa = a
        };
        p.tb = function() {
            this.za = l;
            Ul(this, function(a) {
                !a.za && a.G() && a.tb()
            })
        };
        p.Cb = function() {
            Ul(this, function(a) {
                a.za && a.Cb()
            });
            if (this.z) {
                var a = this.z;
                x(a.b, Qh);
                a.b.length = 0
            }
            this.za = n
        };
        p.W = function() {
            Tl.L.W.call(this);
            this.za && this.Cb();
            this.z && (this.z.ra(), delete this.z);
            Ul(this, function(a) {
                a.ra()
            });
            !this.cd && this.fa && fc(this.fa);
            this.nb = this.fa = this.Ib = this.hc = m
        };

        function Ul(a, b) {
            a.hc && x(a.hc, b, k)
        }
        p.removeChild = function(a, b) {
            if (a) {
                var c = ga(a) ? a : a.getId();
                a = this.Ib && c ? (c in this.Ib ? this.Ib[c] : k) || m : m;
                if (c && a) {
                    var d = this.Ib;
                    c in d && delete d[c];
                    Ra(this.hc, a);
                    b && (a.Cb(), a.fa && fc(a.fa));
                    c = a;
                    c == m && g(Error("Unable to set parent component"));
                    c.nb = m;
                    Tl.L.Uc.call(c, m)
                }
            }
            a || g(Error("Child is not in parent component"));
            return a
        };

        function Vl(a, b) {
            this.g = b || Sb();
            this.e = a || ""
        }
        w(Vl, Tl);
        Vl.prototype.i = m;
        var Wl = "placeholder" in document.createElement("input");
        p = Vl.prototype;
        p.Db = n;
        p.zd = function() {
            this.fa = this.g.Xd("input", {
                type: "text"
            })
        };
        p.vc = function(a) {
            Vl.L.vc.call(this, a);
            this.e || (this.e = a.getAttribute("label") || "");
            var b;
            a: {
                var c = Ub(a);
                try {
                    b = c && c.activeElement;
                    break a
                } catch (d) {}
                b = m
            }
            b == a && (this.Db = l, Rl(this.G(), "label-input-label"));
            Wl ? this.G().placeholder = this.e : this.G().setAttribute("aria-" + Ml.Pd, this.e)
        };
        p.tb = function() {
            Vl.L.tb.call(this);
            var a = new Zk(this);
            al(a, this.G(), "focus", this.sd);
            al(a, this.G(), "blur", this.Af);
            Wl ? this.b = a : (zb && al(a, this.G(), ["keypress", "keydown", "keyup"], this.Bf), al(a, Ub(this.G()) ? Ub(this.G()).parentWindow || Ub(this.G()).defaultView : window, "load", this.Cf), this.b = a, Xl(this));
            Yl(this);
            this.G().e = this
        };
        p.Cb = function() {
            Vl.L.Cb.call(this);
            this.b && (this.b.ra(), this.b = m);
            this.G().e = m
        };

        function Xl(a) {
            !a.H && (a.b && a.G().form) && (al(a.b, a.G().form, "submit", a.Zf), a.H = l)
        }
        p.W = function() {
            Vl.L.W.call(this);
            this.b && (this.b.ra(), this.b = m)
        };
        p.sd = function() {
            this.Db = l;
            Rl(this.G(), "label-input-label");
            if (!Wl && !Zl(this) && !this.T) {
                var a = this,
                    b = function() {
                        a.G().value = ""
                    };
                D ? dl(b) : b()
            }
        };
        p.Af = function() {
            Wl || (bl(this.b, this.G(), "click", this.sd), this.i = m);
            this.Db = n;
            Yl(this)
        };
        p.Bf = function(a) {
            27 == a.keyCode && ("keydown" == a.type ? this.i = this.G().value : "keypress" == a.type ? this.G().value = this.i : "keyup" == a.type && (this.i = m), a.preventDefault())
        };
        p.Zf = function() {
            Zl(this) || (this.G().value = "", dl(this.Jg, this))
        };
        p.Jg = function() {
            Zl(this) || (this.G().value = this.e)
        };
        p.Cf = function() {
            Yl(this)
        };

        function Zl(a) {
            return !!a.G() && "" != a.G().value && a.G().value != a.e
        }
        p.clear = function() {
            this.G().value = "";
            this.i != m && (this.i = "")
        };

        function Yl(a) {
            Wl ? a.G().placeholder != a.e && (a.G().placeholder = a.e) : (Xl(a), a.G().setAttribute("aria-" + Ml.Pd, a.e));
            if (Zl(a)) b = a.G(), Rl(b, "label-input-label");
            else {
                if (!a.T && !a.Db) {
                    var b = a.G();
                    Ql(b, "label-input-label")
                }
                Wl || dl(a.lg, a)
            }
        }
        p.lg = function() {
            this.G() && (!Zl(this) && !this.Db) && (this.G().value = this.e)
        };

        function $l(a, b, c) {
            this.b = a;
            this.X = b;
            X("/playlist_ajax", {
                A: {
                    action_get_addto_panel: 1,
                    video_id: this.X
                },
                o: function(a, b) {
                    am(this, b.html);
                    c()
                },
                D: this
            })
        }
        p = $l.prototype;
        p.ra = function() {
            bm(this)
        };

        function am(a, b) {
            a.b.innerHTML = b;
            a.ia = K("sort-playlists", a.b);
            a.g = K("playlist-items", a.b);
            a.N = K("added-to-message", a.b);
            a.H = K("added-to-message-title", a.b);
            a.ze = K("note-added-message", a.b);
            a.ye = K("note-added-message-title", a.b);
            a.i = K("create-playlist", a.b);
            if (a.i) {
                a.e = K("new-playlist-title", a.b);
                var c = a.e.getAttribute("placeholder"),
                    c = new Vl(c),
                    d = a.e;
                c.za && g(Error("Component already rendered"));
                if (d) {
                    c.cd = l;
                    if (!c.g || c.g.b != Ub(d)) c.g = Sb(d);
                    c.vc(d);
                    c.tb()
                } else g(Error("Invalid element to decorate"));
                a.Ob = K("create-new-playlist", a.b)
            }
            a.Ae = Q(a.ia, "change", t(a.Be, a));
            a.ba = Q(a.i, "submit", t(a.Fe, a));
            a.k = S(a.b, "click", t(a.De, a), "playlist-item-favorite");
            a.z = S(a.b, "click", t(a.Ee, a), "playlist-item");
            a.Ma = S(a.b, "click", t(a.He, a), "save-note");
            a.T = S(a.b, "click", t(a.Ce, a), "cancel-note");
            a.ab = Q(a.e, "keyup", t(a.Ge, a));
            ph()
        }

        function bm(a) {
            yd(a.Ae);
            yd(a.ba);
            yd(a.k);
            yd(a.z);
            yd(a.Ma);
            yd(a.T);
            yd(a.ab)
        }
        p.Be = function(a) {
            a = {
                created: this.Fg,
                privacy: this.Gg,
                "a-z": this.Yd,
                "z-a": this.Hg
            } [a.currentTarget.value];
            var b = Ua(G("playlist-item", this.g)),
                c = K("playlist-item-favorite", this.g);
            b.push(c);
            a = b.sort(t(a, this));
            var d = document.createDocumentFragment();
            x(a, function(a) {
                d.appendChild(a)
            });
            ec(this.g);
            dc(this.g, d)
        };
        p.Gg = function(a, b) {
            var c = P(a, "is-private") || "",
                d = P(b, "is-private") || "";
            return va(c, d)
        };
        p.Fg = function(a, b) {
            function c(a) {
                return gd(a, "time-created") ? (a = P(a, "time-created"), parseInt(a, 10)) : (new Date).getTime() / 1E3
            }
            return c(b) - c(a)
        };
        p.Yd = function(a, b) {
            var c = P(a, "title") || "",
                d = P(b, "title") || "";
            return va(c, d)
        };
        p.Hg = function(a, b) {
            return this.Yd(b, a)
        };
        p.Fe = function(a) {
            a.preventDefault();
            var b = K("create-playlist", this.b);
            ta(this.e.value) || (y(b, "loading"), Qf(b, {
                D: this,
                o: function(a, d) {
                    z(b, "loading");
                    d.html ? (bm(this), am(this, d.html)) : d.errors && cm(this, d.errors[0])
                }
            }))
        };

        function cm(a, b) {
            var c = K("added-to-error-message", a.b);
            K("yt-alert-content", c).innerHTML = b;
            T(c)
        }
        p.De = function(a) {
            a.stopPropagation();
            var b = a.currentTarget;
            y(b, "loading");
            X("/addto_ajax", {
                method: "POST",
                format: "XML",
                A: {
                    action_add_to_favorites: 1
                },
                F: {
                    video_ids: this.X,
                    session_token: M("addto_ajax"),
                    plid: L("PLAYBACK_ID")
                },
                D: this,
                o: function(a, d) {
                    z(b, "loading");
                    dm(this, b);
                    em(b);
                    "True" == d.show_feed_privacy_dialog && W("SHOW-FAVORITE-DIALOG", this.X)
                },
                onError: function(a, d) {
                    z(b, "loading");
                    cm(this, d.error_message)
                }
            })
        };
        p.Ee = function(a) {
            var b = a.currentTarget;
            if (!B(b, "selected")) {
                a.stopPropagation();
                fm(this);
                a = P(b, "playlist-id");
                var c = E("playlist-addto-top-checkbox").checked ? "True" : "False";
                y(b, "loading");
                X("/addto_ajax", {
                    method: "POST",
                    format: "XML",
                    A: {
                        action_add_to_playlist: 1
                    },
                    F: {
                        playlist_id: a,
                        video_ids: this.X,
                        session_token: M("addto_ajax"),
                        plid: L("PLAYBACK_ID"),
                        add_to_top: c
                    },
                    D: this,
                    o: function(a, c) {
                        this.ud = c.setvideo_id;
                        z(b, "loading");
                        y(b, "selected");
                        dm(this, b);
                        em(b)
                    }
                })
            }
        };

        function em(a) {
            a = K("playlist-video-count", a);
            a.innerHTML = parseInt(a.innerHTML, 10) + 1
        }
        p.He = function(a) {
            a.preventDefault();
            var b = uc(a.currentTarget, "playlist-note-form");
            y(b, "loading");
            Qf(b, {
                F: {
                    session_token: M("playlist_bar_ajax"),
                    setvideo_id: this.ud
                },
                D: this,
                o: function() {
                    fm(this);
                    z(b, "loading");
                    var a = K("playlist-name", b);
                    this.ye.innerHTML = a.value;
                    a = this.ze;
                    this.Gb && U(this.Gb);
                    this.Gb = a;
                    T(a)
                },
                onError: function(a, d) {
                    z(b, "loading");
                    cm(this, d.errors[0])
                }
            })
        };
        p.Ce = function() {
            fm(this)
        };

        function fm(a) {
            var b = K("selected", a.b);
            b && (z(b, "selected"), a.ud = m)
        }

        function dm(a, b) {
            a.H.innerHTML = P(b, "title");
            var c = a.N;
            a.Gb && U(a.Gb);
            a.Gb = c;
            T(c);
            W("PLAYLIST_UPDATED")
        }
        p.Ge = function() {
            this.Ob.disabled = ta(this.e.value)
        };

        function gm(a, b, c, d, e, f, h) {
            this.u = a;
            this.z = b;
            this.H = c;
            this.xc = d;
            this.b = !isNaN(parseInt(e, 10));
            this.cb = m;
            this.b && (this.cb = e);
            this.k = f || {};
            this.e = !!h;
            window.__GOOGLEAPIS = window.__GOOGLEAPIS || {};
            window.__GOOGLEAPIS.gwidget = window.__GOOGLEAPIS.gwidget || {};
            window.__GOOGLEAPIS.gwidget.lang = this.xc;
            this.b && (window.__GOOGLEAPIS["googleapis.config"] = window.__GOOGLEAPIS["googleapis.config"] || {}, window.__GOOGLEAPIS["googleapis.config"].sessionIndex = this.cb);
            fg("https://web.archive.org/web/20121218011521/https://apis.google.com/js/plusone.js", t(this.i,
                this))
        }
        gm.prototype.i = function() {
            var a = s("gapi.plusone.render");
            if (a) {
                var b = Math.floor(1E4 * Math.random()),
                    c = "__PLUS_ONE_CALLBACK_" + b,
                    d = this.u.id;
                d || (d = "plusone-button-" + b, this.u.id = d);
                window[c] = t(this.g, this);
                b = {
                    callbackName: c,
                    count: "false",
                    href: this.H,
                    size: "medium",
                    source: "google:youtube"
                };
                this.e && (b.db = 1);
                nb(b, this.k);
                T(this.u);
                a(d, b)
            }
        };
        gm.prototype.g = function(a) {
            "off" != a.state && (Cg("PLUS_ONE", this.z + ""), this.e && ih(Qe("https://web.archive.org/web/20121218011521/https://plus.google.com/share", {
                url: a.url,
                source: "google:youtube"
            }), {
                width: 480,
                height: 550
            }))
        };

        function hm(a) {
            var b = E("insight-optout-form");
            b && Qf(b, {
                format: "XML",
                A: {
                    opt_out: a
                },
                o: function() {
                    var b = E("insight-public");
                    C(E("insight-private"), "selected", a);
                    C(b, "selected", !a)
                },
                V: function(a, b) {
                    E("insight-optout-response").innerHTML = "error_message" in b ? b.error_message : ""
                }
            })
        };

        function im(a, b, c) {
            var d = {};
            0 === b ? d.action_like_video = 1 : 1 === b ? d.action_dislike_video = 1 : d.action_indifferent_video = 1;
            d.video_id = a;
            d.plid = c.ug;
            a = {
                screen: Pe({
                    h: screen.height,
                    w: screen.width,
                    d: screen.colorDepth
                }),
                session_token: M("watch_actions_ajax")
            };
            c.Ud && (a.station_id = c.Ud);
            X("/watch_actions_ajax", {
                format: "XML",
                method: "POST",
                A: d,
                F: a,
                o: c.o,
                onError: c.onError,
                V: c.V
            });
            0 === b ? kh("like") : 1 === b && kh("dislike")
        };

        function jm(a, b, c, d) {
            this.C = a;
            this.S = b;
            Q(this.C, "submit", t(this.e, this));
            a = t(this.b, this);
            zd(this.S, "click", a, function(a) {
                return "li" === a.nodeName.toLowerCase() && l
            });
            Q(E("flag-video-cancel"), "click", function(a) {
                a.preventDefault();
                c()
            });
            this.uf = d
        }
        jm.prototype.b = function(a) {
            var b;
            a = a.currentTarget;
            var c = Og.getInstance(),
                d = Wg(c, this.S);
            Rg(c, d);
            c = K(Y(c, "content"), d);
            d = K("label", a);
            c.innerHTML = pc(d);
            c = G("selected", this.S);
            x(c, function(a) {
                z(a, "selected", "child-selected")
            });
            y(a, "selected");
            d = "";
            if (c = P(a, "subreason") || "") {
                var e = sc(a.parentNode, "li"),
                    d = P(e, "reason") || "";
                y(e, "selected", "child-selected")
            } else d = P(a, "reason") || "";
            b = d;
            var d = P(a, "show-textbox-with-label"),
                e = !!P(a, "include-time"),
                f = !!P(a, "show-hate-group"),
                h = P(a, "popup-url"),
                j = P(a, "result-message") ||
                "default";
            a = !!P(a, "no-post");
            this.C.reason.value = b;
            this.C.sub_reason.value = c;
            c = E("flag-video-more-info-comment");
            d && (E("flag-video-more-info-textarea-label").innerHTML = d);
            qe(c, !!d);
            qe(E("flag-video-more-info-time"), e);
            qe(E("flag-video-more-info-hate-group"), f);
            h && hh(h, {
                target: "atmfc",
                width: 900,
                height: 700,
                left: 0,
                top: 0,
                status: "yes",
                toolbar: "no",
                menubar: "no",
                location: "no",
                scrollbars: "yes"
            });
            a ? (U(this.C), km(j)) : (dd(this.C, "result-message", j), T(this.C))
        };
        jm.prototype.e = function(a) {
            a.preventDefault();
            var b = E("flag-video-submit");
            b.disabled = l;
            var c = P(this.C, "result-message");
            X(this.C.action, {
                format: "XML",
                method: "POST",
                Sa: Dc(this.C),
                o: function() {
                    km(c);
                    this.uf.call(r)
                },
                onError: function(a, c) {
                    lm();
                    var f = E("flag-video-error");
                    c && c.error_message && (K("yt-alert-content", f).innerHTML = c.error_message);
                    T(f);
                    b.disabled = n
                },
                D: this
            })
        };

        function km(a) {
            lm();
            U("flag-video-form-container");
            T("flag-video-result-" + a)
        }

        function lm() {
            var a = G("flag-video-result", E("flag-video-results-container"));
            x(a, function(a) {
                U(a)
            })
        };
        var mm, nm, om = -1;

        function pm() {
            if (qm()) {
                Yc(om);
                var a = rm(),
                    b = "small";
                x(["small", "medium", "large"], function(c) {
                    B(a, c) && (b = c)
                });
                tm({
                    small: 112,
                    medium: 384,
                    large: 597
                } [b])
            }
        }

        function um() {
            qm() && (om = N(function() {
                tm(0)
            }, 50))
        }

        function qm() {
            var a;
            if (a = E("movie_player")) nm || (nm = E("watch-player") || E("watch7-player")), a = nm && ad && 8 >= document.documentMode;
            return a
        }

        function tm(a) {
            var b = E("movie_player"),
                c = rm();
            "rtl" == document.body.getAttribute("dir") ? (c.style.left = a + "px", b.style.right = a + "px") : (c.style.right = a, b.style.left = a)
        }

        function rm() {
            mm || (mm = E("watch-video") || E("watch7-video"));
            return mm
        };
        var vm = -1;

        function wm(a) {
            a = !!a;
            var b = E("page"),
                c = E("watch-sidebar") || E("watch7-sidebar"),
                d = jh(c);
            a ? (y(b, "watch-wide"), N(function() {
                xm()
            }, d)) : (d /= 2, xm("small"), N(function() {
                z(b, "watch-wide")
            }, d), Ej(c));
            qe("masthead-utility-menulink-short", a);
            qe("masthead-utility-menulink-long", !a)
        }

        function xm(a) {
            var b = E("watch-video") || E("watch7-video");
            if (!B(E("page"), "watch-wide") || "small" == a) z(b, "medium", "large");
            else {
                var c = Wb(window),
                    c = !!(1400 <= c.width && 1040 <= c.height);
                L("ENABLE_AUTO_LARGE") && (c || "large" == a) ? A(b, "medium", "large") : A(b, "large", "medium")
            }
        }

        function ym(a, b, c, d) {
            var e = E("watch-description-extra-info");
            if (e) {
                var f = K("likes", e);
                f && (f.innerHTML = a);
                if (a = K("dislikes", e)) a.innerHTML = b;
                if (b = K("watch-sparkbar-likes", e)) b.style.width = c + "%";
                if (c = K("watch-sparkbar-dislikes", e)) c.style.width = d + "%"
            }
        }

        function zm() {
            return L("PLAYER_REFERENCE")
        }

        function Am(a) {
            sc(a.target, "BUTTON") || a.currentTarget.click()
        };
        var Bm, Cm;

        function Dm() {
            var a = E("watch-like-unlike");
            return B(a, "liked") ? 0 : B(a, "unliked") ? 1 : 2
        }

        function Em(a) {
            var b = E("watch-like-unlike"),
                b = G(Y(Og.getInstance()), b);
            x(b, function(b) {
                B(b, "yt-always-enabled") || (b.disabled = !a)
            })
        }

        function Fm(a) {
            if (!L("LOGGED_IN")) {
                var b = "rating-enabled=" + L("ALLOW_RATINGS");
                0 === a ? Ag("logged-out-like", b, k) : 1 === a && Ag("logged-out-dislike", b, k)
            }
            if (L("ALLOW_RATINGS")) {
                if (b = !Gm()) L("YPC_CAN_RATE_VIDEO") ? b = n : (Hm("watch-actions-rental-required"), b = l), b = !b;
                if (b)
                    if (L("YPC_SHOW_VPPA_CONFIRM_RATING") && !confirm(O("VPPA_CONFIRM"))) Im();
                    else {
                        2 !== a && Jm();
                        Em(n);
                        Km(a);
                        var c = L("VIDEO_ID"),
                            b = b = {
                                ug: L("PLAYBACK_ID"),
                                Ud: L("STATION_ID"),
                                o: function(b, e) {
                                    var f = E("watch-like-unlike");
                                    0 === a ? (A(f, "unliked", "liked"), "True" ==
                                        e.show_feed_privacy_dialog && W("SHOW-LIKE-DIALOG", c)) : 1 === a ? A(f, "liked", "unliked") : z(f, "liked", "unliked");
                                    2 !== a && (Lm(e.html_content), Ej(E("watch-actions-ajax")));
                                    Km(a)
                                },
                                onError: Mm,
                                V: function() {
                                    Em(l)
                                }
                            };
                        Vf("watch_actions_ajax", t(im, r, c, a, b), b.onError)
                    }
            } else Hm("watch-actions-ratings-disabled")
        }

        function Km(a) {
            var b = E("watch-like-hovercard-plusone-liked"),
                c = E("watch-like-hovercard-plusone-not-liked");
            b && c && (0 === a ? (y(b, "hid"), z(c, "hid")) : (z(b, "hid"), y(c, "hid")))
        }

        function Nm(a, b) {
            var c = a || E("watch-flag");
            if (Om(c) && !Gm()) {
                Jm();
                var d = 0,
                    e = zm();
                e && e.pauseVideo && (e.pauseVideo(), d = e.getCurrentTime());
                d = Math.floor(d);
                e = Math.floor(d / 60);
                d = {
                    action_get_flag_video_component: 1,
                    video_id: L("VIDEO_ID"),
                    t_mins: e,
                    t_secs: d - 60 * e
                };
                b && (d.from_dislike = 1);
                X("/watch_ajax", {
                    format: "XML",
                    method: "GET",
                    A: d,
                    o: function(a, b) {
                        Lm(b.html_content);
                        var d = E("flag-video-form"),
                            e = E("flag-video-menu");
                        d && e && new jm(d, e, function() {
                            Im()
                        }, function() {
                            c.disabled = l
                        })
                    },
                    onError: Mm
                })
            }
        }
        var Pm = m,
            Qm = m;

        function Rm() {
            if (Kl()) var a = Sm("watch-actions-share"),
                a = K("yt-uix-button-toggled", a),
                a = P(a, "video-id");
            else a = L("VIDEO_ID");
            return a
        }

        function Tm() {
            var a = m;
            Kl() && E("share-with-playlist").checked && (a = Fl ? Gl().Va() : m);
            return a
        }

        function Um(a, b) {
            if (Om(a)) {
                var c = Rm(),
                    d = Tm();
                Vm(c, d, b)
            }
        }

        function Vm(a, b, c) {
            var d = Sm("watch-actions-share-panel");
            a != Pm || b != Qm ? (Pm = a, Qm = b, Hm("watch-actions-share"), T("watch-actions-share-loading"), W("watch-actions-player-sidebar-height-changed"), U("watch-actions-share-panel"), Bm = new uh(d, a, b, function() {
                U("watch-actions-share-loading");
                Hm("watch-actions-share-panel")
            }, 0, 0, n, "player_detailpage")) : (Hm("watch-actions-share"), Hm("watch-actions-share-panel"), Bm.xa(), W("watch-actions-player-sidebar-height-changed"));
            c ? Ag("shareOpenedFromFlash", k, k) : Ag("shareOpenedFromActionBar",
                k, k);
            var e = zm(),
                f = Xc(function() {
                    var a = B(E("watch-share"), "active");
                    if (!e || !a) Zc(f);
                    else {
                        for (var a = [], b = Math.floor(e.getCurrentTime()); 0 < b;) a.unshift(b % 60), b = Math.floor(b / 60);
                        for (; 2 > a.length;) a.unshift(0);
                        a = Ka(a, function(a, b) {
                            return 0 < b && 10 > a ? "0" + a : a
                        });
                        a = a.join(":");
                        b = Bm;
                        b.ga && (!B(b.ga, "focused") && !b.T) && (b.ga.value = a, b.Xb())
                    }
                }, 1E3);
            kh("share")
        }

        function Om(a) {
            var b = !B(a, "active");
            Im();
            b && (y(a, "active"), ch(ah.getInstance(), a));
            return b
        }

        function Jm() {
            Hm("watch-actions-loading");
            W("watch-actions-player-sidebar-height-changed")
        }

        function Lm(a) {
            Sm("watch-actions-ajax").innerHTML = a;
            Hm("watch-actions-ajax")
        }

        function Mm(a, b) {
            var c = b && (b.error_message || b.errors && b.errors[0]);
            c || (c = O("WATCH_ERROR_MESSAGE"));
            Sm("watch-error-string").innerHTML = c;
            Hm("watch-actions-error")
        }
        var Wm = {};

        function Sm(a) {
            a in Wm || (Wm[a] = E(a));
            return Wm[a]
        }

        function Hm(a) {
            var b = Sm("watch-actions-area-container");
            a = Sm(a);
            var c = Sm("watch-actions-loading"),
                d = Sm("watch-actions-area");
            re(b) || (b.style.height = "0px", T(b));
            U(c);
            T(a);
            y(b, "transitioning");
            var e = d.offsetHeight + "px";
            N(function() {
                b.style.height = e;
                W("watch-actions-player-sidebar-height-changed")
            }, 0);
            N(function() {
                b.style.height == e && (z(b, "transitioning"), b.style.height = "auto")
            }, 500)
        }

        function Im() {
            var a = Sm("watch-actions-area-container");
            U(a);
            a = G("watch-actions-panel", a);
            x(a, function(a) {
                U(a)
            });
            W("watch-actions-player-sidebar-height-changed");
            Sm("watch-actions-ajax").innerHTML = "";
            var a = Sm("watch-actions"),
                b = Sm("watch-subactions"),
                a = J("button", m, a);
            b && (b = J("button", m, b), Va(Ua(a), Ua(b)));
            x(a, function(a) {
                z(a, "active")
            })
        }

        function Gm() {
            return !L("LOGGED_IN") ? (Hm("watch-actions-logged-out"), l) : n
        };
        var Xm, Ym, Zm;

        function $m(a) {
            this.b = a;
            this.S = E("shared-addto-menu");
            this.g = P(this.b, "feature") || "";
            this.k = B(this.b, "watch");
            this.i = P(this.b, "video-ids") || "";
            this.P = this.i.split(",");
            da(Zm) || (Zm = B(this.S, "lightweight-panel"));
            (a = K("sign-in", this.S)) ? Q(a, "click", t(this.$e, this)): (a = {
                action_get_dropdown: "1"
            }, this.g && (a.feature = this.g), X("/addto_ajax", {
                yb: l,
                format: "XML",
                method: "GET",
                D: this,
                A: a,
                o: function(a, c) {
                    this.S.innerHTML = c.html_content || "";
                    C(this.S, "ie", D);
                    this.Qa();
                    var d = [];
                    Va(d, G("playlist-name", this.B.list));
                    x(d, function(a) {
                        function b(a) {
                            var c = [],
                                d;
                            for (d = 0; d < a.length; d++) c.push(a[d]), H[d] && c.push(H[d]);
                            H[d] && H[d].match(/^<\s*\//) && c.push(H[d]);
                            c = c.join("");
                            return c.length < v.length ? c + "&hellip;" : c
                        }
                        var c = E(a),
                            d, q = E(c);
                        d = ld(q);
                        c.parentNode.appendChild(d);
                        d.style.whiteSpace = "normal";
                        d.style.lineHeight = "1.5em";
                        var v = P(q, "original-html");
                        v || (v = q.innerHTML.replace(/^\s+|\s+$/, ""), dd(q, "original-html", v));
                        for (var q = /<[^>]+>/g, H = v.match(q) || [], q = v.replace(q, "<wbr>").split("<wbr>"), F = d.innerHTML, I = "", R = 0; 1 > R; R++) I +=
                            "&nbsp;<br>";
                        d.innerHTML = I;
                        I = d.clientHeight || d.offsetHeight;
                        d.innerHTML = F;
                        for (var F = 0, R = q.join("").length + 1, Ea = []; F < R;) {
                            var ra = F + Math.round((R - F) / 2),
                                $;
                            $ = ra;
                            for (var Oa = [], qc = 0, Ap = q.length; qc < Ap && 0 < $; qc++) {
                                var sm = q[qc];
                                Oa.push(sm.substring(0, $));
                                $ -= sm.length
                            }
                            $ = Oa;
                            d.innerHTML = b($);
                            Oa = (d.clientHeight || d.offsetHeight) <= I;
                            d.innerHTML = "";
                            Oa ? (Ea = $, F = ra + 1) : R = ra - 1
                        }
                        fc(d);
                        d = b(Ea);
                        q = c.innerHTML != d;
                        c.innerHTML = d;
                        q && (a = uc(a, "yt-uix-button-menu-item"), a.title = P(a, "possible-tooltip"))
                    })
                }
            }))
        }
        p = $m.prototype;
        p.Qa = function() {
            this.B = {};
            this.B.list = E("addto-list-panel");
            this.B.Nc = E("addto-list-saved-panel");
            this.B.cc = E("addto-list-error-panel");
            this.B.Fa = E("addto-note-input-panel");
            this.B.yd = E("addto-note-saving-panel");
            this.B.Nd = E("addto-note-saved-panel");
            this.B.Pc = E("addto-note-error-panel");
            this.B.wa = E("addto-create-panel");
            this.e = this.B.list;
            S(this.B.list, "click", t(this.fg, this), "yt-uix-button-menu-item");
            this.Ub = K("playlist-save-note", this.B.Fa);
            Q(this.Ub, "click", t(this.gg, this));
            var a = K("close-button",
                this.S);
            Q(a, "click", t(this.eg, this))
        };
        p.fg = function(a) {
            a.stopPropagation();
            var b = a.currentTarget;
            ch(ah.getInstance(), b);
            this.H = n;
            a = P(b, "list-action");
            var c = P(b, "item-id") || "",
                b = P(b, "item-name") || "";
            switch (a) {
                case "create-playlist":
                    an(this, this.B.wa, l);
                    this.Vd = K("addto-create-playlist", this.B.wa);
                    this.Wd = K("addto-create-playlist-label", this.B.wa);
                    this.Ob = K("create-playlist-button", this.B.wa);
                    this.Qc = K("privacy-form", this.B.wa);
                    S(this.Qc, "click", t(this.Rc, this), "playlist-privacy-option");
                    fd(this.S, "video-ids");
                    var d = E("addto-create-playlist");
                    Q(d, "keydown", t(this.Rc, this));
                    Q(d, "paste", t(this.Rc, this));
                    bn(this.B.wa, function() {
                        d.focus()
                    });
                    a = K("addto-create-cancel-button", this.B.wa);
                    Q(a, "click", t(function() {
                        cn(this)
                    }, this));
                    a = K("create-playlist-button", this.B.wa);
                    Q(a, "click", t(this.Ag, this));
                    break;
                case "favorites":
                    this.H = l;
                    dn(this, "FL");
                    en(this, b);
                    break;
                case "watch-later":
                    dn(this, "WL");
                    en(this, b);
                    break;
                case "playlist":
                    dn(this, "PL", c), 1 < this.P.length ? en(this, b) : fn(this, b)
            }
        };

        function en(a, b) {
            K("addto-title", a.B.Nc).innerHTML = b;
            z(a.S, "lightweight-panel");
            an(a, a.B.Nc, l);
            var c = K("close-note", a.S);
            T(c)
        }

        function fn(a, b) {
            K("addto-title", a.B.Fa).innerHTML = xa(b);
            an(a, a.B.Fa, l);
            var c = K("close-note", a.S);
            T(c);
            var d = E("addto-note");
            Q(d, "keydown", t(a.$d, a));
            Q(d, "paste", t(a.$d, a));
            bn(a.B.Fa, function() {
                d.focus()
            })
        }

        function bn(a, b) {
            if (b) {
                var c = Ab ? "webkitTransitionEnd" : yb ? "oTransitionEnd" : zb ? "transitionend" : D && Nb(10) ? "MSTransitionEnd" : m;
                c ? xd(a, c, function() {
                    b()
                }) : b()
            }
        }
        p.$d = function(a) {
            var b = a.target,
                c = K("addto-note-label", this.B.Fa);
            N(t(function() {
                var a = ta(b.value);
                a ? T(c) : U(c);
                !a && this.U && this.Gc ? pd(this.Ub, l) : pd(this.Ub, n)
            }, this), 0)
        };

        function an(a, b, c) {
            c = c ? "slide" : "fade";
            var d = ["fade", "slide"];
            A(a.e, d, c);
            A(b, d, c);
            Zm && b == a.B.list && y(a.S, "lightweight-panel");
            B(b, "dismissed-panel") ? (z(b, "dismissed-panel"), z(a.e, "active-panel")) : cb(a.e, "active-panel", "dismissed-panel");
            y(b, "active-panel");
            a.e = b
        }
        p.Ag = function() {
            var a = this.Vd.value;
            this.qg = l;
            var b = parseInt(Ic(this.Qc), 10);
            dn(this, "PL", m, a, b);
            1 < this.P.length ? cn(this) : fn(this, a)
        };
        p.Rc = function() {
            N(t(function() {
                var a = ta(this.Vd.value);
                a ? T(this.Wd) : U(this.Wd);
                var b = Ic(this.Qc);
                a || !b ? pd(this.Ob, n) : pd(this.Ob, l)
            }, this), 0)
        };
        p.eg = function() {
            cn(this)
        };

        function cn(a) {
            var b = Og.getInstance(),
                c = Wg(b, a.S);
            c && P(c, "video-ids") == a.i && Rg(b, c)
        }

        function dn(a, b, c, d, e) {
            a.z = b;
            Ll({
                pd: a.i,
                od: a.z,
                Ze: c,
                rd: d,
                qd: e,
                Bc: a.g,
                o: a.bf,
                onError: a.af,
                D: a
            });
            fd(a.S, "video-ids");
            b = "";
            switch (a.z) {
                case "PL":
                    b = d ? "new_pl" : "pl";
                    break;
                case "FL":
                    b = "fav";
                    break;
                case "WL":
                    b = "wl"
            }
            d = {
                list: b,
                feature: a.g
            };
            if ((b = sc(a.b, "a", m)) && b.href) b = Ne(b.href), d.link_feature = b.feature || "";
            d = Pe(d);
            Ag("addto", d, k);
            a.k && kh("add_to_playlist")
        }
        p.bf = function(a, b) {
            this.U = b.list_id || "";
            this.Gc = b.setvideo_id || "";
            var c = b.html_content || "",
                d = b.list_url || "";
            if (this.U && this.Gc) {
                var e = K("addto-title", this.S),
                    f = document.createElement("a");
                f.href = d;
                f.innerHTML = e.innerHTML;
                ec(e);
                e.appendChild(f);
                ta(E("addto-note").value) || pd(this.Ub, l)
            }
            if (!this.k && (d = uc(this.b, "ux-thumb-wrap")))(e = K("video-in-quicklist", d)) && fc(e), e = document.createElement("span"), e.className = "video-in-quicklist", e.innerHTML = c, d.appendChild(e);
            c = O("PLAYLIST_BAR_ADDED_TO_PLAYLIST");
            this.H &&
                (c = O("PLAYLIST_BAR_ADDED_TO_FAVORITES"));
            Il(this.z, this.U, c, m, this.P.length, this.P)
        };
        p.af = function(a, b) {
            var c = b && b.error_message;
            if (c) {
                K("error-details", this.B.cc).innerHTML = c;
                var c = K("show-menu-link", this.B.cc),
                    d = Q(c, "click", t(function(a) {
                        a.preventDefault();
                        yd(d);
                        z(this.B.Fa, "dismissed-panel", "fade", "slide");
                        z(this.B.Nc, "dismissed-panel", "fade", "slide");
                        a = K("close-note", this.S);
                        U(a);
                        this.qg ? an(this, this.B.wa, l) : an(this, this.B.list, l)
                    }, this));
                if (c = E("addto-create-name")) c.disabled = n;
                z(this.B.cc, "dismissed-panel", "fade", "slide");
                an(this, this.B.cc)
            } else cn(this);
            this.k && Mm(0, b)
        };
        p.gg = function() {
            X("/playlist_bar_ajax", {
                method: "POST",
                yb: l,
                A: {
                    action_set_playlist_item_annotation: 1
                },
                F: {
                    annotation: E("addto-note").value,
                    playlist_id: this.U,
                    setvideo_id: this.Gc,
                    session_token: M("playlist_bar_ajax")
                },
                o: this.kg,
                onError: this.jg,
                D: this
            });
            an(this, this.B.yd)
        };
        p.kg = function() {
            var a = K("addto-title", this.B.Fa),
                b = ld(a);
            y(b, "yt-uix-tooltip-reverse");
            K("panel-content", this.B.Nd).appendChild(b);
            an(this, this.B.Nd);
            N(t(function() {
                ch(ah.getInstance(), b);
                cn(this)
            }, this), 3E3)
        };
        p.jg = function(a, b) {
            var c = b && b.errors;
            if (c) {
                var d = K("error-details", this.B.Pc);
                ec(d);
                x(c, function(a) {
                    var b = document.createElement("li");
                    b.innerHTML = a;
                    d.appendChild(b)
                });
                var c = K("add-note-link", this.B.Pc),
                    e = Q(c, "click", t(function(a) {
                        a.preventDefault();
                        yd(e);
                        z(this.B.yd, "dismissed-panel");
                        an(this, this.B.Fa)
                    }, this));
                an(this, this.B.Pc)
            } else cn(this)
        };
        p.$e = function() {
            var a = Se("/addto_ajax", {
                    action_redirect_to_signin_with_add: 1,
                    list_type: "WL",
                    video_ids: this.i,
                    next_url: document.location
                }),
                b = document.createElement("form");
            b.action = a;
            b.method = "POST";
            a = document.createElement("input");
            a.type = "hidden";
            a.name = "session_token";
            a.value = M("addto_ajax_logged_out");
            b.appendChild(a);
            document.body.appendChild(b);
            b.submit()
        };
        var gn = n;

        function hn(a, b, c) {
            this.z = a;
            this.g = b;
            this.k = c;
            this.e = E("logo");
            this.H = je(this.e).width;
            a = J("map", m, E("logo-container"))[0];
            Q(a, "mouseover", t(this.Xf, this));
            Q(a, "mouseout", t(this.Wf, this));
            setTimeout(t(this.Yf, this), this.k)
        }
        var jn = 1E3 / 30;
        p = hn.prototype;
        p.Wb = n;
        p.Hc = n;
        p.Kc = n;
        p.Xf = function() {
            this.Kc = l;
            !this.Wb && this.Hc && this.Ec()
        };
        p.Wf = function() {
            this.Kc = n;
            !this.Wb && this.Hc && (clearTimeout(this.i), this.b = m, we(this.e, "0px 0"))
        };
        p.Ec = function() {
            this.i = setTimeout(t(this.Ec, this), jn);
            var a = pa();
            this.b = this.b || a;
            we(this.e, -Math.floor((a - this.b || 1) % this.g / this.g * this.z) * this.H + "px 0")
        };
        p.Yf = function() {
            this.Hc = this.Wb = l;
            this.Ec();
            setTimeout(t(this.Cg, this), this.g)
        };
        p.Cg = function() {
            this.Kc || (clearTimeout(this.i), this.b = m, we(this.e, "0px 0"));
            this.Wb = n
        };
        var kn = window,
            ln = document,
            mn = kn.location;

        function nn() {}
        var on = /\[native code\]/;

        function pn(a, b, c) {
            return a[b] = a[b] || c
        }

        function qn(a) {
            for (var b = 0; b < this.length; b++)
                if (this[b] === a) return b;
            return -1
        }

        function rn() {
            var a;
            if ((a = Object.create) && on.test(a)) a = a(m);
            else {
                a = {};
                for (var b in a) a[b] = k
            }
            return a
        }
        var sn = pn(kn, "gapi", {});
        var tn;
        tn = pn(kn, "___jsl", rn());
        pn(tn, "I", 0);
        pn(tn, "hel", 10);

        function un() {
            var a = mn.href,
                b;
            if (tn.dpo) b = tn.h;
            else {
                b = tn.h;
                var c = RegExp("([#].*&|[#])jsh=([^&#]*)", "g"),
                    d = RegExp("([?#].*&|[?#])jsh=([^&#]*)", "g");
                if (a = a && (c.exec(a) || d.exec(a))) try {
                    b = decodeURIComponent(a[2])
                } catch (e) {}
            }
            return b
        }

        function vn(a) {
            return pn(pn(tn, "H", rn()), a, rn())
        };
        var wn = pn(tn, "perf", rn());
        pn(wn, "g", rn());
        var xn = pn(wn, "i", rn());
        pn(wn, "r", []);
        rn();
        rn();

        function yn(a, b, c) {
            b && 0 < b.length && (b = zn(b), c && 0 < c.length && (b += "___" + zn(c)), 28 < b.length && (b = b.substr(0, 28) + (b.length - 28)), c = b, b = pn(xn, "_p", rn()), pn(b, c, rn())[a] = (new Date).getTime(), b = wn.r, "function" === typeof b ? b(a, "_p", c) : b.push([a, "_p", c]))
        }

        function zn(a) {
            return a.join("__").replace(/\./g, "_").replace(/\-/g, "_").replace(/\,/g, "_")
        };
        var An = rn(),
            Bn = [],
            Cn;
        Cn = {
            oc: "callback",
            ah: "sync",
            Zg: "config",
            Vg: "_c",
            Wg: "h",
            ok: "platform",
            Dh: "jsl",
            TIMEOUT: "timeout",
            $g: "ontimeout",
            lk: "mh",
            Eh: "u"
        };
        Bn.push([Cn.Dh, function(a) {
            for (var b in a)
                if (Object.prototype.hasOwnProperty.call(a, b)) {
                    var c = a[b];
                    "object" == typeof c ? tn[b] = pn(tn, b, []).concat(c) : pn(tn, b, c)
                } if (b = a[Cn.Eh]) a = pn(tn, "us", []), a.push(b), (b = /^https:(.*)$/.exec(b)) && a.push("http:" + b[1])
        }]);
        var Dn = decodeURI("%73cript");
        An.m = function(a) {
            var b = tn.ms || "https://web.archive.org/web/20121218011521/https://apis.google.com";
            a = a[0];
            var c;
            if (!(c = !a)) c = 0 <= a.indexOf("..");
            c && g("Bad hint");
            return b + "/" + a.replace(/^\//, "")
        };

        function En(a) {
            return a.join(",").replace(/\./g, "_").replace(/-/g, "_")
        }

        function Fn(a, b) {
            for (var c = [], d = 0; d < a.length; ++d) {
                var e = a[d];
                e && 0 > qn.call(b, e) && c.push(e)
            }
            return c
        }
        var Gn = /^[\/_a-zA-Z0-9,.\-!:=]+$/,
            Hn = /^https?:\/\/[^\/\?#]+\.google\.com(:\d+)?\/[^\?#]+$/,
            In = /\/cb=/g,
            Jn = /\/\//g;

        function Kn(a) {
            var b = ln.createElement(Dn);
            b.setAttribute("src", a);
            b.async = "true";
            (a = ln.getElementsByTagName(Dn)[0]) ? a.parentNode.insertBefore(b, a): (ln.head || ln.body || ln.documentElement).appendChild(b)
        }

        function Ln(a, b) {
            var c = b || {};
            "function" == typeof b && (c = {}, c[Cn.oc] = b);
            var d = c,
                e = d && d[Cn.Vg];
            if (e)
                for (var f = 0; f < Bn.length; f++) {
                    var h = Bn[f][0],
                        j = Bn[f][1];
                    j && Object.prototype.hasOwnProperty.call(e, h) && j(e[h], a, d)
                }
            d = a ? a.split(":") : [];
            if (!(e = c[Cn.Wg]))(e = un()) || g("Bad hint");
            f = e;
            h = pn(tn, "ah", rn());
            if (!h["::"] || !d.length) Mn(d || [], c, f);
            else {
                e = [];
                for (j = m; j = d.shift();) {
                    var q = j.split("."),
                        q = h[j] || h[q[1] && "ns:" + q[0] || ""] || f,
                        v = e.length && e[e.length - 1] || m,
                        H = v;
                    if (!v || v.hint != q) H = {
                        hint: q,
                        ne: []
                    }, e.push(H);
                    H.ne.push(j)
                }
                var F =
                    e.length;
                if (1 < F) {
                    var I = c[Cn.oc];
                    I && (c[Cn.oc] = function() {
                        0 == --F && I()
                    })
                }
                for (; d = e.shift();) Mn(d.ne, c, d.hint)
            }
        }

        function Mn(a, b, c) {
            function d(a, b) {
                if (I) return 0;
                kn.clearTimeout(F);
                R.push.apply(R, ra);
                var d = ((sn || {}).config || {}).update;
                d ? d(v) : v && pn(tn, "cu", []).push(v);
                if (b) {
                    yn("me0", a, Ea);
                    try {
                        Nn(function() {
                            var a;
                            a = c === un() ? pn(sn, "_", rn()) : rn();
                            a = pn(vn(c), "_", a);
                            b(a)
                        })
                    } finally {
                        yn("me1", a, Ea)
                    }
                }
                q && q();
                return 1
            }
            var e = a.sort();
            a = [];
            for (var f = k, h = 0; h < e.length; h++) {
                var j = e[h];
                j != f && a.push(j);
                f = j
            }
            a = a || [];
            var q = b[Cn.oc],
                v = b[Cn.Zg],
                f = b[Cn.TIMEOUT],
                H = b[Cn.$g],
                F = m,
                I = n;
            (f && !H || !f && H) && g("Timeout requires both the timeout parameter and ontimeout parameter to be set");
            var e = pn(vn(c), "r", []).sort(),
                R = pn(vn(c), "L", []).sort(),
                Ea = [].concat(e);
            0 < f && (F = kn.setTimeout(function() {
                I = l;
                H()
            }, f));
            var ra = Fn(a, R);
            if (ra.length) {
                var ra = Fn(a, e),
                    $ = pn(tn, "CP", []),
                    Oa = $.length;
                $[Oa] = function(a) {
                    function b() {
                        $[Oa] = m;
                        return d(ra, a)
                    }
                    if (!a) return 0;
                    yn("ml1", ra, Ea);
                    if (0 < Oa && $[Oa - 1]) $[Oa] = b;
                    else {
                        b();
                        for (var c;
                            (c = $[++Oa]) && c(););
                    }
                };
                if (ra.length) {
                    var qc = "loaded_" + tn.I++;
                    sn[qc] = function(a) {
                        $[Oa](a);
                        sn[qc] = m
                    };
                    a = c.split(";");
                    (a = (f = An[a.shift()]) && f(a)) || g("Bad hint:" + c);
                    f = a = a.replace("__features__",
                        En(ra)).replace(/\/$/, "") + (e.length ? "/ed=1/exm=" + En(e) : "") + ("/cb=gapi." + qc);
                    h = f.match(Jn);
                    j = f.match(In);
                    (!j || !(1 === j.length && Hn.test(f) && Gn.test(f) && h && 1 === h.length)) && g("Bad URL " + a);
                    e.push.apply(e, ra);
                    yn("ml0", ra, Ea);
                    b[Cn.ah] || kn.___gapisync ? (b = a, "loading" != ln.readyState ? Kn(b) : ln.write("<" + Dn + ' src="' + encodeURI(b) + '"></' + Dn + ">")) : Kn(a)
                } else $[Oa](nn)
            } else d(ra)
        };

        function Nn(a) {
            if (tn.hee && 0 < tn.hel) try {
                return a()
            } catch (b) {
                tn.hel--, Ln("debug_error", function() {
                    window.___jsl.hefn(b)
                })
            } else return a()
        };
        sn.load = function(a, b) {
            return Nn(function() {
                return Ln(a, b)
            })
        };
        var On = -2;

        function Pn() {
            if (-2 == On) {
                On = parseInt(Jd("ACTIVITY", "-1"), 10);
                Q(document, "keypress", Qn);
                Q(document, "click", Rn);
                var a = L("LIST_AUTO_PLAY_VALUE");
                a && 1 < a || Sn()
            }
        }

        function Qn() {
            Sn()
        }

        function Rn() {
            Sn()
        }

        function Sn() {
            Pn();
            var a = pa();
            1E3 > a - On || (On = a, Id("ACTIVITY", "" + a))
        }

        function Tn() {
            return -1 == On || -2 == On ? -1 : Math.max(pa() - On, 0)
        };

        function Un(a, b, c, d, e, f) {
            this.b = m;
            this.wf = c;
            this.i = a;
            this.z = b;
            this.g = d;
            this.k = L("GOOGLEPLUS_HOST") + (e != m ? "/u/" + e : "") + (f != m ? "/b/" + f : "") + "/_/notifications/frame#pid=36";
            this.vf = E(a)
        }

        function Vn(a, b, c, d) {
            return {
                onOpen: t(function(a) {
                    return a.openInto(c)
                }, a),
                onReady: t(function() {
                    b.showOnepick && d && b.showOnepick()
                }, a),
                onClose: function(a) {
                    b.hideOnepick && d && b.hideOnepick();
                    a.remove()
                }
            }
        }

        function Wn(a, b, c) {
            if ("undefined" === typeof c) a[b]();
            else a[b](c)
        }
        Un.prototype.load = function(a) {
            iframes.setHandler("iframe-style", Vn(this, a, this.i, n));
            iframes.setHandler("onepick", Vn(this, a, this.z, l));
            var b = {
                setNotificationWidgetHeight: t(function(a) {
                    this.vf.style.height = a
                }, this),
                setNotificationText: t(function(a) {
                    this.wf(parseInt(a, 10))
                }, this),
                hideNotificationWidget: function() {
                    a.hideNotificationWidget && a.hideNotificationWidget()
                },
                openSharebox: function() {},
                onError: function() {}
            };
            this.b = iframes.open(this.k, {
                style: "iframe-style"
            }, {
                origin: window.location.protocol + "//" +
                    window.location.hostname,
                source: "yt",
                hl: this.g
            }, b, function() {})
        };
        Un.prototype.close = function() {
            Wn(this.b, "onHide")
        };
        Un.prototype.e = function() {
            return Wb(window).height - 60 - 20
        };

        function Xn(a, b) {
            b ? Wn(a.b, "onActive") : Wn(a.b, "onIdle")
        };

        function Yn(a, b, c) {
            this.g = this.e = n;
            this.z = 0;
            this.u = E("sb-container");
            this.i = E("sb-button-notify");
            this.H = od("SPAN", "yt-uix-button-content", E("sb-button-notify"));
            this.k = E("sb-onepick-target");
            this.b = new Un("sb-target", "sb-onepick-target", t(this.Ue, this), a, b, c);
            this.b.load({
                hideNotificationWidget: t(this.ed, this),
                showOnepick: t(this.Te, this),
                hideOnepick: t(this.Se, this)
            });
            this.N = je(this.k);
            this.fd();
            Q(window, "resize", t(this.fd, this));
            Q(window, "click", t(this.ed, this));
            Pn();
            Xc(t(this.Re, this), 12E4)
        }
        p = Yn.prototype;
        p.yh = function(a) {
            if (this.e) Zn(this), Xn(this.b, l);
            else {
                this.g && $n(this);
                this.b.close();
                ao(this, l, "notif");
                y(this.i, "sb-notif-clicked");
                W("sandbar-crop-player");
                var b = this.b,
                    c = {
                        maxWidgetHeight: b.e()
                    };
                Wn(b.b, "onShowNotificationsOnly", c);
                this.e = l;
                Xn(this.b, n)
            }
            Cd(a)
        };
        p.zh = function(a) {
            if (this.g) $n(this);
            else {
                this.e && Zn(this);
                this.b.close();
                ao(this, l, "sharebox");
                W("sandbar-crop-player");
                var b = this.b,
                    c = window.location.href; - 1 != c.indexOf("/watch?") && Wn(b.b, "setPrefill", {
                    items: [{
                        type: "https://web.archive.org/web/20121218011521/http://schema.org/VideoObject",
                        id: c,
                        properties: {
                            url: [c]
                        }
                    }]
                });
                Wn(b.b, "onShowShareboxOnly", {
                    maxWidgetHeight: b.e
                });
                this.g = l
            }
            Cd(a)
        };

        function ao(a, b, c) {
            c = "sb-card-" + c;
            b ? (A(a.u, "sb-off", "sb-on"), y(a.u, c)) : (A(a.u, "sb-on", "sb-off"), z(a.u, c))
        }

        function $n(a) {
            W("sandbar-uncrop-player");
            ao(a, n, "sharebox");
            a.g = n
        }

        function Zn(a) {
            W("sandbar-uncrop-player");
            ao(a, n, "notif");
            a.e = n;
            z(a.i, "sb-notif-clicked")
        }
        p.ed = function() {
            if (this.e || this.g) this.b.close(), Zn(this), $n(this), bo(this)
        };
        p.Ue = function(a) {
            this.z = a;
            bo(this)
        };

        function bo(a) {
            lc(a.H, a.z + "");
            0 == a.z ? A(a.i, "sb-notif-on", "sb-notif-off") : A(a.i, "sb-notif-off", "sb-notif-on")
        }
        p.Te = function() {
            A(this.k, "sb-off", "sb-on")
        };
        p.Se = function() {
            A(this.k, "sb-on", "sb-off")
        };
        p.fd = function() {
            var a = Math.max((Wb(window).height - this.N.height) / 2, 0);
            Wd(this.k, "top", a + "px")
        };
        p.Re = function() {
            6E5 < Tn() ? Xn(this.b, n) : Xn(this.b, l)
        };

        function co(a, b) {
            this.e = l;
            this.b = m;
            this.u = a;
            this.g = b
        }
        p = co.prototype;
        p.init = function() {
            for (var a = this.u, b = ["filter-crumb", "yt-close"], c = [], d = 0; d < b.length; ++d) {
                var e = b[d];
                if (c.length) c = G(e, a);
                else {
                    for (var f = [], h = 0; h < c.length; ++h)
                        for (var j = G(e, c[h]), q = 0; q < j.length; ++q) f.push(j[q]);
                    c = f
                }
            }
            x(c, this.rg, this);
            a = this.g;
            S(a, "mouseover", t(this.tg, this), "filter-content");
            S(a, "mouseout", t(this.sg, this), "filter-content")
        };
        p.rg = function(a) {
            xd(a, "click", t(this.Hh, this), n)
        };
        p.Hh = function(a) {
            y(uc(a.target, "filter-crumb"), "filter-crumb-removed")
        };

        function eo(a) {
            if (!a.b) {
                var b = K("filter-crumb-ghost", a.u);
                Q(b, Xg, t(a.$f, a), n);
                a.b = b
            }
            return a.b
        }

        function fo(a) {
            return B(a, "filter-content") && B(a, "filter-text") && !B(a, "filter-disabled")
        }
        p.tg = function(a) {
            var b = a.target;
            if (fo(b)) {
                this.e = n;
                a = eo(this);
                z(a, "filter-crumb-inactive");
                var b = pc(b),
                    c = K("filter-text", a);
                lc(c, b);
                y(a, "filter-crumb-active")
            }
        };
        p.sg = function(a) {
            fo(a.target) && (a = eo(this), z(a, "filter-crumb-active"), this.e = l)
        };
        p.$f = function() {
            var a = eo(this);
            if (this.e) {
                var b = K("filter-text", a);
                lc(b, "");
                y(a, "filter-crumb-inactive")
            }
        };

        function go(a) {
            S(a, "mouseover", t(ho, a), "group-header");
            S(a, "mouseout", t(io, a), "group-header")
        }

        function ho() {
            y(this, "header-hover")
        }

        function io() {
            z(this, "header-hover")
        };

        function jo(a) {
            W("subscription_subscribe_loading", a);
            var b = {
                action_create_subscription_to_channel: 1
            };
            b.c = a;
            var c = {};
            c.session_token = M("subscription_ajax");
            var d = L("PLAYBACK_ID");
            d && (c.plid = d);
            X("/subscription_ajax", {
                method: "POST",
                A: b,
                F: c,
                o: function(b, c) {
                    W("subscription_subscribe_success", a, c.response.id)
                },
                onError: function() {
                    W("subscription_subscribe_failure", a)
                },
                V: function() {
                    W("subscription_subscribe_loaded", a)
                }
            })
        }

        function ko(a, b) {
            W("subscription_unsubscirbe_loading", a);
            var c = {};
            c.session_token = M("subscription_ajax");
            c.s = b;
            var d = L("PLAYBACK_ID");
            d && (c.plid = d);
            X("/subscription_ajax", {
                method: "POST",
                A: {
                    action_remove_subscriptions: 1
                },
                F: c,
                o: function() {
                    W("subscription_unsubscribe_success", a)
                },
                onError: function() {
                    W("subscription_unsubscribe_failure", a)
                },
                V: function() {
                    W("subscription_unsubscribe_loaded", a)
                }
            })
        };
        u("yt.pubsub.publish", W);

        function lo(a) {
            var b = {
                channel: "c",
                all: "a"
            };
            return b[a] || b.channel
        };

        function mo(a, b, c) {
            this.ua = a;
            this.i = b;
            this.b = !!c;
            this.e = n;
            this.g = [];
            this.k = []
        }
        p = mo.prototype;
        p.init = function() {
            var a = uc(this.ua, "yt-subscription-button-hovercard"),
                b = t(this.Dg, this),
                c = t(this.Eg, this),
                b = Q(a, "mouseenter", b);
            this.g.push(b);
            b = Q(a, "mouseleave", c);
            this.g.push(b)
        };
        p.Dg = function() {
            this.e = l;
            if (this.b) {
                var a = t(this.td, this),
                    a = N(a, 500);
                this.k.push(a)
            }
        };
        p.Eg = function() {
            this.e = n
        };
        p.td = function() {
            var a = Qi.getInstance(),
                b;
            if (b = !this.Od) b = a.O(this.ua), b = !b ? n : B(b, Y(a, "active"));
            b && (this.Od = l, b = {
                session_token: M("subscription_ajax")
            }, b[lo()] = this.i, X("/subscription_ajax", {
                method: "POST",
                A: {
                    hovercard: 1,
                    action_get_subscription_form_for_channel: 1
                },
                F: b,
                D: this,
                o: function(b, d) {
                    Ii(a, this.ua, d.response.html_content);
                    this.wb()
                },
                onError: function() {
                    this.Od = n
                }
            }))
        };
        p.wb = function() {
            var a = Qi.getInstance(),
                b = a.O(this.ua),
                c = Hi(a, b);
            x(c.getElementsByTagName("input"), function(a) {
                var b = t(function() {
                    Qf(c.getElementsByTagName("form")[0])
                }, this);
                a = Q(a, "change", b);
                this.g.push(a)
            }, this)
        };

        function no(a) {
            this.M = a;
            this.type = P(a, "subscription-type") || "channel";
            this.jb = P(a, "subscription-value") || "";
            this.la = P(a, "enable-hovercard") ? new mo(this.M, this.jb) : m;
            this.Ab = n;
            this.e = [];
            this.b = [];
            this.Vb = P(this.M, "sessionlink") || "";
            this.wb()
        }

        function oo(a) {
            a = G("yt-subscription-button-js-default", a);
            x(a, function(a) {
                P(a, "subscription-initialized") || (new no(a), dd(a, "subscription-initialized", "true"))
            })
        }
        var po = [];
        p = no.prototype;
        p.getId = function() {
            return P(this.M, "subscription-id") || m
        };

        function qo(a, b) {
            b ? dd(a.M, "subscription-id", b) : fd(a.M, "subscription-id");
            ro(a)
        }

        function ro(a) {
            if (gd(a.M, "subscription-button-type")) {
                var b = "-" + P(a.M, "subscription-button-type");
                C(a.M, "yt-uix-button-subscribed" + b, !!a.getId());
                C(a.M, "yt-uix-button-subscribe" + b, !a.getId())
            } else C(a.M, "subscribed", !!a.getId());
            a.getId() ? (b = uc(a.M, "yt-uix-button-subscription-container"), xd(b, "mouseleave", t(function() {
                y(this.M, "hover-enabled")
            }, a))) : z(a.M, "hover-enabled");
            if (a.la) {
                var b = a.la,
                    c = !!a.getId(),
                    d = Y(Qi.getInstance(), "target");
                C(b.ua, d, c);
                b = a.la;
                a = !!a.getId();
                (b.b = a) || Qi.getInstance().ka(b.ua)
            }
        }
        p.wb = function() {
            this.e.push(Q(this.M, "click", t(this.Df, this)));
            this.b.push(V("SUBSCRIBE", this.Ef, this));
            this.b.push(V("UNSUBSCRIBE", this.Ff, this));
            this.la && this.la.init();
            po.push(this);
            ro(this)
        };

        function so(a, b, c, d) {
            c != a.getId() && a.jb == b && qo(a, c);
            d == a && a.la && (a = a.la, Qi.getInstance().ka(a.ua))
        }
        p.Df = function(a) {
            if (this.Ab) return n;
            a.preventDefault();
            this.getId() ? this.ge() : this.Ta()
        };

        function to(a) {
            "BUTTON" == a.M.tagName && y(a.M.parentNode, "yt-subscription-button-disabled-mask-container");
            a.M.disabled = l
        }
        p.enable = function() {
            z(this.M.parentNode, "yt-subscription-button-disabled-mask-container");
            this.M.disabled = n
        };
        p.Ta = function() {
            var a = this.type,
                b = this.jb,
                c = P(this.M, "subscription-feature");
            this.Ab = l;
            to(this);
            if (M("subscription_ajax")) uo(b, a, c, this);
            else if (!this.M.getAttribute("href")) {
                var d = t(this.Ig, this),
                    a = Je("/signin?context=popup", "next", document.location.protocol + "//" + document.domain + "/post_login"),
                    a = Je(a, "feature", "sub_button");
                if (a = window.open(a, "loginPopup", "width=375,height=440,resizable=yes,scrollbars=yes", l)) b = V("LOGGED_IN", function(a) {
                    var b = L("LOGGED_IN_PUBSUB_KEY", b);
                    qf(b);
                    d(a)
                }), Tc("LOGGED_IN_PUBSUB_KEY",
                    b), a.moveTo((screen.width - 375) / 2, (screen.height - 440) / 2)
            }
        };
        p.Ig = function(a) {
            Vc("subscription_ajax", a.subscription_ajax);
            this.Ta()
        };

        function uo(a, b, c, d) {
            b = b || "channel";
            var e = {},
                f = {
                    channel: "channel",
                    all: "all"
                };
            e["action_create_subscription_to_" + (f[b] || f.channel)] = 1;
            c && (e.feature = c);
            e[lo(b)] = a;
            d && d.Vb && (c = Se("/subscription_ajax", e), f = Me(d.Vb), wg(c, f));
            c = {};
            c.session_token = M("subscription_ajax");
            (f = L("PLAYBACK_ID")) && (c.plid = f);
            X("/subscription_ajax", {
                method: "POST",
                A: e,
                F: c,
                o: function(c, d) {
                    var e = d || {},
                        f, H = b;
                    f = Ja(po, function(b) {
                        return b.type == H && b.jb == a
                    });
                    x(f, function(b) {
                        W("SUBSCRIBE", a, e, b)
                    });
                    e.response.show_feed_privacy_dialog &&
                        W("SHOW-SUBSCRIBE-DIALOG", a)
                },
                V: function() {
                    d && (d.Ab = n, d.enable())
                }
            });
            kh("subscribe")
        }
        p.ge = function() {
            var a = {
                    s: this.getId(),
                    session_token: M("subscription_ajax")
                },
                b = {
                    action_remove_subscriptions: 1
                },
                c = P(this.M, "subscription-feature");
            c && (b.feature = c);
            (c = L("PLAYBACK_ID")) && (a.plid = c);
            this.Ab = l;
            to(this);
            if (this.Vb) {
                var c = Se("/subscription_ajax", b),
                    d = Me(this.Vb);
                wg(c, d)
            }
            X("/subscription_ajax", {
                method: "POST",
                D: this,
                A: b,
                F: a,
                o: function(a, b) {
                    qo(this, m);
                    if (this.la) {
                        var c = this.la;
                        c.b = n;
                        Qi.getInstance().ka(c.ua)
                    }
                    W("UNSUBSCRIBE", this.jb, b, this)
                },
                V: function() {
                    this.Ab = n;
                    this.enable()
                }
            });
            kh("unsubscribe")
        };
        p.Ef = function(a, b, c) {
            b = b.response.id;
            so(this, a, b, c);
            a == this.jb && (qo(this, b), this.la && (a = this.la, a.e && (Qi.getInstance().Fb(a.ua), a.td())))
        };
        p.Ff = function(a, b) {
            so(this, a, b.response.id, this)
        };

        function vo() {
            var a = new ki;
            a && ji(a) && (this.b = new mi(a))
        }
        w(vo, mf);
        vo.prototype.b = m;

        function wo(a) {
            var b = {
                volume: 100,
                muted: n,
                nonNormalized: 100
            };
            if (a.b) {
                var c = {};
                try {
                    c = a.b.get("yt-player-volume") || {}
                } catch (d) {
                    a.b.remove("yt-player-volume")
                }
                b.volume = isNaN(c.volume) ? 100 : Math.min(Math.max(c.volume, 0), 100);
                b.nonNormalized = isNaN(c.nonNormalized) ? b.volume : c.nonNormalized;
                b.muted = c.muted == k ? n : c.muted
            }
            return b
        }
        vo.prototype.W = function() {
            this.b = m;
            vo.L.W.call(this)
        };

        function xo(a) {
            var b = {};
            b.aid = a;
            a = window.location;
            var c = window.location.hash,
                d = "";
            "#" == c.charAt(0) && (d = "!" == c.charAt(1) ? c.substr(0, 2) : c.substr(0, 1));
            var c = Oe(c),
                e;
            for (e in b) c[e] = b[e];
            b = d + Pe(c);
            a.hash = b
        }

        function yo(a, b, c) {
            if (!a || !b) return m;
            b = {
                aid: a.aid || "!aid",
                foc_id: a.channel || "!foc_id",
                label: b || "SOCIAL_FOLLOWON_VIEW",
                origin: a.origin || "SHARE"
            };
            a.saw_ad && (b.saw_ad = "1");
            c && (b.agcid = c);
            return Qe("https://web.archive.org/web/20121218011521/http://www.gstatic.com/youtube/followonevent/l", b)
        };

        function zo(a, b, c) {
            this.N = E("watch7-playlist-tray");
            this.z = E("watch7-radio-skip-video");
            this.g = a;
            this.b = b;
            this.k = c;
            Mh(this.z, "click", this.H, n, this);
            X("/radio_ajax", {
                A: {
                    action_render_video_list: 1,
                    current_video_id: this.b,
                    previous_video_ids: this.k.join(",")
                },
                o: this.i,
                D: this
            })
        }
        zo.prototype.i = function(a, b) {
            b.success ? this.N.innerHTML = b.html : alert(b.errors)
        };
        zo.prototype.H = function() {
            X("/radio_ajax", {
                A: {
                    action_skip_video: 1,
                    station_id: this.g,
                    video_id: this.b
                },
                o: this.e,
                D: this
            })
        };
        zo.prototype.e = function(a, b) {
            if (b.success) {
                var c = b.next_url;
                if (c) {
                    gh(c);
                    return
                }
            }
            alert(b.errors)
        };
        var Ao = m;

        function Bo(a) {
            var b = 0; - 1 != a.indexOf("h") && (a = a.split("h"), b = 3600 * a[0], a = a[1]); - 1 != a.indexOf("m") && (a = a.split("m"), b = 60 * a[0] + b, a = a[1]); - 1 != a.indexOf("s") ? (a = a.split("s"), b = 1 * a[0] + b) : b = 1 * a + b;
            return b
        };
        var Co = n,
            Do = -1,
            Eo = "",
            Fo = {},
            Go = [],
            Ho = m;

        function Io() {
            return L("RESUME_COOKIE_NAME")
        }

        function Jo(a) {
            var b = zm();
            if (b) {
                a && Tc("RESUME_COOKIE_NAME", a);
                var c = L("VIDEO_ID");
                a = b.getDuration();
                b = Math.floor(b.getCurrentTime());
                if (0 == a || 120 >= b || b + 120 >= a) {
                    if (b = Io()) a = Jd(b, "").split(","), a = Ja(a, function(a) {
                        return 0 != a.indexOf(c)
                    }), 0 == a.length ? Kd(b) : Id(b, a.join(","), 1814400)
                } else if (b = Math.floor(b), a = Io()) {
                    var d = Jd(a, "").split(","),
                        d = Ja(d, function(a) {
                            return 0 != a.indexOf(c) && !!a.length
                        });
                    4 <= d.length && d.shift();
                    d.push(c + ":" + b);
                    Id(a, d.join(","), 1814400)
                }
            }
        }

        function Ko() {
            Jo()
        }

        function Lo() {
            var a = zm();
            if (a) {
                var b = L("VIDEO_ID"),
                    c = a.getDuration(),
                    a = Math.floor(a.getCurrentTime());
                0 == c || 20 >= a || zg("/save_resume_204?" + Pe({
                    v: b,
                    t: a.toString()
                }))
            }
        }

        function Mo() {
            Co = l;
            var a = zm();
            a && No(a)
        }

        function No(a, b) {
            if (ad && !a.addEventListener) {
                var c = b ? 2 * b : 50;
                N(function() {
                    No(a, c)
                }, c)
            } else a.addEventListener("onStateChange", Oo), a.addEventListener("onVolumeChange", Po), a.addEventListener("SHARE_CLICKED", Qo), a.addEventListener("SIZE_CLICKED", Ro), a.addEventListener("onError", So), a.addEventListener("onAdvertiserVideoView", To), Io() && Q(window, "beforeunload", Ko), Jl(a), Ho = new vo
        }

        function To(a) {
            if (ia(a))
                if (a.ad) {
                    var b = a.uid,
                        c = a.aid;
                    a = a.agcid;
                    var d = L("CONVERSION_CONFIG_DICT");
                    d && (b && c && d.uid == b) && xo(c);
                    d = {
                        channel: b,
                        aid: c,
                        origin: "AD_VIEW"
                    };
                    (a = yo(d, "FOLLOWON_ADVIEW", a || "!agcid")) && zg(a);
                    c && b && ti("aid-" + b, d, 604800)
                } else if (b = a.uid) c = Oe(window.location.hash).aid, c = ga(c) ? c : m, a = wi("aid-" + b), a = !ia(a) ? m : a, !c && !a ? a = m : (d = c && (!a || c != a.aid) ? {
                channel: b,
                aid: c,
                origin: "SHARE"
            } : lb(a), a && "AD_VIEW" == a.origin && (d.saw_ad = l), a = d), a && (!c && a.aid && xo(a.aid), (d = yo(a, "SOCIAL_FOLLOWON_VIEW")) && zg(d),
                b && (c && !a.saw_ad) && ti("aid-" + b, a, 604800))
        }

        function Oo(a) {
            Do = a;
            switch (a) {
                case 0:
                    if (L("RADIO_ENABLED")) {
                        if (L("RADIO_ENABLED")) {
                            if (!Ao) {
                                a = L("RADIO_STATION_ID");
                                var b = L("VIDEO_ID"),
                                    c = L("RADIO_PREVIOUS_VIDEO_IDS");
                                a && (b && c) && (Ao = new zo(a, b, c))
                            }
                            a = Ao
                        } else a = m;
                        a && X("/radio_ajax", {
                            A: {
                                action_video_play_completed: 1,
                                station_id: a.g,
                                video_id: a.b
                            },
                            o: a.e,
                            D: a
                        })
                    }
                    ol(Gl()) && xl(Gl(), n, "autoplay")
            }
        }

        function So(a) {
            switch (a) {
                case 5:
                    Hl(5, "html5_ns")
            }
        }

        function Po(a) {
            var b = Ho;
            if (b.b) {
                var c = {};
                c.volume = isNaN(a.volume) ? wo(b).volume : Math.min(Math.max(a.volume, 0), 100);
                c.nonNormalized = a.nonNormalized;
                c.muted = a.muted == k ? wo(b).muted : a.muted;
                try {
                    b.b.set("yt-player-volume", c)
                } catch (d) {}
            }
        }

        function Ro(a) {
            Id("wide", a ? "1" : "0");
            wm(a)
        }

        function Qo() {
            Um(E("watch-share"), l)
        }

        function Uo() {
            var a = zm();
            a && (2 == Do ? a.playVideo() : a.pauseVideo())
        }

        function Vo() {
            var a = zm();
            if (a) {
                var b = a.getCurrentTime();
                a.seekTo(b + 10)
            }
        }

        function Wo() {
            var a = zm();
            if (a) {
                var b = a.getCurrentTime();
                a.seekTo(b - 10)
            }
        }

        function Xo(a, b) {
            var c = b != m ? b : l,
                d = zm();
            d.seekTo(a, l);
            c && (E("watch-video-container") ? window.scroll(0, 0) : window.location.href = "#movie_player");
            d.playVideo()
        }

        function Yo() {
            if (Co) {
                var a = window.location.hash;
                a != Eo && (Eo = a, a = Oe(a), "t" in a && a.t != Fo.t && Xo(Bo(a.t), n), Fo = a)
            }
        };

        function Zo() {
            var a = E("watch-video-annotation-editable"),
                b = ua(E("watch-video-annotation-content").innerHTML);
            b ? A(a, ["unannotated", "editing"], ["annotated", "not-editing"]) : A(a, ["annotated", "not-editing"], ["unannotated", "editing"]);
            E("watch-video-annotation-textarea").value = b
        }

        function $o(a) {
            if (!P(a, "saving")) {
                dd(a, "saving", "true");
                var b = E("watch-video-annotation-content"),
                    c = E("watch-video-annotation-textarea"),
                    d = ua(c.value),
                    e = {};
                d || (e["delete"] = 1);
                X(a.action, {
                    format: "JSON",
                    method: "POST",
                    A: e,
                    Sa: Dc(a),
                    o: function() {
                        b.innerHTML = xa(d)
                    },
                    onError: function() {
                        c.value = b.innerHTML
                    },
                    V: function() {
                        fd(a, "saving");
                        Zo()
                    }
                })
            }
        };

        function ap() {
            Ld.getInstance();
            Rd(Td.ue, l);
            Sd();
            U("watch_page_survey")
        };
        var bp = ["ypc-container", "ypc-unsubscribe-link", "ypc-rap-overlay-link"];

        function cp(a) {
            gg(L("YPC_LOADER_CSS"));
            eg(L("YPC_LOADER_JS"), function() {
                x(L("YPC_LOADER_CALLBACKS"), function(a) {
                    (a = s(a)) && a()
                });
                a && a()
            })
        };

        function dp(a, b, c) {
            this.g = P(a, "id");
            this.target = a;
            this.i = c;
            this.b = n
        }
        dp.prototype.k = function() {
            this.b = l;
            var a = Qi.getInstance(),
                b = a.O(this.i || this.target);
            if (b = Hi(a, b).innerHTML || this.e) Ii(a, this.target, b), oo()
        };
        dp.prototype.get = function() {
            var a = {
                method: "POST",
                V: t(this.z, this),
                F: {
                    external_channel_id: this.g,
                    session_token: M("channel_details_ajax")
                }
            };
            X("/channel_details_ajax", a)
        };
        dp.prototype.z = function(a, b) {
            b.html && (this.e = b.html, this.b && this.k())
        };
        var ep = [];

        function fp(a, b, c) {
            a.timeOfStartCall = (new Date).getTime();
            var d = c || r,
                e = a.serverUri || "//web.archive.org/web/20121218011521/http://www.google.com/tools/feedback",
                f = d.GOOGLE_FEEDBACK_START;
            /iphone|ipad|ipod|android|blackberry|mini|windows\sce|windows\sphone|palm/i.test(navigator.userAgent) && (a.mobileWindow = window.open(""));
            d.GOOGLE_FEEDBACK_START_ARGUMENTS = arguments;
            f ? f.apply(d, arguments) : (d = d.document, f = d.createElement("script"), f.src = e + "/load.js", d.body.appendChild(f))
        };
        var gp = n,
            hp = "";

        function ip(a) {
            a = a.match(/[\d]+/g);
            a.length = 3;
            return a.join(".")
        }
        if (navigator.plugins && navigator.plugins.length) {
            var jp = navigator.plugins["Shockwave Flash"];
            jp && (gp = l, jp.description && (hp = ip(jp.description)));
            navigator.plugins["Shockwave Flash 2.0"] && (gp = l, hp = "2.0.0.11")
        } else if (navigator.mimeTypes && navigator.mimeTypes.length) {
            var kp = navigator.mimeTypes["application/x-shockwave-flash"];
            (gp = kp && kp.enabledPlugin) && (hp = ip(kp.enabledPlugin.description))
        } else try {
            var lp = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"),
                gp = l,
                hp = ip(lp.GetVariable("$version"))
        } catch (mp) {
            try {
                lp =
                    new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6"), gp = l, hp = "6.0.21"
            } catch (np) {
                try {
                    lp = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"), gp = l, hp = ip(lp.GetVariable("$version"))
                } catch (op) {}
            }
        }
        var pp = hp;

        function qp(a) {
            return (a = a.exec(ub())) ? a[1] : ""
        }
        var rp = function() {
            if (pg) return qp(/Firefox\/([0-9.]+)/);
            if (D || yb) return Lb;
            if (ug) return qp(/Chrome\/([0-9.]+)/);
            if (vg) return qp(/Version\/([0-9.]+)/);
            if (rg || sg) {
                var a = /Version\/(\S+).*Mobile\/(\S+)/.exec(ub());
                if (a) return a[1] + "." + a[2]
            } else {
                if (tg) return (a = qp(/Android\s+([0-9.]+)/)) ? a : qp(/Version\/([0-9.]+)/);
                if (qg) return qp(/Camino\/([0-9.]+)/)
            }
            return ""
        }();

        function sp() {
            (D ? 0 <= Ga(rp, "7") && 0 <= Ga(pp, "9") : pg ? 0 <= Ga(rp, "3.5") : vg ? 0 <= Ga(rp, "5") : ug) || U("reportbug")
        };

        function tp() {
            xd(E("help-button"), "click", up, l)
        }

        function up() {
            var a = E("help-button");
            if (a) {
                var b = P(a, "iph-topic-id"),
                    c = P(a, "help-center-host"),
                    d = P(a, "locale"),
                    e = P(a, "iph-title-text"),
                    f = P(a, "iph-search-button-text"),
                    h = P(a, "iph-search-input-text"),
                    j = P(a, "iph-anchor-text"),
                    q = document.location.protocol + P(a, "iph-js-url"),
                    v = document.location.protocol + P(a, "iph-css-url");
                q && v && (v = $b("link", {
                    href: v,
                    rel: "stylesheet"
                }), document.getElementsByTagName("head")[0].appendChild(v), eg(q, function() {
                    var q = s("yt.www.help.init"),
                        v = s("yt.www.help.onButtonClick");
                    q(b,
                        c, m, d, e, h, f, j);
                    Q(a, "click", v);
                    v()
                }))
            }
        };

        function vp() {
            W("page-init", Wb(window), Zb(document))
        }

        function wp() {
            Yc(xp);
            xp = N(function() {
                W("page-resize", Wb(window))
            }, 200)
        }

        function yp() {
            var a = Zb(document);
            50 <= Math.abs(zp - a.y) && W("page-scroll", a)
        }
        var Bp = [],
            xp = 0,
            zp = 0;
        var Cp;

        function Dp(a, b, c, d, e) {
            c || (Cp && Cp != a && U(Cp), Cp = a, e ? T(a) : ve(a));
            d || (c = {}, c["action_" + b] = 1, c.base_url = L("CURRENT_URL"), X("/picker_ajax", {
                format: "JSON",
                method: "GET",
                A: c,
                o: t(Ep, m, a),
                onError: function() {
                    U(a)
                }
            }))
        }

        function Ep(a, b, c) {
            !c || !c.html ? U(a) : (dd(a, "loaded", 1), a.innerHTML = c.html, Fp(a), ee(a))
        }

        function Fp(a, b) {
            var c = K("yt-picker-content", a),
                d = J(m, "yt-picker-section", c);
            x(d, t(Gp, m, Math.floor((b || c.offsetWidth) / 180)))
        }

        function Gp(a, b) {
            for (var c = J(m, "yt-picker-item", b), d = Math.ceil(c.length / a), e, f = document.createElement("div"), h = 0; h < a; h++) {
                e = document.createElement("div");
                e.className = "yt-picker-grid";
                for (var j = d * h; j < d * (h + 1); j++) c[j] && e.appendChild(c[j]);
                e.children.length && f.appendChild(e)
            }
            b.innerHTML = f.innerHTML
        };

        function Hp() {
            (function() {
                try {
                    for (var a = this; a.parent != a;) "$" == a.frameElement.src && g("odd"), a = a.parent;
                    a.frameElement != m && g("busted")
                } catch (b) {
                    document.write("--\><plaintext style=display:none><\!--"), window.open("/", "_top"), top.location = "/"
                }
            })()
        }

        function Ip(a) {
            "block" == a.responseText && Hp()
        }
        if (window != window.top) {
            var Jp = document.referrer;
            if (window.parent != window.top) Hp();
            else {
                var Kp = Ve(Jp);
                if (Te(Kp)) Hp();
                else {
                    var Lp = Ve(Jp);
                    Ue(Lp) || Rf("/roger_rabbit?" + ("location=" + encodeURIComponent(Jp) + "&self=" + encodeURIComponent(window.location.href) + "&user_agent=" + encodeURIComponent(navigator.userAgent)), {
                        onComplete: Ip
                    })
                }
            }
        };

        function Mp() {
            zi("ol");
            W("init");
            Bi()
        }

        function Np() {
            W("dispose")
        }

        function Op(a, b, c) {
            if (!Pp) {
                for (var d = document.getElementsByTagName("script"), e = n, f = 0, h = d.length; f < h; f++)
                    if (0 < d[f].src.indexOf("/debug-")) {
                        e = l;
                        break
                    } e && (c = Qp(c), zg("/js_204?" + ("error=" + encodeURIComponent(a) + "&script=" + encodeURIComponent(b) + "&linenumber=" + encodeURIComponent(c) + "&url=" + encodeURIComponent(window.location.href))), Pp = l)
            }
        }
        var Pp = n;

        function Qp(a) {
            if (zb) try {
                eval("(0)()")
            } catch (b) {
                return b.stack.replace(/(.*):/g, "").replace(/\n/g, ",")
            } else return a
        };
        var Rp = [];
        var Sp = qa("You were shown..."),
            Tp = qa("You just watched..."),
            Up = "";

        function Vp() {
            U("pyv-container");
            E("ppv-placeholder") ? T("ppv-placeholder") : U("homepage-sidebar-ads")
        }

        function Wp(a, b, c, d) {
            var e = Ma(b.media_template_data, function(a) {
                return !!a.imageUrl
            });
            e && (a = {
                video_id: e.videoId,
                ad_type: a,
                headline: Da(b.line1),
                image_url: e.imageUrl,
                description1: Da(b.line2),
                description2: Da(b.line3),
                channel_title: e.channelName
            }, Up = Da(b.url), Rf("/pyv?" + Pe(a), {
                method: "GET",
                update: c,
                onComplete: d
            }))
        }

        function Xp(a) {
            if (0 == a.length) Yp(), L("PYV_TRACK_RELATED_CTR") && (Zp("watch-related", n), Zp("watch-channel-videos-panel", n));
            else {
                var b = E("watch-channel-videos-panel");
                b && !L("IS_BRANDED_WATCH") && y(b, "yt-uix-expander-collapsed");
                Wp("watch_related", a[0], m, function(a) {
                    a = Sf(Of(a.responseXML), "html_content") || "";
                    var b = E(window.pyv_related_box_id || "watch-related");
                    b && (0 != b.innerHTML.indexOf(a) && (b.insertBefore(cc(a), b.firstChild), L("PYV_TRACK_RELATED_CTR") && (Zp("watch-related", l), Zp("watch-channel-videos-panel",
                        l))), (a = E("pyv-watch-related-dest-url")) && a.setAttribute("href", Up))
                })
            }
        }

        function Yp() {
            var a = G("related-video-featured");
            x(a, function(a) {
                T(a)
            })
        }

        function $p(a) {
            a && te(a, l);
            te("search-base-div", l)
        }

        function aq(a, b, c) {
            x(a, function(a) {
                var b = a.media_template_data[0];
                a.line1 = Da(a.line1);
                a.line2 = Da(a.line2);
                a.line3 = Da(a.line3);
                a.url = Da(a.url);
                b.imageUrl = Da(b.imageUrl);
                b.channelName = Da(b.channelName)
            });
            a = Gf(new Ff(k), a);
            X("/pyv", {
                format: "XML",
                method: "POST",
                F: {
                    pyv_ads: a,
                    ad_type: c
                },
                o: function(a, c) {
                    b.innerHTML = c.html_content;
                    $p(b)
                }
            })
        }

        function Zp(a, b) {
            var c = E(a);
            c && (c = J("li", "video-list-item", c), x(c, function(a, c) {
                var f = J("a", m, a);
                x(f, function(a) {
                    var d = a.getAttribute("href");
                    d && unescape(d).match(/\/watch(\?|#!)v=/) && (a.href = b ? a.href + ("&pvpos=" + c) : a.href + ("&pvnpos=" + c))
                })
            }))
        }

        function bq(a) {
            var b = window.location.href;
            b.indexOf("#") == b.length - 1 && Ab && (window.location.hash = "#!");
            var b = document.body,
                c = Sb(b),
                d = [];
            d.push("<!DOCTYPE html>");
            d.push("<html><head>", a, "</head><body>", "", "</body></html>");
            a = c.Xd("iframe", {
                frameborder: 0,
                style: "border:0;vertical-align:bottom;display: none",
                src: 'javascript:""'
            });
            b.appendChild(a);
            b = d.join("");
            a = a.contentDocument || a.contentWindow.document;
            a.open();
            a.write(b);
            a.close()
        }

        function cq(a, b) {
            var c = Sf(Of(a.responseXML), "html_content") || "",
                d = E(window.pyv_related_box_id || "watch-related");
            d && 0 != d.innerHTML.indexOf(c) && (d.insertBefore(cc(c), d.firstChild), zg(b))
        };
        var dq = m,
            eq = m,
            fq = m;

        function gq(a) {
            a = a.replace(";dc_seed=", ";kmyd=watch-channel-brand-div;dc_seed=");
            U("instream_google_companion_ad_div", "google_companion_ad_div");
            T("ad300x250", "watch-channel-brand-div");
            var b = E("ad300x250");
            if (b !== m) {
                var c = Math.round(1E4 * Math.random());
                b.innerHTML = ['<iframe src="', a, '" name="ifr_300x250ad', c, '" id="ifr_300x250ad', c, '" width="300" height="250" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>'].join("")
            }
            hq()
        }

        function iq(a) {
            a = a.replace(";dc_seed=", ";kmyd=watch-longform-ad;dc_seed=");
            U("instream_google_companion_ad_div");
            T("watch-longform-ad");
            T("watch-longform-text");
            T("watch-longform-ad-placeholder");
            var b = E("watch-longform-ad-placeholder"),
                c = Math.round(1E4 * Math.random());
            b.innerHTML = ['<iframe src="', a, '" name="ifr_300x60ad', c, '" id="ifr_300x60ad', c, '" width="300" height="60" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>'].join("");
            hq()
        }

        function jq(a) {
            var b = E("watch-longform-ad-placeholder");
            a ? (U("instream_google_companion_ad_div"), T("watch-longform-ad"), T("watch-longform-text"), T("watch-longform-ad-placeholder"), b.innerHTML = a) : U("watch-longform-ad");
            hq()
        }

        function kq(a, b) {
            var c = "ad300x250",
                d = 300,
                e = 250;
            "video" == a && (c = "watch-longform-ad-placeholder", d = 300, e = 60, U("instream_google_companion_ad_div"));
            var f = decodeURIComponent(b);
            E(c).innerHTML = ['<iframe name="fw_ad" id="fw_ad" ', 'width="' + d + '" height="' + e + '" ', 'marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>'].join("");
            var h = E("fw_ad"),
                h = h.contentWindow ? h.contentWindow : h.contentDocument.document ? h.contentDocument.document : h.contentDocument,
                d = navigator.userAgent.toLowerCase(),
                c = -1 != d.indexOf("msie"),
                d = -1 != d.indexOf("opera");
            h.document.open();
            h.document.write(f);
            c || d ? N(function() {
                h.document.close()
            }, 7500) : h.document.close();
            "video" == a ? T("watch-longform-ad") : T("watch-channel-brand-div");
            hq()
        }

        function lq() {
            T("watch-channel-brand-div");
            U("ad300x250");
            E("google_companion_ad_div").style.height = "250px";
            hq()
        }

        function mq() {
            U("watch-longform-ad");
            hq()
        }

        function nq() {
            U("watch-channel-brand-div");
            hq()
        }

        function hq() {
            W("watchads-adLoad")
        }

        function oq(a) {
            Tc("POPOUT_AD_SLOTS", a)
        }

        function pq() {
            var a = E("watch-longform-popup");
            a && (a.disabled = l)
        }

        function qq(a) {
            var b = E("watch-longform-popup");
            b && (b.disabled = n);
            oq(a)
        }

        function rq(a) {
            window.google_ad_output = "html";
            a ? (window.google_ad_height = "60", window.google_ad_format = "300x60_as", window.google_container_id = "instream_google_companion_ad_div") : (window.google_ad_height = "250", window.google_ad_format = "300x250_as", window.google_container_id = "google_companion_ad_div")
        }

        function sq(a) {
            a ? (U("watch-longform-ad-placeholder", "watch-channel-brand-div"), T("watch-longform-text", "watch-longform-ad", "instream_google_companion_ad_div")) : (U("ad300x250", "watch-longform-ad"), T("google_companion_ad_div", "watch-channel-brand-div"));
            hq()
        }

        function tq() {
            U("instream_google_companion_ad_div", "watch-longform-text", "watch-longform-ad-placeholder");
            hq()
        };
        u("yt.www.watch.ads.setAdId", function(a) {
            window.ad_debug = a
        });
        u("yt.www.watch.ads.showForcedMpu", function(a) {
            E("ad300x250").innerHTML = ['<iframe src="', a, '" name="ifr_300x250ad" id="ifr_300x250ad" width="300" height="250" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>'].join("");
            T("ad300x250")
        });
        u("yt.www.watch.ads.createGutSlot", function(a) {
            googletag && (dq = googletag.defineSlot(a, [
                [300, 250],
                [300, 60]
            ], "yt-gut-content"), dq.set("ad_type", "flash"), dq.addService(googletag.companionAds()), googletag.enableServices(), a = dq.getSizes(), eq = a[0], fq = a[1])
        });
        u("yt.www.watch.ads.handleMoveGutCompanion", function(a) {
            a = a ? E("instream_google_companion_ad_div") : E("google_companion_ad_div");
            var b = E("yt-gut-content");
            b ? b.innerHTML = "" : (b = document.createElement("div"), b.id = "yt-gut-content");
            a && (a.innerHTML = "", a.appendChild(b));
            hq()
        });
        u("yt.www.watch.ads.setGutSlotSizes", function(a, b) {
            if (dq) {
                var c = dq.getSizes();
                Qa(c);
                b && c.push(eq);
                a && c.push(fq)
            }
        });
        u("yt.www.watch.ads.handleSetCompanion", gq);
        u("yt.www.watch.ads.handleSetCompanionForInstream", iq);
        u("yt.www.watch.ads.handleSetCompanionForLongform", jq);
        u("yt.www.watch.ads.handleSetCompanionForFreewheel", kq);
        u("yt.www.watch.ads.handleHideCompanion", lq);
        u("yt.www.watch.ads.handleHideCompanionForInstream", mq);
        u("yt.www.watch.ads.disablePopoutButton", pq);
        u("yt.www.watch.ads.enablePopoutButton", qq);
        u("yt.www.watch.ads.handleCloseMpuCompanion", nq);
        u("yt.www.watch.ads.updatePopoutAds", oq);
        u("yt.www.watch.ads.handleSetAfvCompanionVars", rq);
        u("yt.www.watch.ads.handleShowAfvCompanionAdDiv", sq);
        u("yt.www.watch.ads.handleHideAfvInstreamCompanionAdDiv", tq);
        u("yt.www.watch.ads.AD_LOAD_TOPIC", "watchads-adLoad");
        u("yt.www.ads.pyv.pyvWatchAfcWithPpvCallback", function(a) {
            Xp(a);
            0 < a.length && (a = G("related-video-featured"), 2 == a.length ? B(a[0], "related-video-featured-booster") ? T(a[1]) : T(a[0]) : x(a, function(a) {
                T(a)
            }))
        });
        u("yt.www.ads.pyv.pyvWatchAfcCallback", Xp);
        u("yt.www.ads.pyv.pyvSearchRhsAfcCallback", function(a) {
            var b = E("pyv-ads");
            0 != a.length && b && aq(a, b, "search_rhs")
        });
        u("yt.www.ads.pyv.pyvSearchTopAfcCallback", function(a) {
            var b = E("pyv-top-ads");
            !a.length || !b ? $p(b) : aq(a, b, "search_top")
        });
        u("yt.www.ads.pyv.pyvHomeAfcCallback", function(a) {
            var b, c;
            b = E("shelf-pyv-container");
            E("feed-pyv-container") ? (b = "feed", c = "feed-pyv-container") : b ? (b = "shelf", c = "shelf-pyv-container") : (b = "homepage", c = "pyv-container");
            var d = E(c);
            !d || 0 == a.length ? "feed" == b || "shelf" == b ? fc(d) : Vp() : Wp(b, a[0], d, function() {
                var a = document.getElementById("pyv-large-dest-url-image"),
                    b = document.getElementById("pyv-feed-item-headline-dest-url"),
                    c = document.getElementById("pyv-feed-item-thumb-dest-url"),
                    j = document.getElementById("pyv-shelf-dest-url"),
                    q = document.getElementById("pyv-large-dest-url");
                a && a.setAttribute("href", Up);
                b && b.setAttribute("href", Up);
                c && c.setAttribute("href", Up);
                j && j.setAttribute("href", Up);
                q && q.setAttribute("href", Up);
                Ej(d)
            })
        });
        u("yt.www.ads.pyv.showHomepagePpvAd", Vp);
        u("yt.www.ads.pyv.showPpvOnWatch", Yp);
        u("yt.www.ads.pyv.loadPyvIframe", bq);
        u("yt.www.ads.pyv.loadPyvAfsScript", function(a) {
            eg("/pyv_afs_ads?query=" + a, k)
        });
        u("yt.www.ads.pyv.hijackPyvSlotForCompanion", function(a, b) {
            if (window.pyv_backfill_vars || window.pyv_backfill_with_ppv) window.pyv_backfill_vars = window.pyv_backfill_with_ppv = n, Rf("/pyv?" + Pe({
                video_id: a,
                ad_type: "watch_related_companion"
            }), {
                method: "GET",
                onComplete: function(a) {
                    a && cq(a, b)
                }
            })
        });
        u("yt.www.ads.pyv.pyvSlotCompanionCallback", cq);
        u("yt.www.ads.pyv.backfillCompanionWithPyv", function() {
            window.pyv_backfill_vars ? bq(window.pyv_backfill_vars) : window.pyv_backfill_with_ppv && Yp();
            window.pyv_backfill_vars = window.pyv_backfill_with_ppv = n
        });
        u("yt.www.ads.pyv.updatePyvSlotCompanionLabel", function(a) {
            var b = E("pyv-slot-companion-status-label");
            b && (b.innerText = a ? Sp : Tp)
        });
        Wc("pyv_related_box_id");
        u("setCompanion", gq);
        u("setInstreamCompanion", iq);
        u("setLongformCompanion", jq);
        u("setFreewheelCompanion", kq);
        u("closeInPageAdIframe", lq);
        u("hideInstreamCompanion", mq);
        u("disablePopout", pq);
        u("enablePopout", qq);
        u("closeMpuCompanion", nq);
        u("updatePopAds", oq);
        u("setAfvCompanionVars", rq);
        u("showAfvCompanionAdDiv", sq);
        u("hideAfvInstreamCompanionAdDiv", tq);
        window.yt = window.yt || {};
        u("_gel", E);
        u("_hasclass", B);
        u("_addclass", y);
        u("_removeclass", z);
        u("_toggleclass", db);
        u("_showdiv", T);
        u("_hidediv", U);
        u("_togglediv", ve);
        u("_ajax", Nf);
        u("goog.bind", t);
        u("goog.dom.getElementsByTagNameAndClass", function(a, b, c) {
            return J(a, b, c)
        });
        u("goog.dom.getFirstElementChild", gc);
        u("goog.array.forEach", x);
        u("goog.array.indexOf", Ia);
        u("goog.array.contains", Pa);
        u("yt.dom.hasAncestor", nd);
        u("yt.setConfig", Tc);
        u("yt.getConfig", L);
        u("yt.setAjaxToken", Vc);
        u("yt.registerGlobal", Wc);
        u("yt.setTimeout", N);
        u("yt.setInterval", Xc);
        u("yt.clearTimeout", Yc);
        u("yt.clearInterval", Zc);
        u("yt.setMsg", function(a) {
            Uc(Qc, arguments)
        });
        u("yt.setGoogMsg", function(a) {
            Uc(Qc, arguments)
        });
        u("yt.getMsg", O);
        u("yt.events.listen", Q);
        u("yt.events.unlisten", Ad);
        u("yt.events.stopPropagation", Cd);
        u("yt.events.preventDefault", function(a) {
            a = a || window.event;
            a.returnValue = n;
            a.preventDefault && a.preventDefault();
            return n
        });
        u("yt.events.getTarget", Bd);
        u("yt.events.clear", function() {
            for (var a in ud) yd(a)
        });
        u("yt.events.Event", sd);
        sd.prototype.preventDefault = sd.prototype.preventDefault;
        sd.prototype.stopPropagation = sd.prototype.stopPropagation;
        u("yt.pubsub.subscribe", V);
        u("yt.pubsub.unsubscribeByKey", qf);
        u("yt.pubsub.publish", W);
        u("yt.www.init", Mp);
        u("yt.www.dispose", Np);
        Q(window, "load", Mp);
        Q(window, "unload", Np);
        u("yt.www.logError", Op);
        window.onerror = Op;
        V("init", function() {
            Bp.push(Q(window, "resize", wp));
            Bp.push(Q(window, "scroll", yp));
            N(vp, 0)
        });
        V("dispose", xi);
        V("init", xi);
        u("yt.uix.FormInput.selectOnChangeActionIE", function(a) {
            nh.getInstance().Ja(a)
        });
        V("init", function() {
            ph()
        });
        u("goog.i18n.bidi.isRtlText", Mc);
        u("goog.i18n.bidi.setDirAttribute", function(a, b) {
            var c = b.value,
                d = "";
            Mc(c) ? d = "rtl" : Mc(c) || (d = "ltr");
            b.dir = d
        });
        u("yt.style.toggle", ve);
        u("yt.style.setDisplayed", qe);
        u("yt.style.isDisplayed", re);
        u("yt.style.setVisible", te);
        u("yt.net.ajax.sendRequest", Rf);
        u("yt.net.ajax.getRootNode", Of);
        u("yt.net.ajax.getNodeValue", Sf);
        u("yt.net.delayed.register", Yf);
        u("yt.net.delayed.load", $f);
        u("yt.net.delayed.markAsLoaded", function(a) {
            a in Wf && (Xf[a] = l)
        });
        u("yt.net.scriptloader.load", fg);
        u("yt.net.styleloader.load", function(a) {
            return gg(a)
        });
        u("goog.dom.forms.getFormDataString", Dc);
        u("yt.uri.buildQueryData", Pe);
        u("yt.uri.appendQueryData", Qe);
        u("yt.www.feedback.start", function(a, b, c, d) {
            try {
                c = (c || "59") + "";
                b = b || {};
                var e = L("SESSION_INDEX");
                try {
                    var f = s("yt.www.watch.player.pause");
                    f && f();
                    var h = af.getInstance();
                    b.flashVersion = h.getVersion().join(".")
                } catch (j) {}
                a = {
                    productId: c,
                    locale: a,
                    abuseLink: "https://web.archive.org/web/20121218011521/https://support.google.com/youtube/bin/answer.py?answer=140536"
                };
                e && (a.authuser = e + "");
                d && (a.bucket = d);
                fp(a, b);
                return n
            } catch (q) {
                return l
            }
        });
        u("yt.www.feedback.startHelp", function(a, b, c, d, e) {
            fp({
                productId: (c || "59") + "",
                flow: "help",
                helpCenterPath: d || "/youtube",
                helpCenterContext: e,
                anchor: a,
                locale: b,
                showHelpCenterLink: l
            })
        });
        u("yt.www.feedback.displayLink", sp);
        V("init", sp);
        u("yt.www.help.bootstrap.init", tp);
        V("init", tp);
        u("yt.net.cookies.set", Id);
        u("yt.net.cookies.get", Jd);
        u("yt.net.cookies.remove", Kd);
        u("yt.window.redirect", gh);
        u("yt.window.popup", ih);
        V("init", function() {
            L("SBOX_JS_URL") && eg(L("SBOX_JS_URL"), function() {
                s("yt.www.masthead.searchbox.init")()
            })
        });
        Mg(Og);
        Mg(Ci);
        Mg(Ji);
        Mg(Li);
        Mg(nh);
        Mg(Yg);
        Mg(Qi);
        Mg(Si);
        Mg(Ui);
        Mg(Vi);
        Mg(Yi);
        Mg(hj);
        Mg($i);
        Mg(kj);
        Mg(ah);
        u("yt.player.update", fi);
        u("yt.player.embed", ei);
        u("yt.flash.embed", hf);
        u("yt.flash.dismissFlashUpgradePromo", function() {
            Ld.getInstance();
            Rd(Td.ve, l);
            Sd()
        });
        u("yt.www.watch.activity.getTimeSinceActive", Tn);
        u("yt.www.watch.activity.setTimestamp", Sn);
        u("yt.www.watch.player.handleEndPreview", function(a) {
            var b = zm();
            b && b.stopVideo && b.stopVideo();
            (b = E("watch-checkout-offers")) && W("ypc-init-purchase", b, a)
        });
        u("yt.www.watch.player.openPopup", function(a, b, c) {
            var d = m,
                e = zm();
            a = "/tv?v=" + a;
            e && (a += "&vq=" + e.getPlaybackQuality(), d = Math.round(e.getCurrentTime()), e.stopVideo());
            L("POPOUT_AD_SLOTS") && (a += "&pop_ads=" + L("POPOUT_AD_SLOTS"));
            d && 10 < d && (a += "&t=" + d);
            hh(a, {
                width: b,
                height: c,
                resizable: l,
                location: n,
                statusbar: n,
                menubar: n,
                scrollbars: n,
                toolbar: n
            })
        });
        u("yt.www.watch.activity.init", Pn);
        u("yt.www.watch.player.updateConfig", function(a) {
            a = a instanceof We ? a.args : a.args;
            var b = n;
            a.jsapicallback = Mo;
            var c;
            var d = Oe(window.location.hash);
            (c = d.t || d.at) ? (Fo.t = d.t, Fo.at = d.at, d = window.location.hash.replace(/\bat=[^&]*&?/, ""), window.location.hash = d && "#" != d ? d : "#!", c = Bo(c)) : c = 0;
            c && (a.start = c, a.resume = 1, b = l);
            return b
        });
        u("yt.www.watch.player.init", function() {
            Yo();
            Xc(Yo, 1E3);
            Go.push(V("player-shortcut-rewind", Wo));
            Go.push(V("player-shortcut-fast-forward", Vo));
            Go.push(V("player-shortcut-play-pause", Uo))
        });
        u("yt.www.watch.player.seekTo", Xo);
        u("yt.www.watch.player.play", function() {
            var a = zm();
            a && a.playVideo()
        });
        u("yt.www.watch.player.pause", function() {
            var a = zm();
            a && a.pauseVideo()
        });
        u("yt.www.watch.player.saveResumeOffset", Jo);
        u("checkCurrentVideo", function(a, b, c) {
            var d = L("VIDEO_ID"),
                e = d == a,
                f = Fl ? Gl().Va() : m;
            b = !b || b == f;
            if (d && (!e || !b)) d = m, b && (d = Gl(), e = Gk(d.j, [a])[0], d = e === k ? "" : Hk(d.j, e)), d || (d = c ? c : Se(window.location.href, {
                v: a,
                feature: m
            })), d && gh(d)
        });
        u("trackAnnotationsEvent", function(a, b, c) {
            var d = L("ANALYTICS_ANNOTATIONS_TRACKER");
            window._gaq.push(function() {
                d._trackEvent(a, b, c)
            })
        });
        u("reportFlashTiming", aa);
        u("reportTimingMaps", function(a, b) {
            for (var c in a) zi(c, a[c]);
            for (var d in b) c = yi.info_args || {}, c[d] = b[d], yi.info_args = c;
            Bi()
        });
        u("yt.www.watch.playlists.editAnnotation", function() {
            A(E("watch-video-annotation-editable"), "not-editing", "editing");
            E("watch-video-annotation-textarea").focus();
            var a = E("watch-video-annotation-form");
            P(a, "setup") || (dd(a, "setup", "true"), a = K("cancel-button", a), Q(a, "click", function(a) {
                a.preventDefault();
                Zo()
            }))
        });
        u("yt.www.watch.playlists.removeAnnotation", function() {
            var a = E("watch-video-annotation-form");
            E("watch-video-annotation-textarea").value = "";
            $o(a)
        });
        u("yt.www.watch.playlists.submitForm", function(a) {
            $o(a)
        });
        u("yt.www.watch.player.addSaveResumeOnUnloadListener", function() {
            Q(window, "unload", Lo)
        });
        u("yt.history.enable", function(a, b) {
            var c = Bf(b);
            c.setEnabled.call(c, l, a)
        });
        u("yt.history.disable", function() {
            var a = Bf();
            a.setEnabled.call(a, n)
        });
        u("yt.www.lists.addto.toggleMenu", function(a, b) {
            var c = ah.getInstance(),
                d = Y(c),
                e = E("shared-addto-menu");
            if (b) {
                var f = K("addto-menu", e);
                ch(c, a);
                Ym = z(a, d);
                Xm || (Xm = f.innerHTML);
                c = P(e, "video-ids");
                d = P(a, "video-ids");
                Zm && y(e, "lightweight-panel");
                B(a, "flip") && y(e, "flip");
                d && c != d && (dd(e, "video-ids", d), f.innerHTML = Xm, new $m(a))
            } else Ym && y(a, d), z(e, "flip")
        });
        u("yt.www.lists.data.addto.saveToWatchLater", function(a, b) {
            Ll({
                pd: a,
                od: "WL",
                Bc: b,
                o: function(b, d) {
                    var e = d.list_id || "",
                        f = d.video_count || 1,
                        h = d.videos || [],
                        j = [a],
                        q = O("PLAYLIST_BAR_ADDED_TO_PLAYLIST");
                    Il("WL", e, q, h, f, j)
                },
                onError: k,
                D: k
            })
        });
        u("yt.www.lists.addtowatchlater.init", Sk);
        V("init", Sk);
        V("init", function() {
            V("livestreaming-likes-updated", ym);
            V("sandbar-crop-player", pm);
            V("sandbar-uncrop-player", um)
        });
        u("yt.www.watch.watch5.enableWide", wm);
        u("yt.www.watch.watch5.handleResize", function() {
            Yc(vm);
            vm = N(xm, 200)
        });
        u("yt.www.watch.watch5.updatePlayerSize", xm);
        u("yt.www.watch.watch5.handleLoadMoreRelated", function() {
            U("watch-more-related-button");
            T("watch-more-related", "watch-more-related-loading");
            X("/related_ajax", {
                A: {
                    video_id: L("VIDEO_ID"),
                    action_more_related_videos: 1
                },
                o: function(a, b) {
                    var c = E("watch-more-related");
                    c.innerHTML = b.html;
                    Ej(c)
                }
            })
        });
        u("yt.www.watch.watch5.handleYouTubeMix", function() {
            var a = E("youtube-mix-button");
            a.disabled = l;
            X("/music_ajax", {
                A: {
                    video_id: L("VIDEO_ID"),
                    artist_id: L("ARTIST_ID"),
                    action_get_mix: 1
                },
                o: function(b, c) {
                    a.disabled = n;
                    if ("" != c.list_id) {
                        var d = Gl(),
                            e = new Bk("TL", c.list_id);
                        ml(d, e);
                        e.b = 0;
                        d.mb(l);
                        pl(d, l);
                        nl(d)
                    }
                }
            })
        });
        u("yt.www.watch.watch5.handleToggleMoreFromUser", function(a) {
            var b = B(a, "yt-uix-expander-collapsed"),
                c = E("watch-more-from-user");
            !b && "true" != P(c, "loaded") && (a = {
                user_id: P(a, "video-user-id"),
                video_id: P(a, "video-id"),
                action_channel_videos: 1
            }, X("/watch_ajax", {
                format: "XML",
                method: "GET",
                A: a,
                o: function(a, b) {
                    c.innerHTML = b.html_content;
                    dd(c, "loaded", "true");
                    Ej(c);
                    var f = parseInt(P(E("watch-channel-discoverbox"), "slider-slide-selected"), 10) || 0;
                    J("button", "yt-uix-slider-num", k)[f].click()
                }
            }));
            C(c, "collapsed",
                b)
        });
        u("yt.www.watch.watch5.handleToggleDescription", function(a) {
            if (B(a, "yt-uix-expander-collapsed")) Ag("descriptionClosed", k, k);
            else {
                if ((a = E("watch-source-videos-list")) && "true" != P(a, "loaded")) {
                    dd(a, "loaded", "true");
                    var b = Qe("/watch_ajax", {
                        action_get_video_attributions_component: 1,
                        v: L("VIDEO_ID")
                    });
                    Rf(b, {
                        method: "GET",
                        update: a
                    })
                }
                Ag("descriptionOpened", k, k)
            }
        });
        u("yt.www.watch.watch5.purchaseComplete", function() {
            T(E("watch-player-rental-play-button"));
            var a = E("watch-player-rental-still-frame");
            U(E("watch-player") || E("watch7-player"));
            T(a)
        });
        u("yt.www.watch.actions.init", function() {
            var a = Oe(window.location.hash),
                b = a.action;
            if (b) {
                switch (b) {
                    case "flag":
                        Nm()
                }
                N(function() {
                    Sm("watch-actions-area-container").scrollIntoView()
                }, 0);
                delete a.action;
                a = Pe(a) || "#!";
                window.location.hash = a
            }
        });
        u("yt.www.watch.actions.loadPlusoneLike", function(a, b, c, d, e) {
            new gm(E(a), b, c, d, e, {
                size: "large",
                source: "google:youtube:watch_exp"
            })
        });
        u("yt.www.watch.shortcuts.init", function() {
            Q(document, "keypress", qj)
        });
        u("yt.www.watch.actions.report", function() {
            if (!Gm()) {
                var a = 0,
                    b = zm();
                b && b.pauseVideo && (b.pauseVideo(), a = b.getCurrentTime());
                a = Math.floor(a);
                b = Math.floor(a / 60);
                X("/watch_ajax", {
                    method: "GET",
                    A: {
                        action_get_report_video_component: 1,
                        video_id: L("VIDEO_ID"),
                        t_mins: b,
                        t_secs: a - 60 * b
                    },
                    o: function(a, b) {
                        E("report-video-content").innerHTML = b.report_html;
                        Si.getInstance().Sc(E("report-video-content"));
                        s("yt.www.report.reportvideo.init")()
                    },
                    onError: Mm
                })
            }
        });
        u("yt.www.watch.actions.flag", Nm);
        u("yt.www.watch.actions.hide", function() {
            Im()
        });
        u("yt.www.watch.actions.like", function() {
            Im();
            var a = 0 == Dm();
            Fm(a ? 2 : 0)
        });
        u("yt.www.watch.actions.share", Um);
        u("yt.www.watch.actions.shareWithPlaylist", function() {
            var a = Rm(),
                b = Tm();
            Vm(a, b)
        });
        u("yt.www.watch.actions.addto", function(a) {
            if (Om(a) && !Gm()) {
                Jm();
                a = E("watch-actions-addto");
                var b = L("VIDEO_ID");
                Cm && Cm.ra();
                Cm = new $l(a, b, function() {
                    Hm("watch-actions-addto")
                })
            }
        });
        u("yt.www.watch.actions.stats", function(a) {
            Om(a) && (Jm(), X("/insight_ajax", {
                format: "XML",
                method: "GET",
                A: {
                    action_get_statistics_and_data: 1,
                    v: L("VIDEO_ID")
                },
                o: function(a, c) {
                    Lm(c.html_content);
                    var d = E("stats-opt-out-chbox");
                    d && Q(d, "change", function() {
                        hm(!d.checked)
                    })
                },
                onError: Mm
            }))
        });
        u("yt.www.watch.actions.unlike", function() {
            Im();
            var a = 1 == Dm();
            Fm(a ? 2 : 1)
        });
        u("yt.www.watch.actions.transcript", function(a) {
            Om(a) && (Jm(), s("yt.www.watch.transcript.open")(function() {
                U("watch-actions-loading");
                Hm("watch-actions-transcript")
            }))
        });
        u("yt.www.comments.init", function() {
            L("WATCH7_DELAYED_COMMENTS") ? X("/comments_ajax", {
                method: "POST",
                A: {
                    v: L("VIDEO_ID")
                },
                F: {
                    session_token: M("comments_ajax")
                },
                o: function(a, b) {
                    b && (s("spf.process")(b), nk(), Ej(E("comments-view")))
                }
            }) : nk()
        });
        u("yt.www.comments.initForm", mk);
        u("yt.www.lists.init", function() {
            if (-1 < parseInt(L("PLAYLIST_BAR_PLAYING_INDEX"), 10)) {
                Gl();
                var a = L("AUTOPLAY_DELAY");
                a && Hl(a)
            }
            V("WATCH_LATER_UPDATED", function(a, c) {
                var d = O("PLAYLIST_BAR_ADDED_TO_PLAYLIST");
                Il("WL", a, d, m, 0, c)
            });
            V("player-shortcut-next", function() {
                xl(Gl(), l, "keys")
            });
            V("player-shortcut-prev", function() {
                yl(Gl(), "keys")
            });
            Fl = l
        });
        u("yt.www.lists.getState", function() {
            var a = Gl(),
                b = m;
            if (a) {
                var b = Dk(a.j),
                    c = {};
                x(b, function(a) {
                    c[a] = this.j.getVideoData(a)
                }, a);
                for (var d = a.ja(), e = ol(a), f = a.da() ? a.j.qa : 0, h = [], j = 0; j < b.length; j++) {
                    var q = P(a.J, "start-time" + j) || "",
                        v = P(a.J, "end-time" + j) || "";
                    h[j] = {
                        start: q,
                        end: v
                    }
                }
                b = {
                    autoPlay: e,
                    clipRanges: h,
                    index: d,
                    shuffle: f,
                    videoData: c,
                    videoIds: b || []
                };
                b.autoPlayMax = L("PLAY_ALL_MAX")
            }
            return b
        });
        u("yt.www.lists.registerNearEndEventsWithPlayer", Jl);
        u("yt.www.lists.handleNearPlaybackEnd", function(a) {
            Fl && ol(Gl()) && "NEAR_END" == a.slice(0, -1) && (a = parseInt(a.slice(-1), 10), Cl(Gl(), a))
        });
        u("yt.dom.datasets.get", P);
        u("yt.dom.datasets.set", dd);
        Wc("checkCurrentVideo", "trackAnnotationsEvent", "reportFlashTiming", "shareVideoFromFlash", "setCompanion", "setInstreamCompanion", "setLongformCompanion", "setFreewheelCompanion", "closeInPageAdIframe", "hideInstreamCompanion", "disablePopout", "enablePopout", "closeMpuCompanion", "updatePopAds", "setAfvCompanionVars", "showAfvCompanionAdDiv", "hideAfvInstreamCompanionAdDiv", "showGutCompanion");
        u("yt.www.picker.load", function(a) {
            var b = P(a, "picker-key"),
                c = P(a, "picker-position"),
                d = "yt-picker-" + b + "-" + c;
            if (c = E(d)) a = P(a, "button-menu-id") == d, d = P(c, "loaded"), Dp(c, b, !!a, !!d)
        });
        u("yt.www.picker.displayLang", function() {
            var a = E("yt-picker-language-button");
            Dp(E("yt-picker-language-footer"), "language", n, n, l);
            ee(a)
        });
        u("yt.www.picker.applyGrid", Fp);
        u("yt.www.search.init", function() {
            var a = G("group-container");
            x(a, go);
            var a = K("search-header"),
                b = E("filter-dropdown");
            a && b && (new co(a, b)).init()
        });
        V("init", function() {
            tj = L("THUMB_DELAY_LOAD_BUFFER") || 0;
            wj.push(V("page-init", yj));
            wj.push(V("page-resize", Aj));
            wj.push(V("page-scroll", Cj))
        });
        u("yt.www.thumbnaildelayload.classifyAndLoadVisibleImages", zj);
        V("init", function() {
            for (var a = 0; a < document.forms.length; a++) {
                for (var b = n, c = 0; c < Rp.length; c++) document.forms[a].name == Rp[c] && (b = l);
                c = document.forms[a];
                if ("post" == c.method.toLowerCase() && b == n) {
                    for (var b = n, d = 0; d < c.elements.length; d++) c.elements[d].name == L("XSRF_FIELD_NAME") && (b = l);
                    b || (b = k, b = L("XSRF_TOKEN"), d = document.createElement("input"), d.setAttribute("name", L("XSRF_FIELD_NAME")), d.setAttribute("type", "hidden"), d.setAttribute("value", b), c.appendChild(d))
                }
            }
        });
        u("yt.www.masthead.performSearch", function(a, b) {
            var c = E("masthead-search"),
                d = P(b, a) || "";
            "rentals" == d ? (c.rental.value = 1, c.search_type.value = "") : (c.search_type.value = d, c.rental.value = 0);
            if (c.search_query.value) c.submit();
            else {
                var c = b.innerHTML,
                    e = E("search-btn"),
                    f = e.innerHTML,
                    h = P(e, a) || "";
                e.innerHTML = c;
                dd(e, a, d);
                b.innerHTML = f;
                dd(b, a, h)
            }
            return n
        });
        u("yt.www.masthead.dismissGAPlusMessage", function() {
            var a = Jd("FML", "").split(","),
                b = new Date,
                b = Math.round(b.getTime() / 1E3),
                c = "",
                c = 2 != a.length ? "1," + b : parseInt(a[0], 10) + 1 + "," + b;
            Id("FML", c, 31536E4)
        });
        u("yt.www.masthead.dismissPostLinkingMessage", function() {
            Kd("FML")
        });
        u("yt.www.masthead.dismissCookieAlert", function() {
            Ag("GC_OK", k, k);
            Ld.getInstance();
            Rd(Td.Ch, l);
            Sd()
        });
        u("yt.www.masthead.toggleExpandedMasthead", function() {
            var a = E("masthead-expanded");
            se(a);
            W("masthead-mastfeedr-toggle");
            $('#masthead-expanded').slideToggle( 'slow', '');
            qe("masthead-expanded-acct-sw-container", n);
            var b = E("yt-masthead-dropdown");
            b && db(b, "reversed");
            gn || z(E("masthead-expanded-container"), "accountswitch");
            if (!P(a, "loaded")) {
                if ((b = E("masthead-expanded-menu-gaia-photo")) && !b.src) b.src = P(b, "src");
                X("/playlist_bar_ajax", {
                    A: {
                        action_get_playlists_masthead: 1,
                        feature: "mhee"
                    },
                    format: "JSON",
                    yb: l,
                    o: function(b, d) {
                        E("masthead-expanded-lists-container").innerHTML =
                            d.html;
                        dd(a, "loaded", "true")
                    }
                })
            }
        });
        u("yt.www.masthead.accountswitch.init", function(a) {
            gn = a
        });
        u("yt.www.masthead.accountswitch.toggle", function() {
            se("masthead-expanded-acct-sw-container");
            var a = E("masthead-expanded-container"),
                b = E("masthead-expanded-acct-sw-container");
            if (re(b)) {
                b.style.top = a.offsetTop + "px";
                D && (Nb("7") && !Nb("8")) && (b.style.top = a.offsetTop - (b.offsetTop - a.offsetTop) + "px");
                b = E("masthead-expanded-menu-acct-sw-list");
                b.offsetHeight < a.offsetHeight && (b.style.height = a.offsetHeight - 11 + "px");
                var c = E("masthead-expanded-acct-sw-iframe");
                if (!c) {
                    var d = E("masthead-expanded-menu-acct-sw-list"),
                        c = $b("iframe", {
                            id: "masthead-expanded-acct-sw-iframe",
                            frameborder: 0,
                            src: 'javascript:""'
                        });
                    d.parentNode && d.parentNode.insertBefore(c, d)
                }
                c.style.height = b.offsetHeight - 11 + "px";
                gn || y(a, "accountswitch")
            } else gn || z(a, "accountswitch")
        });
        V("init", function() {
            L("SANDBAR_ENABLED") && Ln("iframes", {
                callback: function() {
                    var a = E("sb-button-notify"),
                        b = E("sb-button-share"),
                        c = new Yn(L("SANDBAR_LOCALE"), L("SESSION_INDEX"), L("SANDBAR_DELEGATED_SESSION_ID"));
                    Q(a, "click", t(c.yh, c));
                    Q(b, "click", t(c.zh, c));
                    W("sandbar-init")
                },
                _c: {
                    jsl: {
                        h: L("GAPI_HINT_PARAMS")
                    }
                }
            })
        });
        u("yt.www.ads.MastheadAd", $j);
        $j.prototype.autoCollapsePremiumYva = $j.prototype.Gh;
        $j.prototype.collapse_ad = $j.prototype.Lh;
        $j.prototype.expand_ad = $j.prototype.Mh;
        $j.prototype.userCollapsePremiumYva = $j.prototype.xd;
        $j.prototype.userExpandPremiumYva = $j.prototype.Jh;
        $j.prototype.userUnexpandPremiumYva = $j.prototype.Kh;
        u("yt.www.home.ads.workaroundIE", function(a) {
            !wk && vk && (wk = l, N(function() {
                a.focus()
            }, 0))
        });
        u("yt.www.home.ads.workaroundLoad", function() {
            vk = l
        });
        u("yt.www.home.ads.workaroundReset", function() {
            wk = n
        });
        u("yt.www.home.ads.writeAdsContentToIframe", function(a, b) {
            var c = E(a).contentDocument || E(a).contentWindow.document;
            c.open();
            c.write("<!DOCTYPE html><html><head></head><body>" + b + "</body></html>");
            D || c.close()
        });
        u("yt.www.channelcard.show", function(a, b) {
            var c, d, e = P(b, "id");
            x(ep, function(a) {
                !d && a.g == e && (d = a.target);
                !c && a.target == b && (c = a)
            });
            c || (c = new dp(a, 0, d), ep.push(c));
            var f = c;
            f.b = n;
            N(t(f.k, f), 1E3);
            !f.e && !f.i && f.get()
        });
        u("yt.www.channelcard.config", {
            "card-action": "yt.www.channelcard.show",
            "card-class": "yt-channel-card",
            "card-delay-show": 200,
            "card-delegate-show": l,
            orientation: "vertical",
            position: "topright"
        });
        u("yt.tracking.doubleclick.trackActivity", function(a, b, c) {
            a = ("https:" == document.location.protocol ? "https://" : "http://") + "fls.doubleclick.net/activityi;src=" + encodeURIComponent(String(L("DBLCLK_ADVERTISER_ID"))) + ";type=" + encodeURIComponent(String(a)) + ";cat=" + encodeURIComponent(String(b));
            c && !c.ord && (a += ";ord=1");
            for (var d in c) a += ";" + encodeURIComponent(String(d)) + "=" + encodeURIComponent(String(c[d]));
            a += ";num=" + pa();
            c = document.createElement("iframe");
            c.src = a;
            c.style.display = "none";
            document.body.appendChild(c)
        });
        u("yt.tracking.track", function(a, b, c) {
            Ag(a, b, c)
        });
        u("yt.tracking.resolution", function() {
            var a = "CSS1Compat" == document.compatMode ? document.documentElement : document.body,
                a = {
                    a: "resolution",
                    width: screen.width,
                    height: screen.height,
                    depth: screen.colorDepth,
                    win_width: a.clientWidth,
                    win_height: a.clientHeight
                };
            window.devicePixelRatio && (a.pixel_ratio = window.devicePixelRatio);
            a = Pe(a);
            zg("/gen_204?" + a, k)
        });
        u("yt.tracking.shareList", Dg);
        u("yt.tracking.shareVideo", Cg);
        u("yt.tracking.shareUrl", function(a, b, c, d) {
            Bg(a, {
                url: b
            }, c, d)
        });
        u("yt.analytics.urchinTracker", function() {});
        u("yt.analytics.trackEvent", cd);
        u("yt.timing.report", Ai);
        u("yt.timing.maybeReport", Bi);
        ad && (!document.documentMode || 8 > document.documentMode) && S(E("ie"), "click", Am, "video-thumb");
        u("yt.www.subscription.autoaction.continueAction", function(a) {
            W("subscription_subscribe", a)
        });
        V("init", function() {
            V("subscription_subscribe", jo);
            V("subscription_unsubscribe", ko)
        });
        u("yt.www.subscriptions.edit.onUpdateSubscription", function(a, b, c, d) {
            c = c || "";
            var e = n;
            (b = E("subscription_level_unsubscribe")) && b.checked && (e = l);
            b = Dc(E("subscription_level_uploads" + c).form);
            Rf("/ajax_subscriptions?" + b, {
                postBody: "session_token=" + a,
                onComplete: function(a) {
                    E("subscribeMessage" + c).innerHTML = Sf(Of(a), "html_content");
                    U("edit_subscription_wrapper" + c);
                    U("edit_subscription_arrow" + c);
                    T("subscribeMessage" + c);
                    c && (E("edit_subscription_opener" + c).style.visibility = "", N(function() {
                        U("subscribeMessage" +
                            c)
                    }, 5E3));
                    if (e) {
                        var b = E("channel-body");
                        a = J("div", "subscribe-div", b);
                        b = J("div", "unsubscribe-div", b);
                        x(a, function(a) {
                            ve(a)
                        });
                        x(b, function(a) {
                            ve(a)
                        });
                        d()
                    }
                }
            })
        });
        u("yt.www.subscriptions.edit.onCancelUpdateSubscription", function(a) {
            a = a || "";
            U("edit_subscription_wrapper" + a);
            U("edit_subscription_arrow" + a);
            a && (E("edit_subscription_opener" + a).style.visibility = "");
            U("alerts")
        });
        u("yt.www.subscriptions.edit.onEditSubscriptionFromRecentActivity", function(a, b, c, d) {
            window["edit_subscription_download_" + c] ? (U("subscribeMessage" + c), ve("edit_subscription_wrapper" + c), ve("edit_subscription_arrow" + c), a = E("edit_subscription_opener" + c), a.style.visibility = "visible" == a.style.visibility ? "" : "visible") : (window["edit_subscription_download_" + c] = l, Rf("/ajax_subscriptions?get_edit_subscription_form=" + b + "&i=" + c, {
                postBody: "session_token=" + a,
                onComplete: function(a) {
                    E("edit_subscription_opener" + c).style.visibility =
                        "visible";
                    var b = document.createElement("div");
                    b.innerHTML = Sf(a.responseXML, "html_content");
                    d.parentNode.insertBefore(b, d);
                    T("edit_subscription_wrapper" + c);
                    T("edit_subscription_arrow" + c)
                }
            }))
        });
        u("yt.www.subscriptions.SubscriptionButton.init", oo);
        u("yt.www.subscriptions.SubscriptionButton.delayedSubscribe", function(a, b) {
            uo(a, b, "delayed-sub", m)
        });
        u("yt.www.account.FeedPrivacyDialog.init", function() {
            V("SHOW-COMMENT-DIALOG", Lj);
            V("SHOW-FAVORITE-DIALOG", Nj);
            V("SHOW-LIKE-DIALOG", Mj);
            V("SHOW-SUBSCRIBE-DIALOG", Kj)
        });
        u("yt.www.account.Lightbox.init", function() {
            new Oj
        });
        u("yt.www.account.Lightbox.show", function() {
            new Oj(l)
        });
        u("yt.www.account.linkgplusloader.init", function() {
            var a = E("body-container");
            S(a, "mousedown", Wj, "link-gplus-lightbox");
            S(a, "click", Zj, "link-gplus-lightbox")
        });
        u("yt.www.account.linkgplusloader.dismiss", function() {
            pj(Qj, "cancel")
        });
        u("yt.www.account.linkgplusloader.gotoContentState", function() {
            mj(Qj, "content")
        });
        u("yt.www.account.linkgplusloader.gotoWorkingState", function() {
            mj(Qj, "working")
        });
        u("yt.www.account.linkgplusloader.show", function() {
            Wj();
            Zj(m)
        });
        u("yt.www.account.linkgplusloader.showDialog", function() {
            mj(Qj, "content");
            oj(Qj);
            var a = K("yt-dialog-fg", E("link-gplus-lb")),
                b = ue(a);
            a.style.position = "fixed";
            a.style.top = "95px";
            b.x && (a.style.left = b.x + "px")
        });
        u("yt.www.account.linkgplusloader.setWaitCursor", Vj);
        V("init", function() {
            if (L("YPC_LOADER_ENABLED")) {
                for (var a = 0; a < bp.length; a++)
                    if (K(bp[a])) {
                        cp();
                        break
                    } V("ypc-delayedloader-load", cp)
            }
        });
        Wc("yt", "goog", "_gel", "googleapisv0", "_hasclass", "_addclass", "_removeclass", "_showdiv", "_hidediv", "_ajax");
        u("yt.www.masthead.extended.redirectWithNewParam", function(a, b) {
            var c, d, e;
            c = window.location.href;
            c = c.split("#");
            d = 2 == c.length ? "#" + c[1] : "";
            c = c[0];
            e = Ne(c);
            e[b] = a;
            e["persist_" + b] = "1";
            c = c.split("?");
            c = c[0];
            gh(c, e, d)
        });
        u("yt.www.insight.setOptOut", hm);
        u("yt.www.watch.survey.takeWatchPageSurvey", function() {
            ap();
            window.open("/watch_page_survey?r2=" + L("SURVEY_REFERER") + "&r1=" + L("SURVEY_SERVLET_NAME") + "&name=" + L("SURVEY_TYPE"), "YouTube_User_Happiness_Survey", "toolbar=no,width=800,height=768,status=no,resizable=yes,fullscreen=no,scrollbars=yes").focus()
        });
        u("yt.www.watch.survey.watchPageSurveyGoAway", ap);
        u("yt.www.watch.survey.checkSurveyCompletedAndShow", function() {
            Qd(Ld.getInstance(), Td.ue) || T("watch_page_survey")
        });
        u("yt.www.user.unblockUserLinkByExternalId", function(a, b) {
            confirm(O("UNBLOCK_USER")) && X("/link_ajax?action_unblock_user=1", {
                format: "XML",
                method: "POST",
                Sa: L("BLOCK_USER_AJAX_XSRF") + "&uid=" + a,
                o: function() {
                    b && window.location.reload()
                }
            })
        });
        u("yt.www.user.blockUserLinkByExternalId", function(a, b) {
            confirm(O("BLOCK_USER")) && X("/link_ajax?action_block_user=1", {
                format: "XML",
                method: "POST",
                Sa: L("BLOCK_USER_AJAX_XSRF") + "&uid=" + a,
                o: function() {
                    b && window.location.reload()
                }
            })
        });
        u("getNextVideoId", function(a) {
            var b = Gl(),
                c = ol(b),
                d = a <= L("PLAY_ALL_MAX");
            return c && d ? b.Vc(a) : ""
        });
        Wc("getNextVideoId");
        V("init", function() {
            L("WATCH_CONTEXT_CLIENTSIDE") && Mg(Pi);
            L("YOODLE_IS_ANIMATED") && new hn(L("YOODLE_ANIMATION_FRAMES"), L("YOODLE_ANIMATION_DURATION"), L("YOODLE_ANIMATION_DELAY"))
        });
    })();


}