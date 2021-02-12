/*=========/=========/=========/=========/=========/=========/=========
    File Name: all.js
    Template Name: Progki Consulting
    Created By: JollyThemes
    Envato Profile: http://themeforest.net/user/jollythemes
    Website: http://www.jollythemes.com
    Version: 1.0
=========/=========/=========/=========/=========/=========/=========*/

/* ------------------------------------------------------------------
	jquery.org
--------------------------------------------------------------------- */
/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function (e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
        if (!e.document) throw new Error("jQuery requires a window with a document");
        return t(e)
    } : t(e)
}("undefined" != typeof window ? window : this, function (e, t) {
    "use strict";
    var n = [], r = e.document, i = Object.getPrototypeOf, o = n.slice, a = n.concat, s = n.push, u = n.indexOf, l = {},
        c = l.toString, f = l.hasOwnProperty, p = f.toString, d = p.call(Object), h = {}, g = function e(t) {
            return "function" == typeof t && "number" != typeof t.nodeType
        }, y = function e(t) {
            return null != t && t === t.window
        }, v = {type: !0, src: !0, noModule: !0};

    function m(e, t, n) {
        var i, o = (t = t || r).createElement("script");
        if (o.text = e, n) for (i in v) n[i] && (o[i] = n[i]);
        t.head.appendChild(o).parentNode.removeChild(o)
    }

    function x(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e
    }

    var b = "3.3.1", w = function (e, t) {
        return new w.fn.init(e, t)
    }, T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    w.fn = w.prototype = {
        jquery: "3.3.1", constructor: w, length: 0, toArray: function () {
            return o.call(this)
        }, get: function (e) {
            return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e]
        }, pushStack: function (e) {
            var t = w.merge(this.constructor(), e);
            return t.prevObject = this, t
        }, each: function (e) {
            return w.each(this, e)
        }, map: function (e) {
            return this.pushStack(w.map(this, function (t, n) {
                return e.call(t, n, t)
            }))
        }, slice: function () {
            return this.pushStack(o.apply(this, arguments))
        }, first: function () {
            return this.eq(0)
        }, last: function () {
            return this.eq(-1)
        }, eq: function (e) {
            var t = this.length, n = +e + (e < 0 ? t : 0);
            return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
        }, end: function () {
            return this.prevObject || this.constructor()
        }, push: s, sort: n.sort, splice: n.splice
    }, w.extend = w.fn.extend = function () {
        var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, u = arguments.length, l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++) if (null != (e = arguments[s])) for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
    }, w.extend({
        expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
            throw new Error(e)
        }, noop: function () {
        }, isPlainObject: function (e) {
            var t, n;
            return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof(n = f.call(t, "constructor") && t.constructor) && p.call(n) === d)
        }, isEmptyObject: function (e) {
            var t;
            for (t in e) return !1;
            return !0
        }, globalEval: function (e) {
            m(e)
        }, each: function (e, t) {
            var n, r = 0;
            if (C(e)) {
                for (n = e.length; r < n; r++) if (!1 === t.call(e[r], r, e[r])) break
            } else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
            return e
        }, trim: function (e) {
            return null == e ? "" : (e + "").replace(T, "")
        }, makeArray: function (e, t) {
            var n = t || [];
            return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n
        }, inArray: function (e, t, n) {
            return null == t ? -1 : u.call(t, e, n)
        }, merge: function (e, t) {
            for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
            return e.length = i, e
        }, grep: function (e, t, n) {
            for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++) (r = !t(e[o], o)) !== s && i.push(e[o]);
            return i
        }, map: function (e, t, n) {
            var r, i, o = 0, s = [];
            if (C(e)) for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && s.push(i); else for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
            return a.apply([], s)
        }, guid: 1, support: h
    }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
        l["[object " + t + "]"] = t.toLowerCase()
    });

    function C(e) {
        var t = !!e && "length" in e && e.length, n = x(e);
        return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
    }

    var E = function (e) {
        var t, n, r, i, o, a, s, u, l, c, f, p, d, h, g, y, v, m, x, b = "sizzle" + 1 * new Date, w = e.document, T = 0,
            C = 0, E = ae(), k = ae(), S = ae(), D = function (e, t) {
                return e === t && (f = !0), 0
            }, N = {}.hasOwnProperty, A = [], j = A.pop, q = A.push, L = A.push, H = A.slice, O = function (e, t) {
                for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
                return -1
            },
            P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]", R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
            W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
            $ = new RegExp(M + "+", "g"), B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            F = new RegExp("^" + M + "*," + M + "*"), _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"), X = new RegExp(W),
            U = new RegExp("^" + R + "$"), V = {
                ID: new RegExp("^#(" + R + ")"),
                CLASS: new RegExp("^\\.(" + R + ")"),
                TAG: new RegExp("^(" + R + "|[*])"),
                ATTR: new RegExp("^" + I),
                PSEUDO: new RegExp("^" + W),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + P + ")$", "i"),
                needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
            }, G = /^(?:input|select|textarea|button)$/i, Y = /^h\d$/i, Q = /^[^{]+\{\s*\[native \w/,
            J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, K = /[+~]/,
            Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"), ee = function (e, t, n) {
                var r = "0x" + t - 65536;
                return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
            }, te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ne = function (e, t) {
                return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
            }, re = function () {
                p()
            }, ie = me(function (e) {
                return !0 === e.disabled && ("form" in e || "label" in e)
            }, {dir: "parentNode", next: "legend"});
        try {
            L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType
        } catch (e) {
            L = {
                apply: A.length ? function (e, t) {
                    q.apply(e, H.call(t))
                } : function (e, t) {
                    var n = e.length, r = 0;
                    while (e[n++] = t[r++]) ;
                    e.length = n - 1
                }
            }
        }

        function oe(e, t, r, i) {
            var o, s, l, c, f, h, v, m = t && t.ownerDocument, T = t ? t.nodeType : 9;
            if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;
            if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) {
                if (11 !== T && (f = J.exec(e))) if (o = f[1]) {
                    if (9 === T) {
                        if (!(l = t.getElementById(o))) return r;
                        if (l.id === o) return r.push(l), r
                    } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r
                } else {
                    if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
                    if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r
                }
                if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
                    if (1 !== T) m = t, v = e; else if ("object" !== t.nodeName.toLowerCase()) {
                        (c = t.getAttribute("id")) ? c = c.replace(te, ne) : t.setAttribute("id", c = b), s = (h = a(e)).length;
                        while (s--) h[s] = "#" + c + " " + ve(h[s]);
                        v = h.join(","), m = K.test(e) && ge(t.parentNode) || t
                    }
                    if (v) try {
                        return L.apply(r, m.querySelectorAll(v)), r
                    } catch (e) {
                    } finally {
                        c === b && t.removeAttribute("id")
                    }
                }
            }
            return u(e.replace(B, "$1"), t, r, i)
        }

        function ae() {
            var e = [];

            function t(n, i) {
                return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i
            }

            return t
        }

        function se(e) {
            return e[b] = !0, e
        }

        function ue(e) {
            var t = d.createElement("fieldset");
            try {
                return !!e(t)
            } catch (e) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t), t = null
            }
        }

        function le(e, t) {
            var n = e.split("|"), i = n.length;
            while (i--) r.attrHandle[n[i]] = t
        }

        function ce(e, t) {
            var n = t && e, r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (n) while (n = n.nextSibling) if (n === t) return -1;
            return e ? 1 : -1
        }

        function fe(e) {
            return function (t) {
                return "input" === t.nodeName.toLowerCase() && t.type === e
            }
        }

        function pe(e) {
            return function (t) {
                var n = t.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && t.type === e
            }
        }

        function de(e) {
            return function (t) {
                return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e
            }
        }

        function he(e) {
            return se(function (t) {
                return t = +t, se(function (n, r) {
                    var i, o = e([], n.length, t), a = o.length;
                    while (a--) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                })
            })
        }

        function ge(e) {
            return e && "undefined" != typeof e.getElementsByTagName && e
        }

        n = oe.support = {}, o = oe.isXML = function (e) {
            var t = e && (e.ownerDocument || e).documentElement;
            return !!t && "HTML" !== t.nodeName
        }, p = oe.setDocument = function (e) {
            var t, i, a = e ? e.ownerDocument || e : w;
            return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) {
                return e.className = "i", !e.getAttribute("className")
            }), n.getElementsByTagName = ue(function (e) {
                return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length
            }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) {
                return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length
            }), n.getById ? (r.filter.ID = function (e) {
                var t = e.replace(Z, ee);
                return function (e) {
                    return e.getAttribute("id") === t
                }
            }, r.find.ID = function (e, t) {
                if ("undefined" != typeof t.getElementById && g) {
                    var n = t.getElementById(e);
                    return n ? [n] : []
                }
            }) : (r.filter.ID = function (e) {
                var t = e.replace(Z, ee);
                return function (e) {
                    var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                    return n && n.value === t
                }
            }, r.find.ID = function (e, t) {
                if ("undefined" != typeof t.getElementById && g) {
                    var n, r, i, o = t.getElementById(e);
                    if (o) {
                        if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                        i = t.getElementsByName(e), r = 0;
                        while (o = i[r++]) if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                    }
                    return []
                }
            }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
            } : function (e, t) {
                var n, r = [], i = 0, o = t.getElementsByTagName(e);
                if ("*" === e) {
                    while (n = o[i++]) 1 === n.nodeType && r.push(n);
                    return r
                }
                return o
            }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
                if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e)
            }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) {
                h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]")
            }), ue(function (e) {
                e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                var t = d.createElement("input");
                t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:")
            })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) {
                n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W)
            }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e, r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
            } : function (e, t) {
                if (t) while (t = t.parentNode) if (t === e) return !0;
                return !1
            }, D = t ? function (e, t) {
                if (e === t) return f = !0, 0;
                var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1)
            } : function (e, t) {
                if (e === t) return f = !0, 0;
                var n, r = 0, i = e.parentNode, o = t.parentNode, a = [e], s = [t];
                if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
                if (i === o) return ce(e, t);
                n = e;
                while (n = n.parentNode) a.unshift(n);
                n = t;
                while (n = n.parentNode) s.unshift(n);
                while (a[r] === s[r]) r++;
                return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0
            }, d) : d
        }, oe.matches = function (e, t) {
            return oe(e, null, null, t)
        }, oe.matchesSelector = function (e, t) {
            if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try {
                var r = m.call(e, t);
                if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
            } catch (e) {
            }
            return oe(t, d, null, [e]).length > 0
        }, oe.contains = function (e, t) {
            return (e.ownerDocument || e) !== d && p(e), x(e, t)
        }, oe.attr = function (e, t) {
            (e.ownerDocument || e) !== d && p(e);
            var i = r.attrHandle[t.toLowerCase()],
                o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
            return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null
        }, oe.escape = function (e) {
            return (e + "").replace(te, ne)
        }, oe.error = function (e) {
            throw new Error("Syntax error, unrecognized expression: " + e)
        }, oe.uniqueSort = function (e) {
            var t, r = [], i = 0, o = 0;
            if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) {
                while (t = e[o++]) t === e[o] && (i = r.push(o));
                while (i--) e.splice(r[i], 1)
            }
            return c = null, e
        }, i = oe.getText = function (e) {
            var t, n = "", r = 0, o = e.nodeType;
            if (o) {
                if (1 === o || 9 === o || 11 === o) {
                    if ("string" == typeof e.textContent) return e.textContent;
                    for (e = e.firstChild; e; e = e.nextSibling) n += i(e)
                } else if (3 === o || 4 === o) return e.nodeValue
            } else while (t = e[r++]) n += i(t);
            return n
        }, (r = oe.selectors = {
            cacheLength: 50,
            createPseudo: se,
            match: V,
            attrHandle: {},
            find: {},
            relative: {
                ">": {dir: "parentNode", first: !0},
                " ": {dir: "parentNode"},
                "+": {dir: "previousSibling", first: !0},
                "~": {dir: "previousSibling"}
            },
            preFilter: {
                ATTR: function (e) {
                    return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                }, CHILD: function (e) {
                    return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e
                }, PSEUDO: function (e) {
                    var t, n = !e[6] && e[2];
                    return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                }
            },
            filter: {
                TAG: function (e) {
                    var t = e.replace(Z, ee).toLowerCase();
                    return "*" === e ? function () {
                        return !0
                    } : function (e) {
                        return e.nodeName && e.nodeName.toLowerCase() === t
                    }
                }, CLASS: function (e) {
                    var t = E[e + " "];
                    return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) {
                        return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                    })
                }, ATTR: function (e, t, n) {
                    return function (r) {
                        var i = oe.attr(r, e);
                        return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"))
                    }
                }, CHILD: function (e, t, n, r, i) {
                    var o = "nth" !== e.slice(0, 3), a = "last" !== e.slice(-4), s = "of-type" === t;
                    return 1 === r && 0 === i ? function (e) {
                        return !!e.parentNode
                    } : function (t, n, u) {
                        var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling", y = t.parentNode,
                            v = s && t.nodeName.toLowerCase(), m = !u && !s, x = !1;
                        if (y) {
                            if (o) {
                                while (g) {
                                    p = t;
                                    while (p = p[g]) if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                                    h = g = "only" === e && !h && "nextSibling"
                                }
                                return !0
                            }
                            if (h = [a ? y.firstChild : y.lastChild], a && m) {
                                x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d];
                                while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if (1 === p.nodeType && ++x && p === t) {
                                    c[e] = [T, d, x];
                                    break
                                }
                            } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x) while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
                            return (x -= i) === r || x % r == 0 && x / r >= 0
                        }
                    }
                }, PSEUDO: function (e, t) {
                    var n, i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
                    return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) {
                        var r, o = i(e, t), a = o.length;
                        while (a--) e[r = O(e, o[a])] = !(n[r] = o[a])
                    }) : function (e) {
                        return i(e, 0, n)
                    }) : i
                }
            },
            pseudos: {
                not: se(function (e) {
                    var t = [], n = [], r = s(e.replace(B, "$1"));
                    return r[b] ? se(function (e, t, n, i) {
                        var o, a = r(e, null, i, []), s = e.length;
                        while (s--) (o = a[s]) && (e[s] = !(t[s] = o))
                    }) : function (e, i, o) {
                        return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop()
                    }
                }), has: se(function (e) {
                    return function (t) {
                        return oe(e, t).length > 0
                    }
                }), contains: se(function (e) {
                    return e = e.replace(Z, ee), function (t) {
                        return (t.textContent || t.innerText || i(t)).indexOf(e) > -1
                    }
                }), lang: se(function (e) {
                    return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(), function (t) {
                        var n;
                        do {
                            if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                        } while ((t = t.parentNode) && 1 === t.nodeType);
                        return !1
                    }
                }), target: function (t) {
                    var n = e.location && e.location.hash;
                    return n && n.slice(1) === t.id
                }, root: function (e) {
                    return e === h
                }, focus: function (e) {
                    return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                }, enabled: de(!1), disabled: de(!0), checked: function (e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                }, selected: function (e) {
                    return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                }, empty: function (e) {
                    for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                    return !0
                }, parent: function (e) {
                    return !r.pseudos.empty(e)
                }, header: function (e) {
                    return Y.test(e.nodeName)
                }, input: function (e) {
                    return G.test(e.nodeName)
                }, button: function (e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && "button" === e.type || "button" === t
                }, text: function (e) {
                    var t;
                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                }, first: he(function () {
                    return [0]
                }), last: he(function (e, t) {
                    return [t - 1]
                }), eq: he(function (e, t, n) {
                    return [n < 0 ? n + t : n]
                }), even: he(function (e, t) {
                    for (var n = 0; n < t; n += 2) e.push(n);
                    return e
                }), odd: he(function (e, t) {
                    for (var n = 1; n < t; n += 2) e.push(n);
                    return e
                }), lt: he(function (e, t, n) {
                    for (var r = n < 0 ? n + t : n; --r >= 0;) e.push(r);
                    return e
                }), gt: he(function (e, t, n) {
                    for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                    return e
                })
            }
        }).pseudos.nth = r.pseudos.eq;
        for (t in{radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) r.pseudos[t] = fe(t);
        for (t in{submit: !0, reset: !0}) r.pseudos[t] = pe(t);

        function ye() {
        }

        ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = oe.tokenize = function (e, t) {
            var n, i, o, a, s, u, l, c = k[e + " "];
            if (c) return t ? 0 : c.slice(0);
            s = e, u = [], l = r.preFilter;
            while (s) {
                n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
                    value: n,
                    type: i[0].replace(B, " ")
                }), s = s.slice(n.length));
                for (a in r.filter) !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({
                    value: n,
                    type: a,
                    matches: i
                }), s = s.slice(n.length));
                if (!n) break
            }
            return t ? s.length : s ? oe.error(e) : k(e, u).slice(0)
        };

        function ve(e) {
            for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
            return r
        }

        function me(e, t, n) {
            var r = t.dir, i = t.next, o = i || r, a = n && "parentNode" === o, s = C++;
            return t.first ? function (t, n, i) {
                while (t = t[r]) if (1 === t.nodeType || a) return e(t, n, i);
                return !1
            } : function (t, n, u) {
                var l, c, f, p = [T, s];
                if (u) {
                    while (t = t[r]) if ((1 === t.nodeType || a) && e(t, n, u)) return !0
                } else while (t = t[r]) if (1 === t.nodeType || a) if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t; else {
                    if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2];
                    if (c[o] = p, p[2] = e(t, n, u)) return !0
                }
                return !1
            }
        }

        function xe(e) {
            return e.length > 1 ? function (t, n, r) {
                var i = e.length;
                while (i--) if (!e[i](t, n, r)) return !1;
                return !0
            } : e[0]
        }

        function be(e, t, n) {
            for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n);
            return n
        }

        function we(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++) (o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
            return a
        }

        function Te(e, t, n, r, i, o) {
            return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) {
                var l, c, f, p = [], d = [], h = a.length, g = o || be(t || "*", s.nodeType ? [s] : s, []),
                    y = !e || !o && t ? g : we(g, p, e, s, u), v = n ? i || (o ? e : h || r) ? [] : a : y;
                if (n && n(y, v, s, u), r) {
                    l = we(v, d), r(l, [], s, u), c = l.length;
                    while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f))
                }
                if (o) {
                    if (i || e) {
                        if (i) {
                            l = [], c = v.length;
                            while (c--) (f = v[c]) && l.push(y[c] = f);
                            i(null, v = [], l, u)
                        }
                        c = v.length;
                        while (c--) (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f))
                    }
                } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v)
            })
        }

        function Ce(e) {
            for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) {
                return e === t
            }, s, !0), f = me(function (e) {
                return O(t, e) > -1
            }, s, !0), p = [function (e, n, r) {
                var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
                return t = null, i
            }]; u < o; u++) if (n = r.relative[e[u].type]) p = [me(xe(p), n)]; else {
                if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
                    for (i = ++u; i < o; i++) if (r.relative[e[i].type]) break;
                    return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({value: " " === e[u - 2].type ? "*" : ""})).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e))
                }
                p.push(n)
            }
            return xe(p)
        }

        function Ee(e, t) {
            var n = t.length > 0, i = e.length > 0, o = function (o, a, s, u, c) {
                var f, h, y, v = 0, m = "0", x = o && [], b = [], w = l, C = o || i && r.find.TAG("*", c),
                    E = T += null == w ? 1 : Math.random() || .1, k = C.length;
                for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
                    if (i && f) {
                        h = 0, a || f.ownerDocument === d || (p(f), s = !g);
                        while (y = e[h++]) if (y(f, a || d, s)) {
                            u.push(f);
                            break
                        }
                        c && (T = E)
                    }
                    n && ((f = !y && f) && v--, o && x.push(f))
                }
                if (v += m, n && m !== v) {
                    h = 0;
                    while (y = t[h++]) y(x, b, a, s);
                    if (o) {
                        if (v > 0) while (m--) x[m] || b[m] || (b[m] = j.call(u));
                        b = we(b)
                    }
                    L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u)
                }
                return c && (T = E, l = w), x
            };
            return n ? se(o) : o
        }

        return s = oe.compile = function (e, t) {
            var n, r = [], i = [], o = S[e + " "];
            if (!o) {
                t || (t = a(e)), n = t.length;
                while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
                (o = S(e, Ee(i, r))).selector = e
            }
            return o
        }, u = oe.select = function (e, t, n, i) {
            var o, u, l, c, f, p = "function" == typeof e && e, d = !i && a(e = p.selector || e);
            if (n = n || [], 1 === d.length) {
                if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
                    if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
                    p && (t = t.parentNode), e = e.slice(u.shift().value.length)
                }
                o = V.needsContext.test(e) ? 0 : u.length;
                while (o--) {
                    if (l = u[o], r.relative[c = l.type]) break;
                    if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) {
                        if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n;
                        break
                    }
                }
            }
            return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n
        }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) {
            return 1 & e.compareDocumentPosition(d.createElement("fieldset"))
        }), ue(function (e) {
            return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
        }) || le("type|href|height|width", function (e, t, n) {
            if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), n.attributes && ue(function (e) {
            return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
        }) || le("value", function (e, t, n) {
            if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
        }), ue(function (e) {
            return null == e.getAttribute("disabled")
        }) || le(P, function (e, t, n) {
            var r;
            if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }), oe
    }(e);
    w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape;
    var k = function (e, t, n) {
        var r = [], i = void 0 !== n;
        while ((e = e[t]) && 9 !== e.nodeType) if (1 === e.nodeType) {
            if (i && w(e).is(n)) break;
            r.push(e)
        }
        return r
    }, S = function (e, t) {
        for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
        return n
    }, D = w.expr.match.needsContext;

    function N(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
    }

    var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

    function j(e, t, n) {
        return g(t) ? w.grep(e, function (e, r) {
            return !!t.call(e, r, e) !== n
        }) : t.nodeType ? w.grep(e, function (e) {
            return e === t !== n
        }) : "string" != typeof t ? w.grep(e, function (e) {
            return u.call(t, e) > -1 !== n
        }) : w.filter(t, e, n)
    }

    w.filter = function (e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) {
            return 1 === e.nodeType
        }))
    }, w.fn.extend({
        find: function (e) {
            var t, n, r = this.length, i = this;
            if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
                for (t = 0; t < r; t++) if (w.contains(i[t], this)) return !0
            }));
            for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
            return r > 1 ? w.uniqueSort(n) : n
        }, filter: function (e) {
            return this.pushStack(j(this, e || [], !1))
        }, not: function (e) {
            return this.pushStack(j(this, e || [], !0))
        }, is: function (e) {
            return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length
        }
    });
    var q, L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (w.fn.init = function (e, t, n) {
        var i, o;
        if (!e) return this;
        if (n = n || q, "string" == typeof e) {
            if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (i[1]) {
                if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t)) for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
                return this
            }
            return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this
        }
        return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
    }).prototype = w.fn, q = w(r);
    var H = /^(?:parents|prev(?:Until|All))/, O = {children: !0, contents: !0, next: !0, prev: !0};
    w.fn.extend({
        has: function (e) {
            var t = w(e, this), n = t.length;
            return this.filter(function () {
                for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0
            })
        }, closest: function (e, t) {
            var n, r = 0, i = this.length, o = [], a = "string" != typeof e && w(e);
            if (!D.test(e)) for (; r < i; r++) for (n = this[r]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                o.push(n);
                break
            }
            return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o)
        }, index: function (e) {
            return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        }, add: function (e, t) {
            return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
        }, addBack: function (e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
    });

    function P(e, t) {
        while ((e = e[t]) && 1 !== e.nodeType) ;
        return e
    }

    w.each({
        parent: function (e) {
            var t = e.parentNode;
            return t && 11 !== t.nodeType ? t : null
        }, parents: function (e) {
            return k(e, "parentNode")
        }, parentsUntil: function (e, t, n) {
            return k(e, "parentNode", n)
        }, next: function (e) {
            return P(e, "nextSibling")
        }, prev: function (e) {
            return P(e, "previousSibling")
        }, nextAll: function (e) {
            return k(e, "nextSibling")
        }, prevAll: function (e) {
            return k(e, "previousSibling")
        }, nextUntil: function (e, t, n) {
            return k(e, "nextSibling", n)
        }, prevUntil: function (e, t, n) {
            return k(e, "previousSibling", n)
        }, siblings: function (e) {
            return S((e.parentNode || {}).firstChild, e)
        }, children: function (e) {
            return S(e.firstChild)
        }, contents: function (e) {
            return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
        }
    }, function (e, t) {
        w.fn[e] = function (n, r) {
            var i = w.map(this, t, n);
            return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i)
        }
    });
    var M = /[^\x20\t\r\n\f]+/g;

    function R(e) {
        var t = {};
        return w.each(e.match(M) || [], function (e, n) {
            t[n] = !0
        }), t
    }

    w.Callbacks = function (e) {
        e = "string" == typeof e ? R(e) : w.extend({}, e);
        var t, n, r, i, o = [], a = [], s = -1, u = function () {
            for (i = i || e.once, r = t = !0; a.length; s = -1) {
                n = a.shift();
                while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1)
            }
            e.memory || (n = !1), t = !1, i && (o = n ? [] : "")
        }, l = {
            add: function () {
                return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) {
                    w.each(n, function (n, r) {
                        g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r)
                    })
                }(arguments), n && !t && u()), this
            }, remove: function () {
                return w.each(arguments, function (e, t) {
                    var n;
                    while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s--
                }), this
            }, has: function (e) {
                return e ? w.inArray(e, o) > -1 : o.length > 0
            }, empty: function () {
                return o && (o = []), this
            }, disable: function () {
                return i = a = [], o = n = "", this
            }, disabled: function () {
                return !o
            }, lock: function () {
                return i = a = [], n || t || (o = n = ""), this
            }, locked: function () {
                return !!i
            }, fireWith: function (e, n) {
                return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this
            }, fire: function () {
                return l.fireWith(this, arguments), this
            }, fired: function () {
                return !!r
            }
        };
        return l
    };

    function I(e) {
        return e
    }

    function W(e) {
        throw e
    }

    function $(e, t, n, r) {
        var i;
        try {
            e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
        } catch (e) {
            n.apply(void 0, [e])
        }
    }

    w.extend({
        Deferred: function (t) {
            var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]],
                r = "pending", i = {
                    state: function () {
                        return r
                    }, always: function () {
                        return o.done(arguments).fail(arguments), this
                    }, "catch": function (e) {
                        return i.then(null, e)
                    }, pipe: function () {
                        var e = arguments;
                        return w.Deferred(function (t) {
                            w.each(n, function (n, r) {
                                var i = g(e[r[4]]) && e[r[4]];
                                o[r[1]](function () {
                                    var e = i && i.apply(this, arguments);
                                    e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                                })
                            }), e = null
                        }).promise()
                    }, then: function (t, r, i) {
                        var o = 0;

                        function a(t, n, r, i) {
                            return function () {
                                var s = this, u = arguments, l = function () {
                                    var e, l;
                                    if (!(t < o)) {
                                        if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                        l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u))
                                    }
                                }, c = i ? l : function () {
                                    try {
                                        l()
                                    } catch (e) {
                                        w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u))
                                    }
                                };
                                t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
                            }
                        }

                        return w.Deferred(function (e) {
                            n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W))
                        }).promise()
                    }, promise: function (e) {
                        return null != e ? w.extend(e, i) : i
                    }
                }, o = {};
            return w.each(n, function (e, t) {
                var a = t[2], s = t[5];
                i[t[1]] = a.add, s && a.add(function () {
                    r = s
                }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () {
                    return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
                }, o[t[0] + "With"] = a.fireWith
            }), i.promise(o), t && t.call(o, o), o
        }, when: function (e) {
            var t = arguments.length, n = t, r = Array(n), i = o.call(arguments), a = w.Deferred(), s = function (e) {
                return function (n) {
                    r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i)
                }
            };
            if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();
            while (n--) $(i[n], s(n), a.reject);
            return a.promise()
        }
    });
    var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    w.Deferred.exceptionHook = function (t, n) {
        e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
    }, w.readyException = function (t) {
        e.setTimeout(function () {
            throw t
        })
    };
    var F = w.Deferred();
    w.fn.ready = function (e) {
        return F.then(e)["catch"](function (e) {
            w.readyException(e)
        }), this
    }, w.extend({
        isReady: !1, readyWait: 1, ready: function (e) {
            (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w]))
        }
    }), w.ready.then = F.then;

    function _() {
        r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready()
    }

    "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));
    var z = function (e, t, n, r, i, o, a) {
        var s = 0, u = e.length, l = null == n;
        if ("object" === x(n)) {
            i = !0;
            for (s in n) z(e, t, s, n[s], !0, o, a)
        } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) {
                return l.call(w(e), n)
            })), t)) for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
        return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
    }, X = /^-ms-/, U = /-([a-z])/g;

    function V(e, t) {
        return t.toUpperCase()
    }

    function G(e) {
        return e.replace(X, "ms-").replace(U, V)
    }

    var Y = function (e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
    };

    function Q() {
        this.expando = w.expando + Q.uid++
    }

    Q.uid = 1, Q.prototype = {
        cache: function (e) {
            var t = e[this.expando];
            return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                value: t,
                configurable: !0
            }))), t
        }, set: function (e, t, n) {
            var r, i = this.cache(e);
            if ("string" == typeof t) i[G(t)] = n; else for (r in t) i[G(r)] = t[r];
            return i
        }, get: function (e, t) {
            return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)]
        }, access: function (e, t, n) {
            return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
        }, remove: function (e, t) {
            var n, r = e[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t) {
                    n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length;
                    while (n--) delete r[t[n]]
                }
                (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
            }
        }, hasData: function (e) {
            var t = e[this.expando];
            return void 0 !== t && !w.isEmptyObject(t)
        }
    };
    var J = new Q, K = new Q, Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, ee = /[A-Z]/g;

    function te(e) {
        return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e)
    }

    function ne(e, t, n) {
        var r;
        if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
            try {
                n = te(n)
            } catch (e) {
            }
            K.set(e, t, n)
        } else n = void 0;
        return n
    }

    w.extend({
        hasData: function (e) {
            return K.hasData(e) || J.hasData(e)
        }, data: function (e, t, n) {
            return K.access(e, t, n)
        }, removeData: function (e, t) {
            K.remove(e, t)
        }, _data: function (e, t, n) {
            return J.access(e, t, n)
        }, _removeData: function (e, t) {
            J.remove(e, t)
        }
    }), w.fn.extend({
        data: function (e, t) {
            var n, r, i, o = this[0], a = o && o.attributes;
            if (void 0 === e) {
                if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
                    n = a.length;
                    while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r]));
                    J.set(o, "hasDataAttrs", !0)
                }
                return i
            }
            return "object" == typeof e ? this.each(function () {
                K.set(this, e)
            }) : z(this, function (t) {
                var n;
                if (o && void 0 === t) {
                    if (void 0 !== (n = K.get(o, e))) return n;
                    if (void 0 !== (n = ne(o, e))) return n
                } else this.each(function () {
                    K.set(this, e, t)
                })
            }, null, t, arguments.length > 1, null, !0)
        }, removeData: function (e) {
            return this.each(function () {
                K.remove(this, e)
            })
        }
    }), w.extend({
        queue: function (e, t, n) {
            var r;
            if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || []
        }, dequeue: function (e, t) {
            t = t || "fx";
            var n = w.queue(e, t), r = n.length, i = n.shift(), o = w._queueHooks(e, t), a = function () {
                w.dequeue(e, t)
            };
            "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire()
        }, _queueHooks: function (e, t) {
            var n = t + "queueHooks";
            return J.get(e, n) || J.access(e, n, {
                empty: w.Callbacks("once memory").add(function () {
                    J.remove(e, [t + "queue", n])
                })
            })
        }
    }), w.fn.extend({
        queue: function (e, t) {
            var n = 2;
            return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
                var n = w.queue(this, e, t);
                w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
            })
        }, dequeue: function (e) {
            return this.each(function () {
                w.dequeue(this, e)
            })
        }, clearQueue: function (e) {
            return this.queue(e || "fx", [])
        }, promise: function (e, t) {
            var n, r = 1, i = w.Deferred(), o = this, a = this.length, s = function () {
                --r || i.resolveWith(o, [o])
            };
            "string" != typeof e && (t = e, e = void 0), e = e || "fx";
            while (a--) (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
            return s(), i.promise(t)
        }
    });
    var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
        oe = ["Top", "Right", "Bottom", "Left"], ae = function (e, t) {
            return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display")
        }, se = function (e, t, n, r) {
            var i, o, a = {};
            for (o in t) a[o] = e.style[o], e.style[o] = t[o];
            i = n.apply(e, r || []);
            for (o in t) e.style[o] = a[o];
            return i
        };

    function ue(e, t, n, r) {
        var i, o, a = 20, s = r ? function () {
                return r.cur()
            } : function () {
                return w.css(e, t, "")
            }, u = s(), l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
            c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t));
        if (c && c[3] !== l) {
            u /= 2, l = l || c[3], c = +u || 1;
            while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
            c *= 2, w.style(e, t, c + l), n = n || []
        }
        return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
    }

    var le = {};

    function ce(e) {
        var t, n = e.ownerDocument, r = e.nodeName, i = le[r];
        return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i)
    }

    function fe(e, t) {
        for (var n, r, i = [], o = 0, a = e.length; o < a; o++) (r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n)));
        for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
        return e
    }

    w.fn.extend({
        show: function () {
            return fe(this, !0)
        }, hide: function () {
            return fe(this)
        }, toggle: function (e) {
            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
                ae(this) ? w(this).show() : w(this).hide()
            })
        }
    });
    var pe = /^(?:checkbox|radio)$/i, de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i, he = /^$|^module$|\/(?:java|ecma)script/i,
        ge = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;

    function ye(e, t) {
        var n;
        return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n
    }

    function ve(e, t) {
        for (var n = 0, r = e.length; n < r; n++) J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"))
    }

    var me = /<|&#?\w+;/;

    function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++) if ((o = e[d]) || 0 === o) if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o); else if (me.test(o)) {
            a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0];
            while (c--) a = a.lastChild;
            w.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
        } else p.push(t.createTextNode(o));
        f.textContent = "", d = 0;
        while (o = p[d++]) if (r && w.inArray(o, r) > -1) i && i.push(o); else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) {
            c = 0;
            while (o = a[c++]) he.test(o.type || "") && n.push(o)
        }
        return f
    }

    !function () {
        var e = r.createDocumentFragment().appendChild(r.createElement("div")), t = r.createElement("input");
        t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
    }();
    var be = r.documentElement, we = /^key/, Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        Ce = /^([^.]*)(?:\.(.+)|)/;

    function Ee() {
        return !0
    }

    function ke() {
        return !1
    }

    function Se() {
        try {
            return r.activeElement
        } catch (e) {
        }
    }

    function De(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
            "string" != typeof n && (r = r || n, n = void 0);
            for (s in t) De(e, s, n, r, t[s], o);
            return e
        }
        if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke; else if (!i) return e;
        return 1 === o && (a = i, (i = function (e) {
            return w().off(e), a.apply(this, arguments)
        }).guid = a.guid || (a.guid = w.guid++)), e.each(function () {
            w.event.add(this, t, i, r, n)
        })
    }

    w.event = {
        global: {}, add: function (e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, y = J.get(e);
            if (y) {
                n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) {
                    return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
                }), l = (t = (t || "").match(M) || [""]).length;
                while (l--) d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({
                    type: d,
                    origType: g,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: i,
                    needsContext: i && w.expr.match.needsContext.test(i),
                    namespace: h.join(".")
                }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0)
            }
        }, remove: function (e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, y = J.hasData(e) && J.get(e);
            if (y && (u = y.events)) {
                l = (t = (t || "").match(M) || [""]).length;
                while (l--) if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
                    f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                    while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                    a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d])
                } else for (d in u) w.event.remove(e, d + t[l], n, r, !0);
                w.isEmptyObject(u) && J.remove(e, "handle events")
            }
        }, dispatch: function (e) {
            var t = w.event.fix(e), n, r, i, o, a, s, u = new Array(arguments.length),
                l = (J.get(this, "events") || {})[t.type] || [], c = w.event.special[t.type] || {};
            for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
            if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
                s = w.event.handlers.call(this, t, l), n = 0;
                while ((o = s[n++]) && !t.isPropagationStopped()) {
                    t.currentTarget = o.elem, r = 0;
                    while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation()))
                }
                return c.postDispatch && c.postDispatch.call(this, t), t.result
            }
        }, handlers: function (e, t) {
            var n, r, i, o, a, s = [], u = t.delegateCount, l = e.target;
            if (u && l.nodeType && !("click" === e.type && e.button >= 1)) for (; l !== this; l = l.parentNode || this) if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
                o.length && s.push({elem: l, handlers: o})
            }
            return l = this, u < t.length && s.push({elem: l, handlers: t.slice(u)}), s
        }, addProp: function (e, t) {
            Object.defineProperty(w.Event.prototype, e, {
                enumerable: !0, configurable: !0, get: g(t) ? function () {
                    if (this.originalEvent) return t(this.originalEvent)
                } : function () {
                    if (this.originalEvent) return this.originalEvent[e]
                }, set: function (t) {
                    Object.defineProperty(this, e, {enumerable: !0, configurable: !0, writable: !0, value: t})
                }
            })
        }, fix: function (e) {
            return e[w.expando] ? e : new w.Event(e)
        }, special: {
            load: {noBubble: !0}, focus: {
                trigger: function () {
                    if (this !== Se() && this.focus) return this.focus(), !1
                }, delegateType: "focusin"
            }, blur: {
                trigger: function () {
                    if (this === Se() && this.blur) return this.blur(), !1
                }, delegateType: "focusout"
            }, click: {
                trigger: function () {
                    if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1
                }, _default: function (e) {
                    return N(e.target, "a")
                }
            }, beforeunload: {
                postDispatch: function (e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                }
            }
        }
    }, w.removeEvent = function (e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n)
    }, w.Event = function (e, t) {
        if (!(this instanceof w.Event)) return new w.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
    }, w.Event.prototype = {
        constructor: w.Event,
        isDefaultPrevented: ke,
        isPropagationStopped: ke,
        isImmediatePropagationStopped: ke,
        isSimulated: !1,
        preventDefault: function () {
            var e = this.originalEvent;
            this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function () {
            var e = this.originalEvent;
            this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function () {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
        }
    }, w.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function (e) {
            var t = e.button;
            return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
        }
    }, w.event.addProp), w.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function (e, t) {
        w.event.special[e] = {
            delegateType: t, bindType: t, handle: function (e) {
                var n, r = this, i = e.relatedTarget, o = e.handleObj;
                return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
            }
        }
    }), w.fn.extend({
        on: function (e, t, n, r) {
            return De(this, e, t, n, r)
        }, one: function (e, t, n, r) {
            return De(this, e, t, n, r, 1)
        }, off: function (e, t, n) {
            var r, i;
            if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
            if ("object" == typeof e) {
                for (i in e) this.off(i, t, e[i]);
                return this
            }
            return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () {
                w.event.remove(this, e, n, t)
            })
        }
    });
    var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        Ae = /<script|<style|<link/i, je = /checked\s*(?:[^=]|=\s*.checked.)/i,
        qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

    function Le(e, t) {
        return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e
    }

    function He(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
    }

    function Oe(e) {
        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
    }

    function Pe(e, t) {
        var n, r, i, o, a, s, u, l;
        if (1 === t.nodeType) {
            if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) {
                delete a.handle, a.events = {};
                for (i in l) for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n])
            }
            K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u))
        }
    }

    function Me(e, t) {
        var n = t.nodeName.toLowerCase();
        "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
    }

    function Re(e, t, n, r) {
        t = a.apply([], t);
        var i, o, s, u, l, c, f = 0, p = e.length, d = p - 1, y = t[0], v = g(y);
        if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) {
            var o = e.eq(i);
            v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r)
        });
        if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) {
            for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
            if (u) for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++) l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l))
        }
        return e
    }

    function Ie(e, t, n) {
        for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r));
        return e
    }

    w.extend({
        htmlPrefilter: function (e) {
            return e.replace(Ne, "<$1></$2>")
        }, clone: function (e, t, n) {
            var r, i, o, a, s = e.cloneNode(!0), u = w.contains(e.ownerDocument, e);
            if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) Me(o[r], a[r]);
            if (t) if (n) for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) Pe(o[r], a[r]); else Pe(e, s);
            return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s
        }, cleanData: function (e) {
            for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++) if (Y(n)) {
                if (t = n[J.expando]) {
                    if (t.events) for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                    n[J.expando] = void 0
                }
                n[K.expando] && (n[K.expando] = void 0)
            }
        }
    }), w.fn.extend({
        detach: function (e) {
            return Ie(this, e, !0)
        }, remove: function (e) {
            return Ie(this, e)
        }, text: function (e) {
            return z(this, function (e) {
                return void 0 === e ? w.text(this) : this.empty().each(function () {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                })
            }, null, e, arguments.length)
        }, append: function () {
            return Re(this, arguments, function (e) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e)
            })
        }, prepend: function () {
            return Re(this, arguments, function (e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = Le(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        }, before: function () {
            return Re(this, arguments, function (e) {
                this.parentNode && this.parentNode.insertBefore(e, this)
            })
        }, after: function () {
            return Re(this, arguments, function (e) {
                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
            })
        }, empty: function () {
            for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = "");
            return this
        }, clone: function (e, t) {
            return e = null != e && e, t = null == t ? e : t, this.map(function () {
                return w.clone(this, e, t)
            })
        }, html: function (e) {
            return z(this, function (e) {
                var t = this[0] || {}, n = 0, r = this.length;
                if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                    e = w.htmlPrefilter(e);
                    try {
                        for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e);
                        t = 0
                    } catch (e) {
                    }
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        }, replaceWith: function () {
            var e = [];
            return Re(this, arguments, function (t) {
                var n = this.parentNode;
                w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this))
            }, e)
        }
    }), w.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function (e, t) {
        w.fn[e] = function (e) {
            for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get());
            return this.pushStack(r)
        }
    });
    var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"), $e = function (t) {
        var n = t.ownerDocument.defaultView;
        return n && n.opener || (n = e), n.getComputedStyle(t)
    }, Be = new RegExp(oe.join("|"), "i");
    !function () {
        function t() {
            if (c) {
                l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c);
                var t = e.getComputedStyle(c);
                i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null
            }
        }

        function n(e) {
            return Math.round(parseFloat(e))
        }

        var i, o, a, s, u, l = r.createElement("div"), c = r.createElement("div");
        c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, {
            boxSizingReliable: function () {
                return t(), o
            }, pixelBoxStyles: function () {
                return t(), s
            }, pixelPosition: function () {
                return t(), i
            }, reliableMarginLeft: function () {
                return t(), u
            }, scrollboxSize: function () {
                return t(), a
            }
        }))
    }();

    function Fe(e, t, n) {
        var r, i, o, a, s = e.style;
        return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
    }

    function _e(e, t) {
        return {
            get: function () {
                if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }

    var ze = /^(none|table(?!-c[ea]).+)/, Xe = /^--/,
        Ue = {position: "absolute", visibility: "hidden", display: "block"},
        Ve = {letterSpacing: "0", fontWeight: "400"}, Ge = ["Webkit", "Moz", "ms"], Ye = r.createElement("div").style;

    function Qe(e) {
        if (e in Ye) return e;
        var t = e[0].toUpperCase() + e.slice(1), n = Ge.length;
        while (n--) if ((e = Ge[n] + t) in Ye) return e
    }

    function Je(e) {
        var t = w.cssProps[e];
        return t || (t = w.cssProps[e] = Qe(e) || e), t
    }

    function Ke(e, t, n) {
        var r = ie.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
    }

    function Ze(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0, s = 0, u = 0;
        if (n === (r ? "border" : "content")) return 0;
        for (; a < 4; a += 2) "margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i));
        return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u
    }

    function et(e, t, n) {
        var r = $e(e), i = Fe(e, t, r), o = "border-box" === w.css(e, "boxSizing", !1, r), a = o;
        if (We.test(i)) {
            if (!n) return i;
            i = "auto"
        }
        return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px"
    }

    w.extend({
        cssHooks: {
            opacity: {
                get: function (e, t) {
                    if (t) {
                        var n = Fe(e, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {},
        style: function (e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = G(t), u = Xe.test(t), l = e.style;
                if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
            }
        },
        css: function (e, t, n, r) {
            var i, o, a, s = G(t);
            return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
        }
    }), w.each(["height", "width"], function (e, t) {
        w.cssHooks[t] = {
            get: function (e, n, r) {
                if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () {
                    return et(e, t, r)
                })
            }, set: function (e, n, r) {
                var i, o = $e(e), a = "border-box" === w.css(e, "boxSizing", !1, o), s = r && Ze(e, t, r, a, o);
                return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s)
            }
        }
    }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
        if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, {marginLeft: 0}, function () {
            return e.getBoundingClientRect().left
        })) + "px"
    }), w.each({margin: "", padding: "", border: "Width"}, function (e, t) {
        w.cssHooks[e + t] = {
            expand: function (n) {
                for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
                return i
            }
        }, "margin" !== e && (w.cssHooks[e + t].set = Ke)
    }), w.fn.extend({
        css: function (e, t) {
            return z(this, function (e, t, n) {
                var r, i, o = {}, a = 0;
                if (Array.isArray(t)) {
                    for (r = $e(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
                    return o
                }
                return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
            }, e, t, arguments.length > 1)
        }
    });

    function tt(e, t, n, r, i) {
        return new tt.prototype.init(e, t, n, r, i)
    }

    w.Tween = tt, tt.prototype = {
        constructor: tt, init: function (e, t, n, r, i, o) {
            this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px")
        }, cur: function () {
            var e = tt.propHooks[this.prop];
            return e && e.get ? e.get(this) : tt.propHooks._default.get(this)
        }, run: function (e) {
            var t, n = tt.propHooks[this.prop];
            return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this
        }
    }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = {
        _default: {
            get: function (e) {
                var t;
                return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
            }, set: function (e) {
                w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
            }
        }
    }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = {
        set: function (e) {
            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
    }, w.easing = {
        linear: function (e) {
            return e
        }, swing: function (e) {
            return .5 - Math.cos(e * Math.PI) / 2
        }, _default: "swing"
    }, w.fx = tt.prototype.init, w.fx.step = {};
    var nt, rt, it = /^(?:toggle|show|hide)$/, ot = /queueHooks$/;

    function at() {
        rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick())
    }

    function st() {
        return e.setTimeout(function () {
            nt = void 0
        }), nt = Date.now()
    }

    function ut(e, t) {
        var n, r = 0, i = {height: e};
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = oe[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i
    }

    function lt(e, t, n) {
        for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++) if (r = i[o].call(n, t, e)) return r
    }

    function ct(e, t, n) {
        var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t, p = this, d = {}, h = e.style,
            g = e.nodeType && ae(e), y = J.get(e, "fxshow");
        n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
            a.unqueued || s()
        }), a.unqueued++, p.always(function () {
            p.always(function () {
                a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
            })
        }));
        for (r in t) if (i = t[r], it.test(i)) {
            if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                if ("show" !== i || !y || void 0 === y[r]) continue;
                g = !0
            }
            d[r] = y && y[r] || w.style(e, r)
        }
        if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
            f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () {
                h.display = l
            }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () {
                h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
            })), u = !1;
            for (r in d) u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", {display: l}), o && (y.hidden = !g), g && fe([e], !0), p.done(function () {
                g || fe([e]), J.remove(e, "fxshow");
                for (r in d) w.style(e, r, d[r])
            })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0))
        }
    }

    function ft(e, t) {
        var n, r, i, o, a;
        for (n in e) if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) {
            o = a.expand(o), delete e[r];
            for (n in o) n in e || (e[n] = o[n], t[n] = i)
        } else t[r] = i
    }

    function pt(e, t, n) {
        var r, i, o = 0, a = pt.prefilters.length, s = w.Deferred().always(function () {
            delete u.elem
        }), u = function () {
            if (i) return !1;
            for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r);
            return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
        }, l = s.promise({
            elem: e,
            props: w.extend({}, t),
            opts: w.extend(!0, {specialEasing: {}, easing: w.easing._default}, n),
            originalProperties: t,
            originalOptions: n,
            startTime: nt || st(),
            duration: n.duration,
            tweens: [],
            createTween: function (t, n) {
                var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                return l.tweens.push(r), r
            },
            stop: function (t) {
                var n = 0, r = t ? l.tweens.length : 0;
                if (i) return this;
                for (i = !0; n < r; n++) l.tweens[n].run(1);
                return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
            }
        }), c = l.props;
        for (ft(c, l.opts.specialEasing); o < a; o++) if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
        return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, {
            elem: e,
            anim: l,
            queue: l.opts.queue
        })), l
    }

    w.Animation = w.extend(pt, {
        tweeners: {
            "*": [function (e, t) {
                var n = this.createTween(e, t);
                return ue(n.elem, e, ie.exec(t), n), n
            }]
        }, tweener: function (e, t) {
            g(e) ? (t = e, e = ["*"]) : e = e.match(M);
            for (var n, r = 0, i = e.length; r < i; r++) n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t)
        }, prefilters: [ct], prefilter: function (e, t) {
            t ? pt.prefilters.unshift(e) : pt.prefilters.push(e)
        }
    }), w.speed = function (e, t, n) {
        var r = e && "object" == typeof e ? w.extend({}, e) : {
            complete: n || !n && t || g(e) && e,
            duration: e,
            easing: n && t || t && !g(t) && t
        };
        return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
            g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
        }, r
    }, w.fn.extend({
        fadeTo: function (e, t, n, r) {
            return this.filter(ae).css("opacity", 0).show().end().animate({opacity: t}, e, n, r)
        }, animate: function (e, t, n, r) {
            var i = w.isEmptyObject(e), o = w.speed(t, n, r), a = function () {
                var t = pt(this, w.extend({}, e), o);
                (i || J.get(this, "finish")) && t.stop(!0)
            };
            return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        }, stop: function (e, t, n) {
            var r = function (e) {
                var t = e.stop;
                delete e.stop, t(n)
            };
            return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
                var t = !0, i = null != e && e + "queueHooks", o = w.timers, a = J.get(this);
                if (i) a[i] && a[i].stop && r(a[i]); else for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
                for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                !t && n || w.dequeue(this, e)
            })
        }, finish: function (e) {
            return !1 !== e && (e = e || "fx"), this.each(function () {
                var t, n = J.get(this), r = n[e + "queue"], i = n[e + "queueHooks"], o = w.timers, a = r ? r.length : 0;
                for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                delete n.finish
            })
        }
    }), w.each(["toggle", "show", "hide"], function (e, t) {
        var n = w.fn[t];
        w.fn[t] = function (e, r, i) {
            return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i)
        }
    }), w.each({
        slideDown: ut("show"),
        slideUp: ut("hide"),
        slideToggle: ut("toggle"),
        fadeIn: {opacity: "show"},
        fadeOut: {opacity: "hide"},
        fadeToggle: {opacity: "toggle"}
    }, function (e, t) {
        w.fn[e] = function (e, n, r) {
            return this.animate(t, e, n, r)
        }
    }), w.timers = [], w.fx.tick = function () {
        var e, t = 0, n = w.timers;
        for (nt = Date.now(); t < n.length; t++) (e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || w.fx.stop(), nt = void 0
    }, w.fx.timer = function (e) {
        w.timers.push(e), w.fx.start()
    }, w.fx.interval = 13, w.fx.start = function () {
        rt || (rt = !0, at())
    }, w.fx.stop = function () {
        rt = null
    }, w.fx.speeds = {slow: 600, fast: 200, _default: 400}, w.fn.delay = function (t, n) {
        return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) {
            var i = e.setTimeout(n, t);
            r.stop = function () {
                e.clearTimeout(i)
            }
        })
    }, function () {
        var e = r.createElement("input"), t = r.createElement("select").appendChild(r.createElement("option"));
        e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value
    }();
    var dt, ht = w.expr.attrHandle;
    w.fn.extend({
        attr: function (e, t) {
            return z(this, w.attr, e, t, arguments.length > 1)
        }, removeAttr: function (e) {
            return this.each(function () {
                w.removeAttr(this, e)
            })
        }
    }), w.extend({
        attr: function (e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
        }, attrHooks: {
            type: {
                set: function (e, t) {
                    if (!h.radioValue && "radio" === t && N(e, "input")) {
                        var n = e.value;
                        return e.setAttribute("type", t), n && (e.value = n), t
                    }
                }
            }
        }, removeAttr: function (e, t) {
            var n, r = 0, i = t && t.match(M);
            if (i && 1 === e.nodeType) while (n = i[r++]) e.removeAttribute(n)
        }
    }), dt = {
        set: function (e, t, n) {
            return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
        }
    }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
        var n = ht[t] || w.find.attr;
        ht[t] = function (e, t, r) {
            var i, o, a = t.toLowerCase();
            return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i
        }
    });
    var gt = /^(?:input|select|textarea|button)$/i, yt = /^(?:a|area)$/i;
    w.fn.extend({
        prop: function (e, t) {
            return z(this, w.prop, e, t, arguments.length > 1)
        }, removeProp: function (e) {
            return this.each(function () {
                delete this[w.propFix[e] || e]
            })
        }
    }), w.extend({
        prop: function (e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
        }, propHooks: {
            tabIndex: {
                get: function (e) {
                    var t = w.find.attr(e, "tabindex");
                    return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1
                }
            }
        }, propFix: {"for": "htmlFor", "class": "className"}
    }), h.optSelected || (w.propHooks.selected = {
        get: function (e) {
            var t = e.parentNode;
            return t && t.parentNode && t.parentNode.selectedIndex, null
        }, set: function (e) {
            var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
        w.propFix[this.toLowerCase()] = this
    });

    function vt(e) {
        return (e.match(M) || []).join(" ")
    }

    function mt(e) {
        return e.getAttribute && e.getAttribute("class") || ""
    }

    function xt(e) {
        return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : []
    }

    w.fn.extend({
        addClass: function (e) {
            var t, n, r, i, o, a, s, u = 0;
            if (g(e)) return this.each(function (t) {
                w(this).addClass(e.call(this, t, mt(this)))
            });
            if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                a = 0;
                while (o = t[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                i !== (s = vt(r)) && n.setAttribute("class", s)
            }
            return this
        }, removeClass: function (e) {
            var t, n, r, i, o, a, s, u = 0;
            if (g(e)) return this.each(function (t) {
                w(this).removeClass(e.call(this, t, mt(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ((t = xt(e)).length) while (n = this[u++]) if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                a = 0;
                while (o = t[a++]) while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " ");
                i !== (s = vt(r)) && n.setAttribute("class", s)
            }
            return this
        }, toggleClass: function (e, t) {
            var n = typeof e, r = "string" === n || Array.isArray(e);
            return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) {
                w(this).toggleClass(e.call(this, n, mt(this), t), t)
            }) : this.each(function () {
                var t, i, o, a;
                if (r) {
                    i = 0, o = w(this), a = xt(e);
                    while (t = a[i++]) o.hasClass(t) ? o.removeClass(t) : o.addClass(t)
                } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""))
            })
        }, hasClass: function (e) {
            var t, n, r = 0;
            t = " " + e + " ";
            while (n = this[r++]) if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
            return !1
        }
    });
    var bt = /\r/g;
    w.fn.extend({
        val: function (e) {
            var t, n, r, i = this[0];
            {
                if (arguments.length) return r = g(e), this.each(function (n) {
                    var i;
                    1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) {
                        return null == e ? "" : e + ""
                    })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                });
                if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof(n = i.value) ? n.replace(bt, "") : null == n ? "" : n
            }
        }
    }), w.extend({
        valHooks: {
            option: {
                get: function (e) {
                    var t = w.find.attr(e, "value");
                    return null != t ? t : vt(w.text(e))
                }
            }, select: {
                get: function (e) {
                    var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [],
                        u = a ? o + 1 : i.length;
                    for (r = o < 0 ? u : a ? o : 0; r < u; r++) if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
                        if (t = w(n).val(), a) return t;
                        s.push(t)
                    }
                    return s
                }, set: function (e, t) {
                    var n, r, i = e.options, o = w.makeArray(t), a = i.length;
                    while (a--) ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
                    return n || (e.selectedIndex = -1), o
                }
            }
        }
    }), w.each(["radio", "checkbox"], function () {
        w.valHooks[this] = {
            set: function (e, t) {
                if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1
            }
        }, h.checkOn || (w.valHooks[this].get = function (e) {
            return null === e.getAttribute("value") ? "on" : e.value
        })
    }), h.focusin = "onfocusin" in e;
    var wt = /^(?:focusinfocus|focusoutblur)$/, Tt = function (e) {
        e.stopPropagation()
    };
    w.extend(w.event, {
        trigger: function (t, n, i, o) {
            var a, s, u, l, c, p, d, h, v = [i || r], m = f.call(t, "type") ? t.type : t,
                x = f.call(t, "namespace") ? t.namespace.split(".") : [];
            if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) {
                if (!o && !d.noBubble && !y(i)) {
                    for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) v.push(s), u = s;
                    u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e)
                }
                a = 0;
                while ((s = v[a++]) && !t.isPropagationStopped()) h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault());
                return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result
            }
        }, simulate: function (e, t, n) {
            var r = w.extend(new w.Event, n, {type: e, isSimulated: !0});
            w.event.trigger(r, null, t)
        }
    }), w.fn.extend({
        trigger: function (e, t) {
            return this.each(function () {
                w.event.trigger(e, t, this)
            })
        }, triggerHandler: function (e, t) {
            var n = this[0];
            if (n) return w.event.trigger(e, t, n, !0)
        }
    }), h.focusin || w.each({focus: "focusin", blur: "focusout"}, function (e, t) {
        var n = function (e) {
            w.event.simulate(t, e.target, w.event.fix(e))
        };
        w.event.special[t] = {
            setup: function () {
                var r = this.ownerDocument || this, i = J.access(r, t);
                i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1)
            }, teardown: function () {
                var r = this.ownerDocument || this, i = J.access(r, t) - 1;
                i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t))
            }
        }
    });
    var Ct = e.location, Et = Date.now(), kt = /\?/;
    w.parseXML = function (t) {
        var n;
        if (!t || "string" != typeof t) return null;
        try {
            n = (new e.DOMParser).parseFromString(t, "text/xml")
        } catch (e) {
            n = void 0
        }
        return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
    };
    var St = /\[\]$/, Dt = /\r?\n/g, Nt = /^(?:submit|button|image|reset|file)$/i,
        At = /^(?:input|select|textarea|keygen)/i;

    function jt(e, t, n, r) {
        var i;
        if (Array.isArray(t)) w.each(t, function (t, i) {
            n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
        }); else if (n || "object" !== x(t)) r(e, t); else for (i in t) jt(e + "[" + i + "]", t[i], n, r)
    }

    w.param = function (e, t) {
        var n, r = [], i = function (e, t) {
            var n = g(t) ? t() : t;
            r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
        };
        if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () {
            i(this.name, this.value)
        }); else for (n in e) jt(n, e[n], t, i);
        return r.join("&")
    }, w.fn.extend({
        serialize: function () {
            return w.param(this.serializeArray())
        }, serializeArray: function () {
            return this.map(function () {
                var e = w.prop(this, "elements");
                return e ? w.makeArray(e) : this
            }).filter(function () {
                var e = this.type;
                return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e))
            }).map(function (e, t) {
                var n = w(this).val();
                return null == n ? null : Array.isArray(n) ? w.map(n, function (e) {
                    return {name: t.name, value: e.replace(Dt, "\r\n")}
                }) : {name: t.name, value: n.replace(Dt, "\r\n")}
            }).get()
        }
    });
    var qt = /%20/g, Lt = /#.*$/, Ht = /([?&])_=[^&]*/, Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Mt = /^(?:GET|HEAD)$/, Rt = /^\/\//, It = {},
        Wt = {}, $t = "*/".concat("*"), Bt = r.createElement("a");
    Bt.href = Ct.href;

    function Ft(e) {
        return function (t, n) {
            "string" != typeof t && (n = t, t = "*");
            var r, i = 0, o = t.toLowerCase().match(M) || [];
            if (g(n)) while (r = o[i++]) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
        }
    }

    function _t(e, t, n, r) {
        var i = {}, o = e === Wt;

        function a(s) {
            var u;
            return i[s] = !0, w.each(e[s] || [], function (e, s) {
                var l = s(t, n, r);
                return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1)
            }), u
        }

        return a(t.dataTypes[0]) || !i["*"] && a("*")
    }

    function zt(e, t) {
        var n, r, i = w.ajaxSettings.flatOptions || {};
        for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && w.extend(!0, e, r), e
    }

    function Xt(e, t, n) {
        var r, i, o, a, s = e.contents, u = e.dataTypes;
        while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
        if (r) for (i in s) if (s[i] && s[i].test(r)) {
            u.unshift(i);
            break
        }
        if (u[0] in n) o = u[0]; else {
            for (i in n) {
                if (!u[0] || e.converters[i + " " + u[0]]) {
                    o = i;
                    break
                }
                a || (a = i)
            }
            o = o || a
        }
        if (o) return o !== u[0] && u.unshift(o), n[o]
    }

    function Ut(e, t, n, r) {
        var i, o, a, s, u, l = {}, c = e.dataTypes.slice();
        if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
        o = c.shift();
        while (o) if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift()) if ("*" === o) o = u; else if ("*" !== u && u !== o) {
            if (!(a = l[u + " " + o] || l["* " + o])) for (i in l) if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                break
            }
            if (!0 !== a) if (a && e["throws"]) t = a(t); else try {
                t = a(t)
            } catch (e) {
                return {state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o}
            }
        }
        return {state: "success", data: t}
    }

    w.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: Ct.href,
            type: "GET",
            isLocal: Pt.test(Ct.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": $t,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
            responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
            converters: {"* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML},
            flatOptions: {url: !0, context: !0}
        },
        ajaxSetup: function (e, t) {
            return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e)
        },
        ajaxPrefilter: Ft(It),
        ajaxTransport: Ft(Wt),
        ajax: function (t, n) {
            "object" == typeof t && (n = t, t = void 0), n = n || {};
            var i, o, a, s, u, l, c, f, p, d, h = w.ajaxSetup({}, n), g = h.context || h,
                y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event, v = w.Deferred(),
                m = w.Callbacks("once memory"), x = h.statusCode || {}, b = {}, T = {}, C = "canceled", E = {
                    readyState: 0, getResponseHeader: function (e) {
                        var t;
                        if (c) {
                            if (!s) {
                                s = {};
                                while (t = Ot.exec(a)) s[t[1].toLowerCase()] = t[2]
                            }
                            t = s[e.toLowerCase()]
                        }
                        return null == t ? null : t
                    }, getAllResponseHeaders: function () {
                        return c ? a : null
                    }, setRequestHeader: function (e, t) {
                        return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this
                    }, overrideMimeType: function (e) {
                        return null == c && (h.mimeType = e), this
                    }, statusCode: function (e) {
                        var t;
                        if (e) if (c) E.always(e[E.status]); else for (t in e) x[t] = [x[t], e[t]];
                        return this
                    }, abort: function (e) {
                        var t = e || C;
                        return i && i.abort(t), k(0, t), this
                    }
                };
            if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) {
                l = r.createElement("a");
                try {
                    l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host
                } catch (e) {
                    h.crossDomain = !0
                }
            }
            if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E;
            (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);
            for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
            if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();
            if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) {
                if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E;
                h.async && h.timeout > 0 && (u = e.setTimeout(function () {
                    E.abort("timeout")
                }, h.timeout));
                try {
                    c = !1, i.send(b, k)
                } catch (e) {
                    if (c) throw e;
                    k(-1, e)
                }
            } else k(-1, "No Transport");

            function k(t, n, r, s) {
                var l, p, d, b, T, C = n;
                c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")))
            }

            return E
        },
        getJSON: function (e, t, n) {
            return w.get(e, t, n, "json")
        },
        getScript: function (e, t) {
            return w.get(e, void 0, t, "script")
        }
    }), w.each(["get", "post"], function (e, t) {
        w[t] = function (e, n, r, i) {
            return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
                url: e,
                type: t,
                dataType: i,
                data: n,
                success: r
            }, w.isPlainObject(e) && e))
        }
    }), w._evalUrl = function (e) {
        return w.ajax({url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, "throws": !0})
    }, w.fn.extend({
        wrapAll: function (e) {
            var t;
            return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
                var e = this;
                while (e.firstElementChild) e = e.firstElementChild;
                return e
            }).append(this)), this
        }, wrapInner: function (e) {
            return g(e) ? this.each(function (t) {
                w(this).wrapInner(e.call(this, t))
            }) : this.each(function () {
                var t = w(this), n = t.contents();
                n.length ? n.wrapAll(e) : t.append(e)
            })
        }, wrap: function (e) {
            var t = g(e);
            return this.each(function (n) {
                w(this).wrapAll(t ? e.call(this, n) : e)
            })
        }, unwrap: function (e) {
            return this.parent(e).not("body").each(function () {
                w(this).replaceWith(this.childNodes)
            }), this
        }
    }), w.expr.pseudos.hidden = function (e) {
        return !w.expr.pseudos.visible(e)
    }, w.expr.pseudos.visible = function (e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
    }, w.ajaxSettings.xhr = function () {
        try {
            return new e.XMLHttpRequest
        } catch (e) {
        }
    };
    var Vt = {0: 200, 1223: 204}, Gt = w.ajaxSettings.xhr();
    h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) {
        var n, r;
        if (h.cors || Gt && !t.crossDomain) return {
            send: function (i, o) {
                var a, s = t.xhr();
                if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a];
                t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
                for (a in i) s.setRequestHeader(a, i[a]);
                n = function (e) {
                    return function () {
                        n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {binary: s.response} : {text: s.responseText}, s.getAllResponseHeaders()))
                    }
                }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
                    4 === s.readyState && e.setTimeout(function () {
                        n && r()
                    })
                }, n = n("abort");
                try {
                    s.send(t.hasContent && t.data || null)
                } catch (e) {
                    if (n) throw e
                }
            }, abort: function () {
                n && n()
            }
        }
    }), w.ajaxPrefilter(function (e) {
        e.crossDomain && (e.contents.script = !1)
    }), w.ajaxSetup({
        accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
        contents: {script: /\b(?:java|ecma)script\b/},
        converters: {
            "text script": function (e) {
                return w.globalEval(e), e
            }
        }
    }), w.ajaxPrefilter("script", function (e) {
        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
    }), w.ajaxTransport("script", function (e) {
        if (e.crossDomain) {
            var t, n;
            return {
                send: function (i, o) {
                    t = w("<script>").prop({charset: e.scriptCharset, src: e.url}).on("load error", n = function (e) {
                        t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type)
                    }), r.head.appendChild(t[0])
                }, abort: function () {
                    n && n()
                }
            }
        }
    });
    var Yt = [], Qt = /(=)\?(?=&|$)|\?\?/;
    w.ajaxSetup({
        jsonp: "callback", jsonpCallback: function () {
            var e = Yt.pop() || w.expando + "_" + Et++;
            return this[e] = !0, e
        }
    }), w.ajaxPrefilter("json jsonp", function (t, n, r) {
        var i, o, a,
            s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data");
        if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () {
            return a || w.error(i + " was not called"), a[0]
        }, t.dataTypes[0] = "json", o = e[i], e[i] = function () {
            a = arguments
        }, r.always(function () {
            void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0
        }), "script"
    }), h.createHTMLDocument = function () {
        var e = r.implementation.createHTMLDocument("").body;
        return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
    }(), w.parseHTML = function (e, t, n) {
        if ("string" != typeof e) return [];
        "boolean" == typeof t && (n = t, t = !1);
        var i, o, a;
        return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes))
    }, w.fn.load = function (e, t, n) {
        var r, i, o, a = this, s = e.indexOf(" ");
        return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && w.ajax({
            url: e,
            type: i || "GET",
            dataType: "html",
            data: t
        }).done(function (e) {
            o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
        }).always(n && function (e, t) {
            a.each(function () {
                n.apply(this, o || [e.responseText, t, e])
            })
        }), this
    }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
        w.fn[t] = function (e) {
            return this.on(t, e)
        }
    }), w.expr.pseudos.animated = function (e) {
        return w.grep(w.timers, function (t) {
            return e === t.elem
        }).length
    }, w.offset = {
        setOffset: function (e, t, n) {
            var r, i, o, a, s, u, l, c = w.css(e, "position"), f = w(e), p = {};
            "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p)
        }
    }, w.fn.extend({
        offset: function (e) {
            if (arguments.length) return void 0 === e ? this : this.each(function (t) {
                w.offset.setOffset(this, e, t)
            });
            var t, n, r = this[0];
            if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                top: t.top + n.pageYOffset,
                left: t.left + n.pageXOffset
            }) : {top: 0, left: 0}
        }, position: function () {
            if (this[0]) {
                var e, t, n, r = this[0], i = {top: 0, left: 0};
                if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect(); else {
                    t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
                    while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode;
                    e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0))
                }
                return {
                    top: t.top - i.top - w.css(r, "marginTop", !0),
                    left: t.left - i.left - w.css(r, "marginLeft", !0)
                }
            }
        }, offsetParent: function () {
            return this.map(function () {
                var e = this.offsetParent;
                while (e && "static" === w.css(e, "position")) e = e.offsetParent;
                return e || be
            })
        }
    }), w.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (e, t) {
        var n = "pageYOffset" === t;
        w.fn[e] = function (r) {
            return z(this, function (e, r, i) {
                var o;
                if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
                o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
            }, e, r, arguments.length)
        }
    }), w.each(["top", "left"], function (e, t) {
        w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
            if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n
        })
    }), w.each({Height: "height", Width: "width"}, function (e, t) {
        w.each({padding: "inner" + e, content: t, "": "outer" + e}, function (n, r) {
            w.fn[r] = function (i, o) {
                var a = arguments.length && (n || "boolean" != typeof i),
                    s = n || (!0 === i || !0 === o ? "margin" : "border");
                return z(this, function (t, n, i) {
                    var o;
                    return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s)
                }, t, a ? i : void 0, a)
            }
        })
    }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
        w.fn[t] = function (e, n) {
            return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
        }
    }), w.fn.extend({
        hover: function (e, t) {
            return this.mouseenter(e).mouseleave(t || e)
        }
    }), w.fn.extend({
        bind: function (e, t, n) {
            return this.on(e, null, t, n)
        }, unbind: function (e, t) {
            return this.off(e, null, t)
        }, delegate: function (e, t, n, r) {
            return this.on(t, e, n, r)
        }, undelegate: function (e, t, n) {
            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        }
    }), w.proxy = function (e, t) {
        var n, r, i;
        if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function () {
            return e.apply(t || this, r.concat(o.call(arguments)))
        }, i.guid = e.guid = e.guid || w.guid++, i
    }, w.holdReady = function (e) {
        e ? w.readyWait++ : w.ready(!0)
    }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) {
        var t = w.type(e);
        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
    }, "function" == typeof define && define.amd && define("jquery", [], function () {
        return w
    });
    var Jt = e.jQuery, Kt = e.$;
    return w.noConflict = function (t) {
        return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w
    }, t || (e.jQuery = e.$ = w), w
});

/* ------------------------------------------------------------------
	Popper.min.js
--------------------------------------------------------------------- */
/*
 Copyright (C) Federico Zivolo 2017
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
 */
(function (e, t) {
    'object' == typeof exports && 'undefined' != typeof module ? module.exports = t() : 'function' == typeof define && define.amd ? define(t) : e.Popper = t()
})(this, function () {
    'use strict';

    function e(e) {
        return e && '[object Function]' === {}.toString.call(e)
    }

    function t(e, t) {
        if (1 !== e.nodeType) return [];
        var o = getComputedStyle(e, null);
        return t ? o[t] : o
    }

    function o(e) {
        return 'HTML' === e.nodeName ? e : e.parentNode || e.host
    }

    function n(e) {
        if (!e) return document.body;
        switch (e.nodeName) {
            case'HTML':
            case'BODY':
                return e.ownerDocument.body;
            case'#document':
                return e.body;
        }
        var i = t(e), r = i.overflow, p = i.overflowX, s = i.overflowY;
        return /(auto|scroll)/.test(r + s + p) ? e : n(o(e))
    }

    function r(e) {
        var o = e && e.offsetParent, i = o && o.nodeName;
        return i && 'BODY' !== i && 'HTML' !== i ? -1 !== ['TD', 'TABLE'].indexOf(o.nodeName) && 'static' === t(o, 'position') ? r(o) : o : e ? e.ownerDocument.documentElement : document.documentElement
    }

    function p(e) {
        var t = e.nodeName;
        return 'BODY' !== t && ('HTML' === t || r(e.firstElementChild) === e)
    }

    function s(e) {
        return null === e.parentNode ? e : s(e.parentNode)
    }

    function d(e, t) {
        if (!e || !e.nodeType || !t || !t.nodeType) return document.documentElement;
        var o = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING, i = o ? e : t, n = o ? t : e,
            a = document.createRange();
        a.setStart(i, 0), a.setEnd(n, 0);
        var l = a.commonAncestorContainer;
        if (e !== l && t !== l || i.contains(n)) return p(l) ? l : r(l);
        var f = s(e);
        return f.host ? d(f.host, t) : d(e, s(t).host)
    }

    function a(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : 'top',
            o = 'top' === t ? 'scrollTop' : 'scrollLeft', i = e.nodeName;
        if ('BODY' === i || 'HTML' === i) {
            var n = e.ownerDocument.documentElement, r = e.ownerDocument.scrollingElement || n;
            return r[o]
        }
        return e[o]
    }

    function l(e, t) {
        var o = 2 < arguments.length && void 0 !== arguments[2] && arguments[2], i = a(t, 'top'), n = a(t, 'left'),
            r = o ? -1 : 1;
        return e.top += i * r, e.bottom += i * r, e.left += n * r, e.right += n * r, e
    }

    function f(e, t) {
        var o = 'x' === t ? 'Left' : 'Top', i = 'Left' == o ? 'Right' : 'Bottom';
        return parseFloat(e['border' + o + 'Width'], 10) + parseFloat(e['border' + i + 'Width'], 10)
    }

    function m(e, t, o, i) {
        return J(t['offset' + e], t['scroll' + e], o['client' + e], o['offset' + e], o['scroll' + e], ie() ? o['offset' + e] + i['margin' + ('Height' === e ? 'Top' : 'Left')] + i['margin' + ('Height' === e ? 'Bottom' : 'Right')] : 0)
    }

    function h() {
        var e = document.body, t = document.documentElement, o = ie() && getComputedStyle(t);
        return {height: m('Height', e, t, o), width: m('Width', e, t, o)}
    }

    function c(e) {
        return se({}, e, {right: e.left + e.width, bottom: e.top + e.height})
    }

    function g(e) {
        var o = {};
        if (ie()) try {
            o = e.getBoundingClientRect();
            var i = a(e, 'top'), n = a(e, 'left');
            o.top += i, o.left += n, o.bottom += i, o.right += n
        } catch (e) {
        } else o = e.getBoundingClientRect();
        var r = {left: o.left, top: o.top, width: o.right - o.left, height: o.bottom - o.top},
            p = 'HTML' === e.nodeName ? h() : {}, s = p.width || e.clientWidth || r.right - r.left,
            d = p.height || e.clientHeight || r.bottom - r.top, l = e.offsetWidth - s, m = e.offsetHeight - d;
        if (l || m) {
            var g = t(e);
            l -= f(g, 'x'), m -= f(g, 'y'), r.width -= l, r.height -= m
        }
        return c(r)
    }

    function u(e, o) {
        var i = ie(), r = 'HTML' === o.nodeName, p = g(e), s = g(o), d = n(e), a = t(o),
            f = parseFloat(a.borderTopWidth, 10), m = parseFloat(a.borderLeftWidth, 10),
            h = c({top: p.top - s.top - f, left: p.left - s.left - m, width: p.width, height: p.height});
        if (h.marginTop = 0, h.marginLeft = 0, !i && r) {
            var u = parseFloat(a.marginTop, 10), b = parseFloat(a.marginLeft, 10);
            h.top -= f - u, h.bottom -= f - u, h.left -= m - b, h.right -= m - b, h.marginTop = u, h.marginLeft = b
        }
        return (i ? o.contains(d) : o === d && 'BODY' !== d.nodeName) && (h = l(h, o)), h
    }

    function b(e) {
        var t = e.ownerDocument.documentElement, o = u(e, t), i = J(t.clientWidth, window.innerWidth || 0),
            n = J(t.clientHeight, window.innerHeight || 0), r = a(t), p = a(t, 'left'),
            s = {top: r - o.top + o.marginTop, left: p - o.left + o.marginLeft, width: i, height: n};
        return c(s)
    }

    function w(e) {
        var i = e.nodeName;
        return 'BODY' === i || 'HTML' === i ? !1 : 'fixed' === t(e, 'position') || w(o(e))
    }

    function y(e, t, i, r) {
        var p = {top: 0, left: 0}, s = d(e, t);
        if ('viewport' === r) p = b(s); else {
            var a;
            'scrollParent' === r ? (a = n(o(t)), 'BODY' === a.nodeName && (a = e.ownerDocument.documentElement)) : 'window' === r ? a = e.ownerDocument.documentElement : a = r;
            var l = u(a, s);
            if ('HTML' === a.nodeName && !w(s)) {
                var f = h(), m = f.height, c = f.width;
                p.top += l.top - l.marginTop, p.bottom = m + l.top, p.left += l.left - l.marginLeft, p.right = c + l.left
            } else p = l
        }
        return p.left += i, p.top += i, p.right -= i, p.bottom -= i, p
    }

    function E(e) {
        var t = e.width, o = e.height;
        return t * o
    }

    function v(e, t, o, i, n) {
        var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
        if (-1 === e.indexOf('auto')) return e;
        var p = y(o, i, r, n), s = {
            top: {width: p.width, height: t.top - p.top},
            right: {width: p.right - t.right, height: p.height},
            bottom: {width: p.width, height: p.bottom - t.bottom},
            left: {width: t.left - p.left, height: p.height}
        }, d = Object.keys(s).map(function (e) {
            return se({key: e}, s[e], {area: E(s[e])})
        }).sort(function (e, t) {
            return t.area - e.area
        }), a = d.filter(function (e) {
            var t = e.width, i = e.height;
            return t >= o.clientWidth && i >= o.clientHeight
        }), l = 0 < a.length ? a[0].key : d[0].key, f = e.split('-')[1];
        return l + (f ? '-' + f : '')
    }

    function O(e, t, o) {
        var i = d(t, o);
        return u(o, i)
    }

    function L(e) {
        var t = getComputedStyle(e), o = parseFloat(t.marginTop) + parseFloat(t.marginBottom),
            i = parseFloat(t.marginLeft) + parseFloat(t.marginRight),
            n = {width: e.offsetWidth + i, height: e.offsetHeight + o};
        return n
    }

    function x(e) {
        var t = {left: 'right', right: 'left', bottom: 'top', top: 'bottom'};
        return e.replace(/left|right|bottom|top/g, function (e) {
            return t[e]
        })
    }

    function S(e, t, o) {
        o = o.split('-')[0];
        var i = L(e), n = {width: i.width, height: i.height}, r = -1 !== ['right', 'left'].indexOf(o),
            p = r ? 'top' : 'left', s = r ? 'left' : 'top', d = r ? 'height' : 'width', a = r ? 'width' : 'height';
        return n[p] = t[p] + t[d] / 2 - i[d] / 2, n[s] = o === s ? t[s] - i[a] : t[x(s)], n
    }

    function T(e, t) {
        return Array.prototype.find ? e.find(t) : e.filter(t)[0]
    }

    function D(e, t, o) {
        if (Array.prototype.findIndex) return e.findIndex(function (e) {
            return e[t] === o
        });
        var i = T(e, function (e) {
            return e[t] === o
        });
        return e.indexOf(i)
    }

    function C(t, o, i) {
        var n = void 0 === i ? t : t.slice(0, D(t, 'name', i));
        return n.forEach(function (t) {
            t['function'] && console.warn('`modifier.function` is deprecated, use `modifier.fn`!');
            var i = t['function'] || t.fn;
            t.enabled && e(i) && (o.offsets.popper = c(o.offsets.popper), o.offsets.reference = c(o.offsets.reference), o = i(o, t))
        }), o
    }

    function N() {
        if (!this.state.isDestroyed) {
            var e = {instance: this, styles: {}, arrowStyles: {}, attributes: {}, flipped: !1, offsets: {}};
            e.offsets.reference = O(this.state, this.popper, this.reference), e.placement = v(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.offsets.popper = S(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = 'absolute', e = C(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
        }
    }

    function k(e, t) {
        return e.some(function (e) {
            var o = e.name, i = e.enabled;
            return i && o === t
        })
    }

    function W(e) {
        for (var t = [!1, 'ms', 'Webkit', 'Moz', 'O'], o = e.charAt(0).toUpperCase() + e.slice(1), n = 0; n < t.length - 1; n++) {
            var i = t[n], r = i ? '' + i + o : e;
            if ('undefined' != typeof document.body.style[r]) return r
        }
        return null
    }

    function P() {
        return this.state.isDestroyed = !0, k(this.modifiers, 'applyStyle') && (this.popper.removeAttribute('x-placement'), this.popper.style.left = '', this.popper.style.position = '', this.popper.style.top = '', this.popper.style[W('transform')] = ''), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
    }

    function B(e) {
        var t = e.ownerDocument;
        return t ? t.defaultView : window
    }

    function H(e, t, o, i) {
        var r = 'BODY' === e.nodeName, p = r ? e.ownerDocument.defaultView : e;
        p.addEventListener(t, o, {passive: !0}), r || H(n(p.parentNode), t, o, i), i.push(p)
    }

    function A(e, t, o, i) {
        o.updateBound = i, B(e).addEventListener('resize', o.updateBound, {passive: !0});
        var r = n(e);
        return H(r, 'scroll', o.updateBound, o.scrollParents), o.scrollElement = r, o.eventsEnabled = !0, o
    }

    function I() {
        this.state.eventsEnabled || (this.state = A(this.reference, this.options, this.state, this.scheduleUpdate))
    }

    function M(e, t) {
        return B(e).removeEventListener('resize', t.updateBound), t.scrollParents.forEach(function (e) {
            e.removeEventListener('scroll', t.updateBound)
        }), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t
    }

    function R() {
        this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = M(this.reference, this.state))
    }

    function U(e) {
        return '' !== e && !isNaN(parseFloat(e)) && isFinite(e)
    }

    function Y(e, t) {
        Object.keys(t).forEach(function (o) {
            var i = '';
            -1 !== ['width', 'height', 'top', 'right', 'bottom', 'left'].indexOf(o) && U(t[o]) && (i = 'px'), e.style[o] = t[o] + i
        })
    }

    function j(e, t) {
        Object.keys(t).forEach(function (o) {
            var i = t[o];
            !1 === i ? e.removeAttribute(o) : e.setAttribute(o, t[o])
        })
    }

    function F(e, t, o) {
        var i = T(e, function (e) {
            var o = e.name;
            return o === t
        }), n = !!i && e.some(function (e) {
            return e.name === o && e.enabled && e.order < i.order
        });
        if (!n) {
            var r = '`' + t + '`';
            console.warn('`' + o + '`' + ' modifier is required by ' + r + ' modifier in order to work, be sure to include it before ' + r + '!')
        }
        return n
    }

    function K(e) {
        return 'end' === e ? 'start' : 'start' === e ? 'end' : e
    }

    function q(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1], o = ae.indexOf(e),
            i = ae.slice(o + 1).concat(ae.slice(0, o));
        return t ? i.reverse() : i
    }

    function V(e, t, o, i) {
        var n = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/), r = +n[1], p = n[2];
        if (!r) return e;
        if (0 === p.indexOf('%')) {
            var s;
            switch (p) {
                case'%p':
                    s = o;
                    break;
                case'%':
                case'%r':
                default:
                    s = i;
            }
            var d = c(s);
            return d[t] / 100 * r
        }
        if ('vh' === p || 'vw' === p) {
            var a;
            return a = 'vh' === p ? J(document.documentElement.clientHeight, window.innerHeight || 0) : J(document.documentElement.clientWidth, window.innerWidth || 0), a / 100 * r
        }
        return r
    }

    function z(e, t, o, i) {
        var n = [0, 0], r = -1 !== ['right', 'left'].indexOf(i), p = e.split(/(\+|\-)/).map(function (e) {
            return e.trim()
        }), s = p.indexOf(T(p, function (e) {
            return -1 !== e.search(/,|\s/)
        }));
        p[s] && -1 === p[s].indexOf(',') && console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');
        var d = /\s*,\s*|\s+/,
            a = -1 === s ? [p] : [p.slice(0, s).concat([p[s].split(d)[0]]), [p[s].split(d)[1]].concat(p.slice(s + 1))];
        return a = a.map(function (e, i) {
            var n = (1 === i ? !r : r) ? 'height' : 'width', p = !1;
            return e.reduce(function (e, t) {
                return '' === e[e.length - 1] && -1 !== ['+', '-'].indexOf(t) ? (e[e.length - 1] = t, p = !0, e) : p ? (e[e.length - 1] += t, p = !1, e) : e.concat(t)
            }, []).map(function (e) {
                return V(e, n, t, o)
            })
        }), a.forEach(function (e, t) {
            e.forEach(function (o, i) {
                U(o) && (n[t] += o * ('-' === e[i - 1] ? -1 : 1))
            })
        }), n
    }

    function G(e, t) {
        var o, i = t.offset, n = e.placement, r = e.offsets, p = r.popper, s = r.reference, d = n.split('-')[0];
        return o = U(+i) ? [+i, 0] : z(i, p, s, d), 'left' === d ? (p.top += o[0], p.left -= o[1]) : 'right' === d ? (p.top += o[0], p.left += o[1]) : 'top' === d ? (p.left += o[0], p.top -= o[1]) : 'bottom' === d && (p.left += o[0], p.top += o[1]), e.popper = p, e
    }

    for (var _ = Math.min, X = Math.floor, J = Math.max, Q = 'undefined' != typeof window && 'undefined' != typeof document, Z = ['Edge', 'Trident', 'Firefox'], $ = 0, ee = 0; ee < Z.length; ee += 1) if (Q && 0 <= navigator.userAgent.indexOf(Z[ee])) {
        $ = 1;
        break
    }
    var i, te = Q && window.Promise, oe = te ? function (e) {
            var t = !1;
            return function () {
                t || (t = !0, window.Promise.resolve().then(function () {
                    t = !1, e()
                }))
            }
        } : function (e) {
            var t = !1;
            return function () {
                t || (t = !0, setTimeout(function () {
                    t = !1, e()
                }, $))
            }
        }, ie = function () {
            return void 0 == i && (i = -1 !== navigator.appVersion.indexOf('MSIE 10')), i
        }, ne = function (e, t) {
            if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function')
        }, re = function () {
            function e(e, t) {
                for (var o, n = 0; n < t.length; n++) o = t[n], o.enumerable = o.enumerable || !1, o.configurable = !0, 'value' in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
            }

            return function (t, o, i) {
                return o && e(t.prototype, o), i && e(t, i), t
            }
        }(), pe = function (e, t, o) {
            return t in e ? Object.defineProperty(e, t, {
                value: o,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = o, e
        }, se = Object.assign || function (e) {
            for (var t, o = 1; o < arguments.length; o++) for (var i in t = arguments[o], t) Object.prototype.hasOwnProperty.call(t, i) && (e[i] = t[i]);
            return e
        },
        de = ['auto-start', 'auto', 'auto-end', 'top-start', 'top', 'top-end', 'right-start', 'right', 'right-end', 'bottom-end', 'bottom', 'bottom-start', 'left-end', 'left', 'left-start'],
        ae = de.slice(3), le = {FLIP: 'flip', CLOCKWISE: 'clockwise', COUNTERCLOCKWISE: 'counterclockwise'},
        fe = function () {
            function t(o, i) {
                var n = this, r = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
                ne(this, t), this.scheduleUpdate = function () {
                    return requestAnimationFrame(n.update)
                }, this.update = oe(this.update.bind(this)), this.options = se({}, t.Defaults, r), this.state = {
                    isDestroyed: !1,
                    isCreated: !1,
                    scrollParents: []
                }, this.reference = o && o.jquery ? o[0] : o, this.popper = i && i.jquery ? i[0] : i, this.options.modifiers = {}, Object.keys(se({}, t.Defaults.modifiers, r.modifiers)).forEach(function (e) {
                    n.options.modifiers[e] = se({}, t.Defaults.modifiers[e] || {}, r.modifiers ? r.modifiers[e] : {})
                }), this.modifiers = Object.keys(this.options.modifiers).map(function (e) {
                    return se({name: e}, n.options.modifiers[e])
                }).sort(function (e, t) {
                    return e.order - t.order
                }), this.modifiers.forEach(function (t) {
                    t.enabled && e(t.onLoad) && t.onLoad(n.reference, n.popper, n.options, t, n.state)
                }), this.update();
                var p = this.options.eventsEnabled;
                p && this.enableEventListeners(), this.state.eventsEnabled = p
            }

            return re(t, [{
                key: 'update', value: function () {
                    return N.call(this)
                }
            }, {
                key: 'destroy', value: function () {
                    return P.call(this)
                }
            }, {
                key: 'enableEventListeners', value: function () {
                    return I.call(this)
                }
            }, {
                key: 'disableEventListeners', value: function () {
                    return R.call(this)
                }
            }]), t
        }();
    return fe.Utils = ('undefined' == typeof window ? global : window).PopperUtils, fe.placements = de, fe.Defaults = {
        placement: 'bottom',
        eventsEnabled: !0,
        removeOnDestroy: !1,
        onCreate: function () {
        },
        onUpdate: function () {
        },
        modifiers: {
            shift: {
                order: 100, enabled: !0, fn: function (e) {
                    var t = e.placement, o = t.split('-')[0], i = t.split('-')[1];
                    if (i) {
                        var n = e.offsets, r = n.reference, p = n.popper, s = -1 !== ['bottom', 'top'].indexOf(o),
                            d = s ? 'left' : 'top', a = s ? 'width' : 'height',
                            l = {start: pe({}, d, r[d]), end: pe({}, d, r[d] + r[a] - p[a])};
                        e.offsets.popper = se({}, p, l[i])
                    }
                    return e
                }
            },
            offset: {order: 200, enabled: !0, fn: G, offset: 0},
            preventOverflow: {
                order: 300, enabled: !0, fn: function (e, t) {
                    var o = t.boundariesElement || r(e.instance.popper);
                    e.instance.reference === o && (o = r(o));
                    var i = y(e.instance.popper, e.instance.reference, t.padding, o);
                    t.boundaries = i;
                    var n = t.priority, p = e.offsets.popper, s = {
                        primary: function (e) {
                            var o = p[e];
                            return p[e] < i[e] && !t.escapeWithReference && (o = J(p[e], i[e])), pe({}, e, o)
                        }, secondary: function (e) {
                            var o = 'right' === e ? 'left' : 'top', n = p[o];
                            return p[e] > i[e] && !t.escapeWithReference && (n = _(p[o], i[e] - ('right' === e ? p.width : p.height))), pe({}, o, n)
                        }
                    };
                    return n.forEach(function (e) {
                        var t = -1 === ['left', 'top'].indexOf(e) ? 'secondary' : 'primary';
                        p = se({}, p, s[t](e))
                    }), e.offsets.popper = p, e
                }, priority: ['left', 'right', 'top', 'bottom'], padding: 5, boundariesElement: 'scrollParent'
            },
            keepTogether: {
                order: 400, enabled: !0, fn: function (e) {
                    var t = e.offsets, o = t.popper, i = t.reference, n = e.placement.split('-')[0], r = X,
                        p = -1 !== ['top', 'bottom'].indexOf(n), s = p ? 'right' : 'bottom', d = p ? 'left' : 'top',
                        a = p ? 'width' : 'height';
                    return o[s] < r(i[d]) && (e.offsets.popper[d] = r(i[d]) - o[a]), o[d] > r(i[s]) && (e.offsets.popper[d] = r(i[s])), e
                }
            },
            arrow: {
                order: 500, enabled: !0, fn: function (e, o) {
                    var i;
                    if (!F(e.instance.modifiers, 'arrow', 'keepTogether')) return e;
                    var n = o.element;
                    if ('string' == typeof n) {
                        if (n = e.instance.popper.querySelector(n), !n) return e;
                    } else if (!e.instance.popper.contains(n)) return console.warn('WARNING: `arrow.element` must be child of its popper element!'), e;
                    var r = e.placement.split('-')[0], p = e.offsets, s = p.popper, d = p.reference,
                        a = -1 !== ['left', 'right'].indexOf(r), l = a ? 'height' : 'width', f = a ? 'Top' : 'Left',
                        m = f.toLowerCase(), h = a ? 'left' : 'top', g = a ? 'bottom' : 'right', u = L(n)[l];
                    d[g] - u < s[m] && (e.offsets.popper[m] -= s[m] - (d[g] - u)), d[m] + u > s[g] && (e.offsets.popper[m] += d[m] + u - s[g]), e.offsets.popper = c(e.offsets.popper);
                    var b = d[m] + d[l] / 2 - u / 2, w = t(e.instance.popper), y = parseFloat(w['margin' + f], 10),
                        E = parseFloat(w['border' + f + 'Width'], 10), v = b - e.offsets.popper[m] - y - E;
                    return v = J(_(s[l] - u, v), 0), e.arrowElement = n, e.offsets.arrow = (i = {}, pe(i, m, Math.round(v)), pe(i, h, ''), i), e
                }, element: '[x-arrow]'
            },
            flip: {
                order: 600, enabled: !0, fn: function (e, t) {
                    if (k(e.instance.modifiers, 'inner')) return e;
                    if (e.flipped && e.placement === e.originalPlacement) return e;
                    var o = y(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement),
                        i = e.placement.split('-')[0], n = x(i), r = e.placement.split('-')[1] || '', p = [];
                    switch (t.behavior) {
                        case le.FLIP:
                            p = [i, n];
                            break;
                        case le.CLOCKWISE:
                            p = q(i);
                            break;
                        case le.COUNTERCLOCKWISE:
                            p = q(i, !0);
                            break;
                        default:
                            p = t.behavior;
                    }
                    return p.forEach(function (s, d) {
                        if (i !== s || p.length === d + 1) return e;
                        i = e.placement.split('-')[0], n = x(i);
                        var a = e.offsets.popper, l = e.offsets.reference, f = X,
                            m = 'left' === i && f(a.right) > f(l.left) || 'right' === i && f(a.left) < f(l.right) || 'top' === i && f(a.bottom) > f(l.top) || 'bottom' === i && f(a.top) < f(l.bottom),
                            h = f(a.left) < f(o.left), c = f(a.right) > f(o.right), g = f(a.top) < f(o.top),
                            u = f(a.bottom) > f(o.bottom),
                            b = 'left' === i && h || 'right' === i && c || 'top' === i && g || 'bottom' === i && u,
                            w = -1 !== ['top', 'bottom'].indexOf(i),
                            y = !!t.flipVariations && (w && 'start' === r && h || w && 'end' === r && c || !w && 'start' === r && g || !w && 'end' === r && u);
                        (m || b || y) && (e.flipped = !0, (m || b) && (i = p[d + 1]), y && (r = K(r)), e.placement = i + (r ? '-' + r : ''), e.offsets.popper = se({}, e.offsets.popper, S(e.instance.popper, e.offsets.reference, e.placement)), e = C(e.instance.modifiers, e, 'flip'))
                    }), e
                }, behavior: 'flip', padding: 5, boundariesElement: 'viewport'
            },
            inner: {
                order: 700, enabled: !1, fn: function (e) {
                    var t = e.placement, o = t.split('-')[0], i = e.offsets, n = i.popper, r = i.reference,
                        p = -1 !== ['left', 'right'].indexOf(o), s = -1 === ['top', 'left'].indexOf(o);
                    return n[p ? 'left' : 'top'] = r[o] - (s ? n[p ? 'width' : 'height'] : 0), e.placement = x(t), e.offsets.popper = c(n), e
                }
            },
            hide: {
                order: 800, enabled: !0, fn: function (e) {
                    if (!F(e.instance.modifiers, 'hide', 'preventOverflow')) return e;
                    var t = e.offsets.reference, o = T(e.instance.modifiers, function (e) {
                        return 'preventOverflow' === e.name
                    }).boundaries;
                    if (t.bottom < o.top || t.left > o.right || t.top > o.bottom || t.right < o.left) {
                        if (!0 === e.hide) return e;
                        e.hide = !0, e.attributes['x-out-of-boundaries'] = ''
                    } else {
                        if (!1 === e.hide) return e;
                        e.hide = !1, e.attributes['x-out-of-boundaries'] = !1
                    }
                    return e
                }
            },
            computeStyle: {
                order: 850, enabled: !0, fn: function (e, t) {
                    var o = t.x, i = t.y, n = e.offsets.popper, p = T(e.instance.modifiers, function (e) {
                        return 'applyStyle' === e.name
                    }).gpuAcceleration;
                    void 0 !== p && console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');
                    var s, d, a = void 0 === p ? t.gpuAcceleration : p, l = r(e.instance.popper), f = g(l),
                        m = {position: n.position},
                        h = {left: X(n.left), top: X(n.top), bottom: X(n.bottom), right: X(n.right)},
                        c = 'bottom' === o ? 'top' : 'bottom', u = 'right' === i ? 'left' : 'right', b = W('transform');
                    if (d = 'bottom' == c ? -f.height + h.bottom : h.top, s = 'right' == u ? -f.width + h.right : h.left, a && b) m[b] = 'translate3d(' + s + 'px, ' + d + 'px, 0)', m[c] = 0, m[u] = 0, m.willChange = 'transform'; else {
                        var w = 'bottom' == c ? -1 : 1, y = 'right' == u ? -1 : 1;
                        m[c] = d * w, m[u] = s * y, m.willChange = c + ', ' + u
                    }
                    var E = {"x-placement": e.placement};
                    return e.attributes = se({}, E, e.attributes), e.styles = se({}, m, e.styles), e.arrowStyles = se({}, e.offsets.arrow, e.arrowStyles), e
                }, gpuAcceleration: !0, x: 'bottom', y: 'right'
            },
            applyStyle: {
                order: 900, enabled: !0, fn: function (e) {
                    return Y(e.instance.popper, e.styles), j(e.instance.popper, e.attributes), e.arrowElement && Object.keys(e.arrowStyles).length && Y(e.arrowElement, e.arrowStyles), e
                }, onLoad: function (e, t, o, i, n) {
                    var r = O(n, t, e),
                        p = v(o.placement, r, t, e, o.modifiers.flip.boundariesElement, o.modifiers.flip.padding);
                    return t.setAttribute('x-placement', p), Y(t, {position: 'absolute'}), o
                }, gpuAcceleration: void 0
            }
        }
    }, fe
});
//# sourceMappingURL=popper.min.js.map

/* ------------------------------------------------------------------
	jQuery Migrate v3.0.1
--------------------------------------------------------------------- */

/*! jQuery Migrate v3.0.1 | (c) jQuery Foundation and other contributors | jquery.org/license */

void 0 === jQuery.migrateMute && (jQuery.migrateMute = !0), function (e) {
    "function" == typeof define && define.amd ? define(["jquery"], window, e) : "object" == typeof module && module.exports ? module.exports = e(require("jquery"), window) : e(jQuery, window);
}(function (e, t) {
    "use strict";

    function r(r) {
        var n = t.console;
        o[r] || (o[r] = !0, e.migrateWarnings.push(r), n && n.warn && !e.migrateMute && (n.warn("JQMIGRATE: " + r),
        e.migrateTrace && n.trace && n.trace()));
    }

    function n(e, t, n, a) {
        Object.defineProperty(e, t, {
            configurable: !0,
            enumerable: !0,
            get: function () {
                return r(a), n;
            },
            set: function (e) {
                r(a), n = e;
            }
        });
    }

    function a(e, t, n, a) {
        e[t] = function () {
            return r(a), n.apply(this, arguments);
        };
    }

    e.migrateVersion = "3.0.1", function () {
        var r = /^[12]\./;
        t.console && t.console.log && (e && !r.test(e.fn.jquery) || t.console.log("JQMIGRATE: jQuery 3.0.0+ REQUIRED"),
        e.migrateWarnings && t.console.log("JQMIGRATE: Migrate plugin loaded multiple times"),
            t.console.log("JQMIGRATE: Migrate is installed" + (e.migrateMute ? "" : " with logging active") + ", version " + e.migrateVersion));
    }();
    var o = {};
    e.migrateWarnings = [], void 0 === e.migrateTrace && (e.migrateTrace = !0), e.migrateReset = function () {
        o = {}, e.migrateWarnings.length = 0;
    }, "BackCompat" === t.document.compatMode && r("jQuery is not compatible with Quirks Mode");
    var i = e.fn.init, s = e.isNumeric, u = e.find, c = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,
        l = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g;
    e.fn.init = function (e) {
        var t = Array.prototype.slice.call(arguments);
        return "string" == typeof e && "#" === e && (r("jQuery( '#' ) is not a valid selector"),
            t[0] = []), i.apply(this, t);
    }, e.fn.init.prototype = e.fn, e.find = function (e) {
        var n = Array.prototype.slice.call(arguments);
        if ("string" == typeof e && c.test(e)) try {
            t.document.querySelector(e);
        } catch (a) {
            e = e.replace(l, function (e, t, r, n) {
                return "[" + t + r + '"' + n + '"]';
            });
            try {
                t.document.querySelector(e), r("Attribute selector with '#' must be quoted: " + n[0]),
                    n[0] = e;
            } catch (e) {
                r("Attribute selector with '#' was not fixed: " + n[0]);
            }
        }
        return u.apply(this, n);
    };
    var d;
    for (d in u) Object.prototype.hasOwnProperty.call(u, d) && (e.find[d] = u[d]);
    e.fn.size = function () {
        return r("jQuery.fn.size() is deprecated and removed; use the .length property"),
            this.length;
    }, e.parseJSON = function () {
        return r("jQuery.parseJSON is deprecated; use JSON.parse"), JSON.parse.apply(null, arguments);
    }, e.isNumeric = function (t) {
        var n = s(t), a = function (t) {
            var r = t && t.toString();
            return !e.isArray(t) && r - parseFloat(r) + 1 >= 0;
        }(t);
        return n !== a && r("jQuery.isNumeric() should not be called on constructed objects"),
            a;
    }, a(e, "holdReady", e.holdReady, "jQuery.holdReady is deprecated"), a(e, "unique", e.uniqueSort, "jQuery.unique is deprecated; use jQuery.uniqueSort"),
        n(e.expr, "filters", e.expr.pseudos, "jQuery.expr.filters is deprecated; use jQuery.expr.pseudos"),
        n(e.expr, ":", e.expr.pseudos, "jQuery.expr[':'] is deprecated; use jQuery.expr.pseudos");
    var p = e.ajax;
    e.ajax = function () {
        var e = p.apply(this, arguments);
        return e.promise && (a(e, "success", e.done, "jQXHR.success is deprecated and removed"),
            a(e, "error", e.fail, "jQXHR.error is deprecated and removed"), a(e, "complete", e.always, "jQXHR.complete is deprecated and removed")),
            e;
    };
    var f = e.fn.removeAttr, y = e.fn.toggleClass, m = /\S+/g;
    e.fn.removeAttr = function (t) {
        var n = this;
        return e.each(t.match(m), function (t, a) {
            e.expr.match.bool.test(a) && (r("jQuery.fn.removeAttr no longer sets boolean properties: " + a),
                n.prop(a, !1));
        }), f.apply(this, arguments);
    }, e.fn.toggleClass = function (t) {
        return void 0 !== t && "boolean" != typeof t ? y.apply(this, arguments) : (r("jQuery.fn.toggleClass( boolean ) is deprecated"),
            this.each(function () {
                var r = this.getAttribute && this.getAttribute("class") || "";
                r && e.data(this, "__className__", r), this.setAttribute && this.setAttribute("class", r || !1 === t ? "" : e.data(this, "__className__") || "");
            }));
    };
    var h = !1;
    e.swap && e.each(["height", "width", "reliableMarginRight"], function (t, r) {
        var n = e.cssHooks[r] && e.cssHooks[r].get;
        n && (e.cssHooks[r].get = function () {
            var e;
            return h = !0, e = n.apply(this, arguments), h = !1, e;
        });
    }), e.swap = function (e, t, n, a) {
        var o, i, s = {};
        h || r("jQuery.swap() is undocumented and deprecated");
        for (i in t) s[i] = e.style[i], e.style[i] = t[i];
        o = n.apply(e, a || []);
        for (i in t) e.style[i] = s[i];
        return o;
    };
    var g = e.data;
    e.data = function (t, n, a) {
        var o;
        if (n && "object" == typeof n && 2 === arguments.length) {
            o = e.hasData(t) && g.call(this, t);
            var i = {};
            for (var s in n) s !== e.camelCase(s) ? (r("jQuery.data() always sets/gets camelCased names: " + s),
                o[s] = n[s]) : i[s] = n[s];
            return g.call(this, t, i), n;
        }
        return n && "string" == typeof n && n !== e.camelCase(n) && (o = e.hasData(t) && g.call(this, t)) && n in o ? (r("jQuery.data() always sets/gets camelCased names: " + n),
        arguments.length > 2 && (o[n] = a), o[n]) : g.apply(this, arguments);
    };
    var v = e.Tween.prototype.run, j = function (e) {
        return e;
    };
    e.Tween.prototype.run = function () {
        e.easing[this.easing].length > 1 && (r("'jQuery.easing." + this.easing.toString() + "' should use only one argument"),
            e.easing[this.easing] = j), v.apply(this, arguments);
    }, e.fx.interval = e.fx.interval || 13, t.requestAnimationFrame && n(e.fx, "interval", e.fx.interval, "jQuery.fx.interval is deprecated");
    var Q = e.fn.load, b = e.event.add, w = e.event.fix;
    e.event.props = [], e.event.fixHooks = {}, n(e.event.props, "concat", e.event.props.concat, "jQuery.event.props.concat() is deprecated and removed"),
        e.event.fix = function (t) {
            var n, a = t.type, o = this.fixHooks[a], i = e.event.props;
            if (i.length) for (r("jQuery.event.props are deprecated and removed: " + i.join()); i.length;) e.event.addProp(i.pop());
            if (o && !o._migrated_ && (o._migrated_ = !0, r("jQuery.event.fixHooks are deprecated and removed: " + a),
                (i = o.props) && i.length)) for (; i.length;) e.event.addProp(i.pop());
            return n = w.call(this, t), o && o.filter ? o.filter(n, t) : n;
        }, e.event.add = function (e, n) {
        return e === t && "load" === n && "complete" === t.document.readyState && r("jQuery(window).on('load'...) called after load event occurred"),
            b.apply(this, arguments);
    }, e.each(["load", "unload", "error"], function (t, n) {
        e.fn[n] = function () {
            var e = Array.prototype.slice.call(arguments, 0);
            return "load" === n && "string" == typeof e[0] ? Q.apply(this, e) : (r("jQuery.fn." + n + "() is deprecated"),
                e.splice(0, 0, n), arguments.length ? this.on.apply(this, e) : (this.triggerHandler.apply(this, e),
                this));
        };
    }), e.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (t, n) {
        e.fn[n] = function (e, t) {
            return r("jQuery.fn." + n + "() event shorthand is deprecated"), arguments.length > 0 ? this.on(n, null, e, t) : this.trigger(n);
        };
    }), e(function () {
        e(t.document).triggerHandler("ready");
    }), e.event.special.ready = {
        setup: function () {
            this === t.document && r("'ready' event is deprecated");
        }
    }, e.fn.extend({
        bind: function (e, t, n) {
            return r("jQuery.fn.bind() is deprecated"), this.on(e, null, t, n);
        },
        unbind: function (e, t) {
            return r("jQuery.fn.unbind() is deprecated"), this.off(e, null, t);
        },
        delegate: function (e, t, n, a) {
            return r("jQuery.fn.delegate() is deprecated"), this.on(t, e, n, a);
        },
        undelegate: function (e, t, n) {
            return r("jQuery.fn.undelegate() is deprecated"), 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
        },
        hover: function (e, t) {
            return r("jQuery.fn.hover() is deprecated"), this.on("mouseenter", e).on("mouseleave", t || e);
        }
    });
    var x = e.fn.offset;
    e.fn.offset = function () {
        var n, a = this[0], o = {
            top: 0,
            left: 0
        };
        return a && a.nodeType ? (n = (a.ownerDocument || t.document).documentElement, e.contains(n, a) ? x.apply(this, arguments) : (r("jQuery.fn.offset() requires an element connected to a document"),
            o)) : (r("jQuery.fn.offset() requires a valid DOM element"), o);
    };
    var k = e.param;
    e.param = function (t, n) {
        var a = e.ajaxSettings && e.ajaxSettings.traditional;
        return void 0 === n && a && (r("jQuery.param() no longer uses jQuery.ajaxSettings.traditional"),
            n = a), k.call(this, t, n);
    };
    var A = e.fn.andSelf || e.fn.addBack;
    e.fn.andSelf = function () {
        return r("jQuery.fn.andSelf() is deprecated and removed, use jQuery.fn.addBack()"),
            A.apply(this, arguments);
    };
    var S = e.Deferred,
        q = [["resolve", "done", e.Callbacks("once memory"), e.Callbacks("once memory"), "resolved"], ["reject", "fail", e.Callbacks("once memory"), e.Callbacks("once memory"), "rejected"], ["notify", "progress", e.Callbacks("memory"), e.Callbacks("memory")]];
    return e.Deferred = function (t) {
        var n = S(), a = n.promise();
        return n.pipe = a.pipe = function () {
            var t = arguments;
            return r("deferred.pipe() is deprecated"), e.Deferred(function (r) {
                e.each(q, function (o, i) {
                    var s = e.isFunction(t[o]) && t[o];
                    n[i[1]](function () {
                        var t = s && s.apply(this, arguments);
                        t && e.isFunction(t.promise) ? t.promise().done(r.resolve).fail(r.reject).progress(r.notify) : r[i[0] + "With"](this === a ? r.promise() : this, s ? [t] : arguments);
                    });
                }), t = null;
            }).promise();
        }, t && t.call(n, n), n;
    }, e.Deferred.exceptionHook = S.exceptionHook, e;
});

/* ------------------------------------------------------------------
	Bootstrap v4.0.0
--------------------------------------------------------------------- */
/*!
  * Bootstrap v4.0.0 (https://getbootstrap.com)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
!function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery"), require("popper.js")) : "function" == typeof define && define.amd ? define(["exports", "jquery", "popper.js"], e) : e(t.bootstrap = {}, t.jQuery, t.Popper)
}(this, function (t, e, n) {
    "use strict";

    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function s(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function r() {
        return (r = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
            }
            return t
        }).apply(this, arguments)
    }

    e = e && e.hasOwnProperty("default") ? e.default : e, n = n && n.hasOwnProperty("default") ? n.default : n;
    var o, a, l, h, c, u, f, d, _, g, p, m, v, E, T, y, C, I, A, b, D, S, w, N, O, k, P = function (t) {
            var e = !1;

            function n(e) {
                var n = this, s = !1;
                return t(this).one(i.TRANSITION_END, function () {
                    s = !0
                }), setTimeout(function () {
                    s || i.triggerTransitionEnd(n)
                }, e), this
            }

            var i = {
                TRANSITION_END: "bsTransitionEnd", getUID: function (t) {
                    do {
                        t += ~~(1e6 * Math.random())
                    } while (document.getElementById(t));
                    return t
                }, getSelectorFromElement: function (e) {
                    var n, i = e.getAttribute("data-target");
                    i && "#" !== i || (i = e.getAttribute("href") || ""), "#" === i.charAt(0) && (n = i, i = n = "function" == typeof t.escapeSelector ? t.escapeSelector(n).substr(1) : n.replace(/(:|\.|\[|\]|,|=|@)/g, "\\$1"));
                    try {
                        return t(document).find(i).length > 0 ? i : null
                    } catch (t) {
                        return null
                    }
                }, reflow: function (t) {
                    return t.offsetHeight
                }, triggerTransitionEnd: function (n) {
                    t(n).trigger(e.end)
                }, supportsTransitionEnd: function () {
                    return Boolean(e)
                }, isElement: function (t) {
                    return (t[0] || t).nodeType
                }, typeCheckConfig: function (t, e, n) {
                    for (var s in n) if (Object.prototype.hasOwnProperty.call(n, s)) {
                        var r = n[s], o = e[s],
                            a = o && i.isElement(o) ? "element" : (l = o, {}.toString.call(l).match(/\s([a-zA-Z]+)/)[1].toLowerCase());
                        if (!new RegExp(r).test(a)) throw new Error(t.toUpperCase() + ': Option "' + s + '" provided type "' + a + '" but expected type "' + r + '".')
                    }
                    var l
                }
            };
            return e = ("undefined" == typeof window || !window.QUnit) && {end: "transitionend"}, t.fn.emulateTransitionEnd = n, i.supportsTransitionEnd() && (t.event.special[i.TRANSITION_END] = {
                bindType: e.end,
                delegateType: e.end,
                handle: function (e) {
                    if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                }
            }), i
        }(e), L = (a = "alert", h = "." + (l = "bs.alert"), c = (o = e).fn[a], u = {
            CLOSE: "close" + h,
            CLOSED: "closed" + h,
            CLICK_DATA_API: "click" + h + ".data-api"
        }, f = "alert", d = "fade", _ = "show", g = function () {
            function t(t) {
                this._element = t
            }

            var e = t.prototype;
            return e.close = function (t) {
                t = t || this._element;
                var e = this._getRootElement(t);
                this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
            }, e.dispose = function () {
                o.removeData(this._element, l), this._element = null
            }, e._getRootElement = function (t) {
                var e = P.getSelectorFromElement(t), n = !1;
                return e && (n = o(e)[0]), n || (n = o(t).closest("." + f)[0]), n
            }, e._triggerCloseEvent = function (t) {
                var e = o.Event(u.CLOSE);
                return o(t).trigger(e), e
            }, e._removeElement = function (t) {
                var e = this;
                o(t).removeClass(_), P.supportsTransitionEnd() && o(t).hasClass(d) ? o(t).one(P.TRANSITION_END, function (n) {
                    return e._destroyElement(t, n)
                }).emulateTransitionEnd(150) : this._destroyElement(t)
            }, e._destroyElement = function (t) {
                o(t).detach().trigger(u.CLOSED).remove()
            }, t._jQueryInterface = function (e) {
                return this.each(function () {
                    var n = o(this), i = n.data(l);
                    i || (i = new t(this), n.data(l, i)), "close" === e && i[e](this)
                })
            }, t._handleDismiss = function (t) {
                return function (e) {
                    e && e.preventDefault(), t.close(this)
                }
            }, s(t, null, [{
                key: "VERSION", get: function () {
                    return "4.0.0"
                }
            }]), t
        }(), o(document).on(u.CLICK_DATA_API, '[data-dismiss="alert"]', g._handleDismiss(new g)), o.fn[a] = g._jQueryInterface, o.fn[a].Constructor = g, o.fn[a].noConflict = function () {
            return o.fn[a] = c, g._jQueryInterface
        }, g),
        R = (m = "button", E = "." + (v = "bs.button"), T = ".data-api", y = (p = e).fn[m], C = "active", I = "btn", A = "focus", b = '[data-toggle^="button"]', D = '[data-toggle="buttons"]', S = "input", w = ".active", N = ".btn", O = {
            CLICK_DATA_API: "click" + E + T,
            FOCUS_BLUR_DATA_API: "focus" + E + T + " blur" + E + T
        }, k = function () {
            function t(t) {
                this._element = t
            }

            var e = t.prototype;
            return e.toggle = function () {
                var t = !0, e = !0, n = p(this._element).closest(D)[0];
                if (n) {
                    var i = p(this._element).find(S)[0];
                    if (i) {
                        if ("radio" === i.type) if (i.checked && p(this._element).hasClass(C)) t = !1; else {
                            var s = p(n).find(w)[0];
                            s && p(s).removeClass(C)
                        }
                        if (t) {
                            if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
                            i.checked = !p(this._element).hasClass(C), p(i).trigger("change")
                        }
                        i.focus(), e = !1
                    }
                }
                e && this._element.setAttribute("aria-pressed", !p(this._element).hasClass(C)), t && p(this._element).toggleClass(C)
            }, e.dispose = function () {
                p.removeData(this._element, v), this._element = null
            }, t._jQueryInterface = function (e) {
                return this.each(function () {
                    var n = p(this).data(v);
                    n || (n = new t(this), p(this).data(v, n)), "toggle" === e && n[e]()
                })
            }, s(t, null, [{
                key: "VERSION", get: function () {
                    return "4.0.0"
                }
            }]), t
        }(), p(document).on(O.CLICK_DATA_API, b, function (t) {
            t.preventDefault();
            var e = t.target;
            p(e).hasClass(I) || (e = p(e).closest(N)), k._jQueryInterface.call(p(e), "toggle")
        }).on(O.FOCUS_BLUR_DATA_API, b, function (t) {
            var e = p(t.target).closest(N)[0];
            p(e).toggleClass(A, /^focus(in)?$/.test(t.type))
        }), p.fn[m] = k._jQueryInterface, p.fn[m].Constructor = k, p.fn[m].noConflict = function () {
            return p.fn[m] = y, k._jQueryInterface
        }, k), j = function (t) {
            var e = "carousel", n = "bs.carousel", i = "." + n, o = t.fn[e],
                a = {interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0}, l = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean"
                }, h = "next", c = "prev", u = "left", f = "right", d = {
                    SLIDE: "slide" + i,
                    SLID: "slid" + i,
                    KEYDOWN: "keydown" + i,
                    MOUSEENTER: "mouseenter" + i,
                    MOUSELEAVE: "mouseleave" + i,
                    TOUCHEND: "touchend" + i,
                    LOAD_DATA_API: "load" + i + ".data-api",
                    CLICK_DATA_API: "click" + i + ".data-api"
                }, _ = "carousel", g = "active", p = "slide", m = "carousel-item-right", v = "carousel-item-left",
                E = "carousel-item-next", T = "carousel-item-prev", y = {
                    ACTIVE: ".active",
                    ACTIVE_ITEM: ".active.carousel-item",
                    ITEM: ".carousel-item",
                    NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
                    INDICATORS: ".carousel-indicators",
                    DATA_SLIDE: "[data-slide], [data-slide-to]",
                    DATA_RIDE: '[data-ride="carousel"]'
                }, C = function () {
                    function o(e, n) {
                        this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this._config = this._getConfig(n), this._element = t(e)[0], this._indicatorsElement = t(this._element).find(y.INDICATORS)[0], this._addEventListeners()
                    }

                    var C = o.prototype;
                    return C.next = function () {
                        this._isSliding || this._slide(h)
                    }, C.nextWhenVisible = function () {
                        !document.hidden && t(this._element).is(":visible") && "hidden" !== t(this._element).css("visibility") && this.next()
                    }, C.prev = function () {
                        this._isSliding || this._slide(c)
                    }, C.pause = function (e) {
                        e || (this._isPaused = !0), t(this._element).find(y.NEXT_PREV)[0] && P.supportsTransitionEnd() && (P.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                    }, C.cycle = function (t) {
                        t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                    }, C.to = function (e) {
                        var n = this;
                        this._activeElement = t(this._element).find(y.ACTIVE_ITEM)[0];
                        var i = this._getItemIndex(this._activeElement);
                        if (!(e > this._items.length - 1 || e < 0)) if (this._isSliding) t(this._element).one(d.SLID, function () {
                            return n.to(e)
                        }); else {
                            if (i === e) return this.pause(), void this.cycle();
                            var s = e > i ? h : c;
                            this._slide(s, this._items[e])
                        }
                    }, C.dispose = function () {
                        t(this._element).off(i), t.removeData(this._element, n), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                    }, C._getConfig = function (t) {
                        return t = r({}, a, t), P.typeCheckConfig(e, t, l), t
                    }, C._addEventListeners = function () {
                        var e = this;
                        this._config.keyboard && t(this._element).on(d.KEYDOWN, function (t) {
                            return e._keydown(t)
                        }), "hover" === this._config.pause && (t(this._element).on(d.MOUSEENTER, function (t) {
                            return e.pause(t)
                        }).on(d.MOUSELEAVE, function (t) {
                            return e.cycle(t)
                        }), "ontouchstart" in document.documentElement && t(this._element).on(d.TOUCHEND, function () {
                            e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout(function (t) {
                                return e.cycle(t)
                            }, 500 + e._config.interval)
                        }))
                    }, C._keydown = function (t) {
                        if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                            case 37:
                                t.preventDefault(), this.prev();
                                break;
                            case 39:
                                t.preventDefault(), this.next()
                        }
                    }, C._getItemIndex = function (e) {
                        return this._items = t.makeArray(t(e).parent().find(y.ITEM)), this._items.indexOf(e)
                    }, C._getItemByDirection = function (t, e) {
                        var n = t === h, i = t === c, s = this._getItemIndex(e), r = this._items.length - 1;
                        if ((i && 0 === s || n && s === r) && !this._config.wrap) return e;
                        var o = (s + (t === c ? -1 : 1)) % this._items.length;
                        return -1 === o ? this._items[this._items.length - 1] : this._items[o]
                    }, C._triggerSlideEvent = function (e, n) {
                        var i = this._getItemIndex(e), s = this._getItemIndex(t(this._element).find(y.ACTIVE_ITEM)[0]),
                            r = t.Event(d.SLIDE, {relatedTarget: e, direction: n, from: s, to: i});
                        return t(this._element).trigger(r), r
                    }, C._setActiveIndicatorElement = function (e) {
                        if (this._indicatorsElement) {
                            t(this._indicatorsElement).find(y.ACTIVE).removeClass(g);
                            var n = this._indicatorsElement.children[this._getItemIndex(e)];
                            n && t(n).addClass(g)
                        }
                    }, C._slide = function (e, n) {
                        var i, s, r, o = this, a = t(this._element).find(y.ACTIVE_ITEM)[0], l = this._getItemIndex(a),
                            c = n || a && this._getItemByDirection(e, a), _ = this._getItemIndex(c),
                            C = Boolean(this._interval);
                        if (e === h ? (i = v, s = E, r = u) : (i = m, s = T, r = f), c && t(c).hasClass(g)) this._isSliding = !1; else if (!this._triggerSlideEvent(c, r).isDefaultPrevented() && a && c) {
                            this._isSliding = !0, C && this.pause(), this._setActiveIndicatorElement(c);
                            var I = t.Event(d.SLID, {relatedTarget: c, direction: r, from: l, to: _});
                            P.supportsTransitionEnd() && t(this._element).hasClass(p) ? (t(c).addClass(s), P.reflow(c), t(a).addClass(i), t(c).addClass(i), t(a).one(P.TRANSITION_END, function () {
                                t(c).removeClass(i + " " + s).addClass(g), t(a).removeClass(g + " " + s + " " + i), o._isSliding = !1, setTimeout(function () {
                                    return t(o._element).trigger(I)
                                }, 0)
                            }).emulateTransitionEnd(600)) : (t(a).removeClass(g), t(c).addClass(g), this._isSliding = !1, t(this._element).trigger(I)), C && this.cycle()
                        }
                    }, o._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n), s = r({}, a, t(this).data());
                            "object" == typeof e && (s = r({}, s, e));
                            var l = "string" == typeof e ? e : s.slide;
                            if (i || (i = new o(this, s), t(this).data(n, i)), "number" == typeof e) i.to(e); else if ("string" == typeof l) {
                                if ("undefined" == typeof i[l]) throw new TypeError('No method named "' + l + '"');
                                i[l]()
                            } else s.interval && (i.pause(), i.cycle())
                        })
                    }, o._dataApiClickHandler = function (e) {
                        var i = P.getSelectorFromElement(this);
                        if (i) {
                            var s = t(i)[0];
                            if (s && t(s).hasClass(_)) {
                                var a = r({}, t(s).data(), t(this).data()), l = this.getAttribute("data-slide-to");
                                l && (a.interval = !1), o._jQueryInterface.call(t(s), a), l && t(s).data(n).to(l), e.preventDefault()
                            }
                        }
                    }, s(o, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), o
                }();
            return t(document).on(d.CLICK_DATA_API, y.DATA_SLIDE, C._dataApiClickHandler), t(window).on(d.LOAD_DATA_API, function () {
                t(y.DATA_RIDE).each(function () {
                    var e = t(this);
                    C._jQueryInterface.call(e, e.data())
                })
            }), t.fn[e] = C._jQueryInterface, t.fn[e].Constructor = C, t.fn[e].noConflict = function () {
                return t.fn[e] = o, C._jQueryInterface
            }, C
        }(e), H = function (t) {
            var e = "collapse", n = "bs.collapse", i = "." + n, o = t.fn[e], a = {toggle: !0, parent: ""},
                l = {toggle: "boolean", parent: "(string|element)"}, h = {
                    SHOW: "show" + i,
                    SHOWN: "shown" + i,
                    HIDE: "hide" + i,
                    HIDDEN: "hidden" + i,
                    CLICK_DATA_API: "click" + i + ".data-api"
                }, c = "show", u = "collapse", f = "collapsing", d = "collapsed", _ = "width", g = "height",
                p = {ACTIVES: ".show, .collapsing", DATA_TOGGLE: '[data-toggle="collapse"]'}, m = function () {
                    function i(e, n) {
                        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(n), this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                        for (var i = t(p.DATA_TOGGLE), s = 0; s < i.length; s++) {
                            var r = i[s], o = P.getSelectorFromElement(r);
                            null !== o && t(o).filter(e).length > 0 && (this._selector = o, this._triggerArray.push(r))
                        }
                        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                    }

                    var o = i.prototype;
                    return o.toggle = function () {
                        t(this._element).hasClass(c) ? this.hide() : this.show()
                    }, o.show = function () {
                        var e, s, r = this;
                        if (!this._isTransitioning && !t(this._element).hasClass(c) && (this._parent && 0 === (e = t.makeArray(t(this._parent).find(p.ACTIVES).filter('[data-parent="' + this._config.parent + '"]'))).length && (e = null), !(e && (s = t(e).not(this._selector).data(n)) && s._isTransitioning))) {
                            var o = t.Event(h.SHOW);
                            if (t(this._element).trigger(o), !o.isDefaultPrevented()) {
                                e && (i._jQueryInterface.call(t(e).not(this._selector), "hide"), s || t(e).data(n, null));
                                var a = this._getDimension();
                                t(this._element).removeClass(u).addClass(f), this._element.style[a] = 0, this._triggerArray.length > 0 && t(this._triggerArray).removeClass(d).attr("aria-expanded", !0), this.setTransitioning(!0);
                                var l = function () {
                                    t(r._element).removeClass(f).addClass(u).addClass(c), r._element.style[a] = "", r.setTransitioning(!1), t(r._element).trigger(h.SHOWN)
                                };
                                if (P.supportsTransitionEnd()) {
                                    var _ = "scroll" + (a[0].toUpperCase() + a.slice(1));
                                    t(this._element).one(P.TRANSITION_END, l).emulateTransitionEnd(600), this._element.style[a] = this._element[_] + "px"
                                } else l()
                            }
                        }
                    }, o.hide = function () {
                        var e = this;
                        if (!this._isTransitioning && t(this._element).hasClass(c)) {
                            var n = t.Event(h.HIDE);
                            if (t(this._element).trigger(n), !n.isDefaultPrevented()) {
                                var i = this._getDimension();
                                if (this._element.style[i] = this._element.getBoundingClientRect()[i] + "px", P.reflow(this._element), t(this._element).addClass(f).removeClass(u).removeClass(c), this._triggerArray.length > 0) for (var s = 0; s < this._triggerArray.length; s++) {
                                    var r = this._triggerArray[s], o = P.getSelectorFromElement(r);
                                    if (null !== o) t(o).hasClass(c) || t(r).addClass(d).attr("aria-expanded", !1)
                                }
                                this.setTransitioning(!0);
                                var a = function () {
                                    e.setTransitioning(!1), t(e._element).removeClass(f).addClass(u).trigger(h.HIDDEN)
                                };
                                this._element.style[i] = "", P.supportsTransitionEnd() ? t(this._element).one(P.TRANSITION_END, a).emulateTransitionEnd(600) : a()
                            }
                        }
                    }, o.setTransitioning = function (t) {
                        this._isTransitioning = t
                    }, o.dispose = function () {
                        t.removeData(this._element, n), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                    }, o._getConfig = function (t) {
                        return (t = r({}, a, t)).toggle = Boolean(t.toggle), P.typeCheckConfig(e, t, l), t
                    }, o._getDimension = function () {
                        return t(this._element).hasClass(_) ? _ : g
                    }, o._getParent = function () {
                        var e = this, n = null;
                        P.isElement(this._config.parent) ? (n = this._config.parent, "undefined" != typeof this._config.parent.jquery && (n = this._config.parent[0])) : n = t(this._config.parent)[0];
                        var s = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                        return t(n).find(s).each(function (t, n) {
                            e._addAriaAndCollapsedClass(i._getTargetFromElement(n), [n])
                        }), n
                    }, o._addAriaAndCollapsedClass = function (e, n) {
                        if (e) {
                            var i = t(e).hasClass(c);
                            n.length > 0 && t(n).toggleClass(d, !i).attr("aria-expanded", i)
                        }
                    }, i._getTargetFromElement = function (e) {
                        var n = P.getSelectorFromElement(e);
                        return n ? t(n)[0] : null
                    }, i._jQueryInterface = function (e) {
                        return this.each(function () {
                            var s = t(this), o = s.data(n), l = r({}, a, s.data(), "object" == typeof e && e);
                            if (!o && l.toggle && /show|hide/.test(e) && (l.toggle = !1), o || (o = new i(this, l), s.data(n, o)), "string" == typeof e) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e]()
                            }
                        })
                    }, s(i, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), i
                }();
            return t(document).on(h.CLICK_DATA_API, p.DATA_TOGGLE, function (e) {
                "A" === e.currentTarget.tagName && e.preventDefault();
                var i = t(this), s = P.getSelectorFromElement(this);
                t(s).each(function () {
                    var e = t(this), s = e.data(n) ? "toggle" : i.data();
                    m._jQueryInterface.call(e, s)
                })
            }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function () {
                return t.fn[e] = o, m._jQueryInterface
            }, m
        }(e), W = function (t) {
            var e = "dropdown", i = "bs.dropdown", o = "." + i, a = ".data-api", l = t.fn[e], h = new RegExp("38|40|27"),
                c = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    CLICK: "click" + o,
                    CLICK_DATA_API: "click" + o + a,
                    KEYDOWN_DATA_API: "keydown" + o + a,
                    KEYUP_DATA_API: "keyup" + o + a
                }, u = "disabled", f = "show", d = "dropup", _ = "dropright", g = "dropleft", p = "dropdown-menu-right",
                m = "dropdown-menu-left", v = "position-static", E = '[data-toggle="dropdown"]', T = ".dropdown form",
                y = ".dropdown-menu", C = ".navbar-nav", I = ".dropdown-menu .dropdown-item:not(.disabled)",
                A = "top-start", b = "top-end", D = "bottom-start", S = "bottom-end", w = "right-start", N = "left-start",
                O = {offset: 0, flip: !0, boundary: "scrollParent"},
                k = {offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)"}, L = function () {
                    function a(t, e) {
                        this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                    }

                    var l = a.prototype;
                    return l.toggle = function () {
                        if (!this._element.disabled && !t(this._element).hasClass(u)) {
                            var e = a._getParentFromElement(this._element), i = t(this._menu).hasClass(f);
                            if (a._clearMenus(), !i) {
                                var s = {relatedTarget: this._element}, r = t.Event(c.SHOW, s);
                                if (t(e).trigger(r), !r.isDefaultPrevented()) {
                                    if (!this._inNavbar) {
                                        if ("undefined" == typeof n) throw new TypeError("Bootstrap dropdown require Popper.js (https://popper.js.org)");
                                        var o = this._element;
                                        t(e).hasClass(d) && (t(this._menu).hasClass(m) || t(this._menu).hasClass(p)) && (o = e), "scrollParent" !== this._config.boundary && t(e).addClass(v), this._popper = new n(o, this._menu, this._getPopperConfig())
                                    }
                                    "ontouchstart" in document.documentElement && 0 === t(e).closest(C).length && t("body").children().on("mouseover", null, t.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), t(this._menu).toggleClass(f), t(e).toggleClass(f).trigger(t.Event(c.SHOWN, s))
                                }
                            }
                        }
                    }, l.dispose = function () {
                        t.removeData(this._element, i), t(this._element).off(o), this._element = null, this._menu = null, null !== this._popper && (this._popper.destroy(), this._popper = null)
                    }, l.update = function () {
                        this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
                    }, l._addEventListeners = function () {
                        var e = this;
                        t(this._element).on(c.CLICK, function (t) {
                            t.preventDefault(), t.stopPropagation(), e.toggle()
                        })
                    }, l._getConfig = function (n) {
                        return n = r({}, this.constructor.Default, t(this._element).data(), n), P.typeCheckConfig(e, n, this.constructor.DefaultType), n
                    }, l._getMenuElement = function () {
                        if (!this._menu) {
                            var e = a._getParentFromElement(this._element);
                            this._menu = t(e).find(y)[0]
                        }
                        return this._menu
                    }, l._getPlacement = function () {
                        var e = t(this._element).parent(), n = D;
                        return e.hasClass(d) ? (n = A, t(this._menu).hasClass(p) && (n = b)) : e.hasClass(_) ? n = w : e.hasClass(g) ? n = N : t(this._menu).hasClass(p) && (n = S), n
                    }, l._detectNavbar = function () {
                        return t(this._element).closest(".navbar").length > 0
                    }, l._getPopperConfig = function () {
                        var t = this, e = {};
                        return "function" == typeof this._config.offset ? e.fn = function (e) {
                            return e.offsets = r({}, e.offsets, t._config.offset(e.offsets) || {}), e
                        } : e.offset = this._config.offset, {
                            placement: this._getPlacement(),
                            modifiers: {
                                offset: e,
                                flip: {enabled: this._config.flip},
                                preventOverflow: {boundariesElement: this._config.boundary}
                            }
                        }
                    }, a._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = t(this).data(i);
                            if (n || (n = new a(this, "object" == typeof e ? e : null), t(this).data(i, n)), "string" == typeof e) {
                                if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                n[e]()
                            }
                        })
                    }, a._clearMenus = function (e) {
                        if (!e || 3 !== e.which && ("keyup" !== e.type || 9 === e.which)) for (var n = t.makeArray(t(E)), s = 0; s < n.length; s++) {
                            var r = a._getParentFromElement(n[s]), o = t(n[s]).data(i), l = {relatedTarget: n[s]};
                            if (o) {
                                var h = o._menu;
                                if (t(r).hasClass(f) && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && 9 === e.which) && t.contains(r, e.target))) {
                                    var u = t.Event(c.HIDE, l);
                                    t(r).trigger(u), u.isDefaultPrevented() || ("ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), n[s].setAttribute("aria-expanded", "false"), t(h).removeClass(f), t(r).removeClass(f).trigger(t.Event(c.HIDDEN, l)))
                                }
                            }
                        }
                    }, a._getParentFromElement = function (e) {
                        var n, i = P.getSelectorFromElement(e);
                        return i && (n = t(i)[0]), n || e.parentNode
                    }, a._dataApiKeydownHandler = function (e) {
                        if ((/input|textarea/i.test(e.target.tagName) ? !(32 === e.which || 27 !== e.which && (40 !== e.which && 38 !== e.which || t(e.target).closest(y).length)) : h.test(e.which)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !t(this).hasClass(u))) {
                            var n = a._getParentFromElement(this), i = t(n).hasClass(f);
                            if ((i || 27 === e.which && 32 === e.which) && (!i || 27 !== e.which && 32 !== e.which)) {
                                var s = t(n).find(I).get();
                                if (0 !== s.length) {
                                    var r = s.indexOf(e.target);
                                    38 === e.which && r > 0 && r--, 40 === e.which && r < s.length - 1 && r++, r < 0 && (r = 0), s[r].focus()
                                }
                            } else {
                                if (27 === e.which) {
                                    var o = t(n).find(E)[0];
                                    t(o).trigger("focus")
                                }
                                t(this).trigger("click")
                            }
                        }
                    }, s(a, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return O
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return k
                        }
                    }]), a
                }();
            return t(document).on(c.KEYDOWN_DATA_API, E, L._dataApiKeydownHandler).on(c.KEYDOWN_DATA_API, y, L._dataApiKeydownHandler).on(c.CLICK_DATA_API + " " + c.KEYUP_DATA_API, L._clearMenus).on(c.CLICK_DATA_API, E, function (e) {
                e.preventDefault(), e.stopPropagation(), L._jQueryInterface.call(t(this), "toggle")
            }).on(c.CLICK_DATA_API, T, function (t) {
                t.stopPropagation()
            }), t.fn[e] = L._jQueryInterface, t.fn[e].Constructor = L, t.fn[e].noConflict = function () {
                return t.fn[e] = l, L._jQueryInterface
            }, L
        }(e), M = function (t) {
            var e = "modal", n = "bs.modal", i = "." + n, o = t.fn.modal,
                a = {backdrop: !0, keyboard: !0, focus: !0, show: !0},
                l = {backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean"}, h = {
                    HIDE: "hide" + i,
                    HIDDEN: "hidden" + i,
                    SHOW: "show" + i,
                    SHOWN: "shown" + i,
                    FOCUSIN: "focusin" + i,
                    RESIZE: "resize" + i,
                    CLICK_DISMISS: "click.dismiss" + i,
                    KEYDOWN_DISMISS: "keydown.dismiss" + i,
                    MOUSEUP_DISMISS: "mouseup.dismiss" + i,
                    MOUSEDOWN_DISMISS: "mousedown.dismiss" + i,
                    CLICK_DATA_API: "click" + i + ".data-api"
                }, c = "modal-scrollbar-measure", u = "modal-backdrop", f = "modal-open", d = "fade", _ = "show", g = {
                    DIALOG: ".modal-dialog",
                    DATA_TOGGLE: '[data-toggle="modal"]',
                    DATA_DISMISS: '[data-dismiss="modal"]',
                    FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
                    STICKY_CONTENT: ".sticky-top",
                    NAVBAR_TOGGLER: ".navbar-toggler"
                }, p = function () {
                    function o(e, n) {
                        this._config = this._getConfig(n), this._element = e, this._dialog = t(e).find(g.DIALOG)[0], this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._originalBodyPadding = 0, this._scrollbarWidth = 0
                    }

                    var p = o.prototype;
                    return p.toggle = function (t) {
                        return this._isShown ? this.hide() : this.show(t)
                    }, p.show = function (e) {
                        var n = this;
                        if (!this._isTransitioning && !this._isShown) {
                            P.supportsTransitionEnd() && t(this._element).hasClass(d) && (this._isTransitioning = !0);
                            var i = t.Event(h.SHOW, {relatedTarget: e});
                            t(this._element).trigger(i), this._isShown || i.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), t(document.body).addClass(f), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(h.CLICK_DISMISS, g.DATA_DISMISS, function (t) {
                                return n.hide(t)
                            }), t(this._dialog).on(h.MOUSEDOWN_DISMISS, function () {
                                t(n._element).one(h.MOUSEUP_DISMISS, function (e) {
                                    t(e.target).is(n._element) && (n._ignoreBackdropClick = !0)
                                })
                            }), this._showBackdrop(function () {
                                return n._showElement(e)
                            }))
                        }
                    }, p.hide = function (e) {
                        var n = this;
                        if (e && e.preventDefault(), !this._isTransitioning && this._isShown) {
                            var i = t.Event(h.HIDE);
                            if (t(this._element).trigger(i), this._isShown && !i.isDefaultPrevented()) {
                                this._isShown = !1;
                                var s = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                                s && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), t(document).off(h.FOCUSIN), t(this._element).removeClass(_), t(this._element).off(h.CLICK_DISMISS), t(this._dialog).off(h.MOUSEDOWN_DISMISS), s ? t(this._element).one(P.TRANSITION_END, function (t) {
                                    return n._hideModal(t)
                                }).emulateTransitionEnd(300) : this._hideModal()
                            }
                        }
                    }, p.dispose = function () {
                        t.removeData(this._element, n), t(window, document, this._element, this._backdrop).off(i), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._scrollbarWidth = null
                    }, p.handleUpdate = function () {
                        this._adjustDialog()
                    }, p._getConfig = function (t) {
                        return t = r({}, a, t), P.typeCheckConfig(e, t, l), t
                    }, p._showElement = function (e) {
                        var n = this, i = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.scrollTop = 0, i && P.reflow(this._element), t(this._element).addClass(_), this._config.focus && this._enforceFocus();
                        var s = t.Event(h.SHOWN, {relatedTarget: e}), r = function () {
                            n._config.focus && n._element.focus(), n._isTransitioning = !1, t(n._element).trigger(s)
                        };
                        i ? t(this._dialog).one(P.TRANSITION_END, r).emulateTransitionEnd(300) : r()
                    }, p._enforceFocus = function () {
                        var e = this;
                        t(document).off(h.FOCUSIN).on(h.FOCUSIN, function (n) {
                            document !== n.target && e._element !== n.target && 0 === t(e._element).has(n.target).length && e._element.focus()
                        })
                    }, p._setEscapeEvent = function () {
                        var e = this;
                        this._isShown && this._config.keyboard ? t(this._element).on(h.KEYDOWN_DISMISS, function (t) {
                            27 === t.which && (t.preventDefault(), e.hide())
                        }) : this._isShown || t(this._element).off(h.KEYDOWN_DISMISS)
                    }, p._setResizeEvent = function () {
                        var e = this;
                        this._isShown ? t(window).on(h.RESIZE, function (t) {
                            return e.handleUpdate(t)
                        }) : t(window).off(h.RESIZE)
                    }, p._hideModal = function () {
                        var e = this;
                        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._isTransitioning = !1, this._showBackdrop(function () {
                            t(document.body).removeClass(f), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(h.HIDDEN)
                        })
                    }, p._removeBackdrop = function () {
                        this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
                    }, p._showBackdrop = function (e) {
                        var n = this, i = t(this._element).hasClass(d) ? d : "";
                        if (this._isShown && this._config.backdrop) {
                            var s = P.supportsTransitionEnd() && i;
                            if (this._backdrop = document.createElement("div"), this._backdrop.className = u, i && t(this._backdrop).addClass(i), t(this._backdrop).appendTo(document.body), t(this._element).on(h.CLICK_DISMISS, function (t) {
                                    n._ignoreBackdropClick ? n._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === n._config.backdrop ? n._element.focus() : n.hide())
                                }), s && P.reflow(this._backdrop), t(this._backdrop).addClass(_), !e) return;
                            if (!s) return void e();
                            t(this._backdrop).one(P.TRANSITION_END, e).emulateTransitionEnd(150)
                        } else if (!this._isShown && this._backdrop) {
                            t(this._backdrop).removeClass(_);
                            var r = function () {
                                n._removeBackdrop(), e && e()
                            };
                            P.supportsTransitionEnd() && t(this._element).hasClass(d) ? t(this._backdrop).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r()
                        } else e && e()
                    }, p._adjustDialog = function () {
                        var t = this._element.scrollHeight > document.documentElement.clientHeight;
                        !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                    }, p._resetAdjustments = function () {
                        this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                    }, p._checkScrollbar = function () {
                        var t = document.body.getBoundingClientRect();
                        this._isBodyOverflowing = t.left + t.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                    }, p._setScrollbar = function () {
                        var e = this;
                        if (this._isBodyOverflowing) {
                            t(g.FIXED_CONTENT).each(function (n, i) {
                                var s = t(i)[0].style.paddingRight, r = t(i).css("padding-right");
                                t(i).data("padding-right", s).css("padding-right", parseFloat(r) + e._scrollbarWidth + "px")
                            }), t(g.STICKY_CONTENT).each(function (n, i) {
                                var s = t(i)[0].style.marginRight, r = t(i).css("margin-right");
                                t(i).data("margin-right", s).css("margin-right", parseFloat(r) - e._scrollbarWidth + "px")
                            }), t(g.NAVBAR_TOGGLER).each(function (n, i) {
                                var s = t(i)[0].style.marginRight, r = t(i).css("margin-right");
                                t(i).data("margin-right", s).css("margin-right", parseFloat(r) + e._scrollbarWidth + "px")
                            });
                            var n = document.body.style.paddingRight, i = t("body").css("padding-right");
                            t("body").data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
                        }
                    }, p._resetScrollbar = function () {
                        t(g.FIXED_CONTENT).each(function (e, n) {
                            var i = t(n).data("padding-right");
                            "undefined" != typeof i && t(n).css("padding-right", i).removeData("padding-right")
                        }), t(g.STICKY_CONTENT + ", " + g.NAVBAR_TOGGLER).each(function (e, n) {
                            var i = t(n).data("margin-right");
                            "undefined" != typeof i && t(n).css("margin-right", i).removeData("margin-right")
                        });
                        var e = t("body").data("padding-right");
                        "undefined" != typeof e && t("body").css("padding-right", e).removeData("padding-right")
                    }, p._getScrollbarWidth = function () {
                        var t = document.createElement("div");
                        t.className = c, document.body.appendChild(t);
                        var e = t.getBoundingClientRect().width - t.clientWidth;
                        return document.body.removeChild(t), e
                    }, o._jQueryInterface = function (e, i) {
                        return this.each(function () {
                            var s = t(this).data(n), a = r({}, o.Default, t(this).data(), "object" == typeof e && e);
                            if (s || (s = new o(this, a), t(this).data(n, s)), "string" == typeof e) {
                                if ("undefined" == typeof s[e]) throw new TypeError('No method named "' + e + '"');
                                s[e](i)
                            } else a.show && s.show(i)
                        })
                    }, s(o, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), o
                }();
            return t(document).on(h.CLICK_DATA_API, g.DATA_TOGGLE, function (e) {
                var i, s = this, o = P.getSelectorFromElement(this);
                o && (i = t(o)[0]);
                var a = t(i).data(n) ? "toggle" : r({}, t(i).data(), t(this).data());
                "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
                var l = t(i).one(h.SHOW, function (e) {
                    e.isDefaultPrevented() || l.one(h.HIDDEN, function () {
                        t(s).is(":visible") && s.focus()
                    })
                });
                p._jQueryInterface.call(t(i), a, this)
            }), t.fn.modal = p._jQueryInterface, t.fn.modal.Constructor = p, t.fn.modal.noConflict = function () {
                return t.fn.modal = o, p._jQueryInterface
            }, p
        }(e), U = function (t) {
            var e = "tooltip", i = "bs.tooltip", o = "." + i, a = t.fn[e], l = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                h = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)"
                }, c = {AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left"}, u = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent"
                }, f = "show", d = "out", _ = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    INSERTED: "inserted" + o,
                    CLICK: "click" + o,
                    FOCUSIN: "focusin" + o,
                    FOCUSOUT: "focusout" + o,
                    MOUSEENTER: "mouseenter" + o,
                    MOUSELEAVE: "mouseleave" + o
                }, g = "fade", p = "show", m = ".tooltip-inner", v = ".arrow", E = "hover", T = "focus", y = "click",
                C = "manual", I = function () {
                    function a(t, e) {
                        if ("undefined" == typeof n) throw new TypeError("Bootstrap tooltips require Popper.js (https://popper.js.org)");
                        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
                    }

                    var I = a.prototype;
                    return I.enable = function () {
                        this._isEnabled = !0
                    }, I.disable = function () {
                        this._isEnabled = !1
                    }, I.toggleEnabled = function () {
                        this._isEnabled = !this._isEnabled
                    }, I.toggle = function (e) {
                        if (this._isEnabled) if (e) {
                            var n = this.constructor.DATA_KEY, i = t(e.currentTarget).data(n);
                            i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), i._activeTrigger.click = !i._activeTrigger.click, i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i)
                        } else {
                            if (t(this.getTipElement()).hasClass(p)) return void this._leave(null, this);
                            this._enter(null, this)
                        }
                    }, I.dispose = function () {
                        clearTimeout(this._timeout), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), t(this.element).closest(".modal").off("hide.bs.modal"), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, null !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
                    }, I.show = function () {
                        var e = this;
                        if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
                        var i = t.Event(this.constructor.Event.SHOW);
                        if (this.isWithContent() && this._isEnabled) {
                            t(this.element).trigger(i);
                            var s = t.contains(this.element.ownerDocument.documentElement, this.element);
                            if (i.isDefaultPrevented() || !s) return;
                            var r = this.getTipElement(), o = P.getUID(this.constructor.NAME);
                            r.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && t(r).addClass(g);
                            var l = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                                h = this._getAttachment(l);
                            this.addAttachmentClass(h);
                            var c = !1 === this.config.container ? document.body : t(this.config.container);
                            t(r).data(this.constructor.DATA_KEY, this), t.contains(this.element.ownerDocument.documentElement, this.tip) || t(r).appendTo(c), t(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new n(this.element, r, {
                                placement: h,
                                modifiers: {
                                    offset: {offset: this.config.offset},
                                    flip: {behavior: this.config.fallbackPlacement},
                                    arrow: {element: v},
                                    preventOverflow: {boundariesElement: this.config.boundary}
                                },
                                onCreate: function (t) {
                                    t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                                },
                                onUpdate: function (t) {
                                    e._handlePopperPlacementChange(t)
                                }
                            }), t(r).addClass(p), "ontouchstart" in document.documentElement && t("body").children().on("mouseover", null, t.noop);
                            var u = function () {
                                e.config.animation && e._fixTransition();
                                var n = e._hoverState;
                                e._hoverState = null, t(e.element).trigger(e.constructor.Event.SHOWN), n === d && e._leave(null, e)
                            };
                            P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(this.tip).one(P.TRANSITION_END, u).emulateTransitionEnd(a._TRANSITION_DURATION) : u()
                        }
                    }, I.hide = function (e) {
                        var n = this, i = this.getTipElement(), s = t.Event(this.constructor.Event.HIDE), r = function () {
                            n._hoverState !== f && i.parentNode && i.parentNode.removeChild(i), n._cleanTipClass(), n.element.removeAttribute("aria-describedby"), t(n.element).trigger(n.constructor.Event.HIDDEN), null !== n._popper && n._popper.destroy(), e && e()
                        };
                        t(this.element).trigger(s), s.isDefaultPrevented() || (t(i).removeClass(p), "ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), this._activeTrigger[y] = !1, this._activeTrigger[T] = !1, this._activeTrigger[E] = !1, P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(i).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r(), this._hoverState = "")
                    }, I.update = function () {
                        null !== this._popper && this._popper.scheduleUpdate()
                    }, I.isWithContent = function () {
                        return Boolean(this.getTitle())
                    }, I.addAttachmentClass = function (e) {
                        t(this.getTipElement()).addClass("bs-tooltip-" + e)
                    }, I.getTipElement = function () {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, I.setContent = function () {
                        var e = t(this.getTipElement());
                        this.setElementContent(e.find(m), this.getTitle()), e.removeClass(g + " " + p)
                    }, I.setElementContent = function (e, n) {
                        var i = this.config.html;
                        "object" == typeof n && (n.nodeType || n.jquery) ? i ? t(n).parent().is(e) || e.empty().append(n) : e.text(t(n).text()) : e[i ? "html" : "text"](n)
                    }, I.getTitle = function () {
                        var t = this.element.getAttribute("data-original-title");
                        return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
                    }, I._getAttachment = function (t) {
                        return c[t.toUpperCase()]
                    }, I._setListeners = function () {
                        var e = this;
                        this.config.trigger.split(" ").forEach(function (n) {
                            if ("click" === n) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, function (t) {
                                return e.toggle(t)
                            }); else if (n !== C) {
                                var i = n === E ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                    s = n === E ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                t(e.element).on(i, e.config.selector, function (t) {
                                    return e._enter(t)
                                }).on(s, e.config.selector, function (t) {
                                    return e._leave(t)
                                })
                            }
                            t(e.element).closest(".modal").on("hide.bs.modal", function () {
                                return e.hide()
                            })
                        }), this.config.selector ? this.config = r({}, this.config, {
                            trigger: "manual",
                            selector: ""
                        }) : this._fixTitle()
                    }, I._fixTitle = function () {
                        var t = typeof this.element.getAttribute("data-original-title");
                        (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                    }, I._enter = function (e, n) {
                        var i = this.constructor.DATA_KEY;
                        (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusin" === e.type ? T : E] = !0), t(n.getTipElement()).hasClass(p) || n._hoverState === f ? n._hoverState = f : (clearTimeout(n._timeout), n._hoverState = f, n.config.delay && n.config.delay.show ? n._timeout = setTimeout(function () {
                            n._hoverState === f && n.show()
                        }, n.config.delay.show) : n.show())
                    }, I._leave = function (e, n) {
                        var i = this.constructor.DATA_KEY;
                        (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusout" === e.type ? T : E] = !1), n._isWithActiveTrigger() || (clearTimeout(n._timeout), n._hoverState = d, n.config.delay && n.config.delay.hide ? n._timeout = setTimeout(function () {
                            n._hoverState === d && n.hide()
                        }, n.config.delay.hide) : n.hide())
                    }, I._isWithActiveTrigger = function () {
                        for (var t in this._activeTrigger) if (this._activeTrigger[t]) return !0;
                        return !1
                    }, I._getConfig = function (n) {
                        return "number" == typeof(n = r({}, this.constructor.Default, t(this.element).data(), n)).delay && (n.delay = {
                            show: n.delay,
                            hide: n.delay
                        }), "number" == typeof n.title && (n.title = n.title.toString()), "number" == typeof n.content && (n.content = n.content.toString()), P.typeCheckConfig(e, n, this.constructor.DefaultType), n
                    }, I._getDelegateConfig = function () {
                        var t = {};
                        if (this.config) for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                        return t
                    }, I._cleanTipClass = function () {
                        var e = t(this.getTipElement()), n = e.attr("class").match(l);
                        null !== n && n.length > 0 && e.removeClass(n.join(""))
                    }, I._handlePopperPlacementChange = function (t) {
                        this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
                    }, I._fixTransition = function () {
                        var e = this.getTipElement(), n = this.config.animation;
                        null === e.getAttribute("x-placement") && (t(e).removeClass(g), this.config.animation = !1, this.hide(), this.show(), this.config.animation = n)
                    }, a._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = t(this).data(i), s = "object" == typeof e && e;
                            if ((n || !/dispose|hide/.test(e)) && (n || (n = new a(this, s), t(this).data(i, n)), "string" == typeof e)) {
                                if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                n[e]()
                            }
                        })
                    }, s(a, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return u
                        }
                    }, {
                        key: "NAME", get: function () {
                            return e
                        }
                    }, {
                        key: "DATA_KEY", get: function () {
                            return i
                        }
                    }, {
                        key: "Event", get: function () {
                            return _
                        }
                    }, {
                        key: "EVENT_KEY", get: function () {
                            return o
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return h
                        }
                    }]), a
                }();
            return t.fn[e] = I._jQueryInterface, t.fn[e].Constructor = I, t.fn[e].noConflict = function () {
                return t.fn[e] = a, I._jQueryInterface
            }, I
        }(e), x = function (t) {
            var e = "popover", n = "bs.popover", i = "." + n, o = t.fn[e], a = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                l = r({}, U.Default, {
                    placement: "right",
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }), h = r({}, U.DefaultType, {content: "(string|element|function)"}), c = "fade", u = "show",
                f = ".popover-header", d = ".popover-body", _ = {
                    HIDE: "hide" + i,
                    HIDDEN: "hidden" + i,
                    SHOW: "show" + i,
                    SHOWN: "shown" + i,
                    INSERTED: "inserted" + i,
                    CLICK: "click" + i,
                    FOCUSIN: "focusin" + i,
                    FOCUSOUT: "focusout" + i,
                    MOUSEENTER: "mouseenter" + i,
                    MOUSELEAVE: "mouseleave" + i
                }, g = function (r) {
                    var o, g;

                    function p() {
                        return r.apply(this, arguments) || this
                    }

                    g = r, (o = p).prototype = Object.create(g.prototype), o.prototype.constructor = o, o.__proto__ = g;
                    var m = p.prototype;
                    return m.isWithContent = function () {
                        return this.getTitle() || this._getContent()
                    }, m.addAttachmentClass = function (e) {
                        t(this.getTipElement()).addClass("bs-popover-" + e)
                    }, m.getTipElement = function () {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, m.setContent = function () {
                        var e = t(this.getTipElement());
                        this.setElementContent(e.find(f), this.getTitle());
                        var n = this._getContent();
                        "function" == typeof n && (n = n.call(this.element)), this.setElementContent(e.find(d), n), e.removeClass(c + " " + u)
                    }, m._getContent = function () {
                        return this.element.getAttribute("data-content") || this.config.content
                    }, m._cleanTipClass = function () {
                        var e = t(this.getTipElement()), n = e.attr("class").match(a);
                        null !== n && n.length > 0 && e.removeClass(n.join(""))
                    }, p._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n), s = "object" == typeof e ? e : null;
                            if ((i || !/destroy|hide/.test(e)) && (i || (i = new p(this, s), t(this).data(n, i)), "string" == typeof e)) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, s(p, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return l
                        }
                    }, {
                        key: "NAME", get: function () {
                            return e
                        }
                    }, {
                        key: "DATA_KEY", get: function () {
                            return n
                        }
                    }, {
                        key: "Event", get: function () {
                            return _
                        }
                    }, {
                        key: "EVENT_KEY", get: function () {
                            return i
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return h
                        }
                    }]), p
                }(U);
            return t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function () {
                return t.fn[e] = o, g._jQueryInterface
            }, g
        }(e), K = function (t) {
            var e = "scrollspy", n = "bs.scrollspy", i = "." + n, o = t.fn[e], a = {offset: 10, method: "auto", target: ""},
                l = {offset: "number", method: "string", target: "(string|element)"},
                h = {ACTIVATE: "activate" + i, SCROLL: "scroll" + i, LOAD_DATA_API: "load" + i + ".data-api"},
                c = "dropdown-item", u = "active", f = {
                    DATA_SPY: '[data-spy="scroll"]',
                    ACTIVE: ".active",
                    NAV_LIST_GROUP: ".nav, .list-group",
                    NAV_LINKS: ".nav-link",
                    NAV_ITEMS: ".nav-item",
                    LIST_ITEMS: ".list-group-item",
                    DROPDOWN: ".dropdown",
                    DROPDOWN_ITEMS: ".dropdown-item",
                    DROPDOWN_TOGGLE: ".dropdown-toggle"
                }, d = "offset", _ = "position", g = function () {
                    function o(e, n) {
                        var i = this;
                        this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(n), this._selector = this._config.target + " " + f.NAV_LINKS + "," + this._config.target + " " + f.LIST_ITEMS + "," + this._config.target + " " + f.DROPDOWN_ITEMS, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(h.SCROLL, function (t) {
                            return i._process(t)
                        }), this.refresh(), this._process()
                    }

                    var g = o.prototype;
                    return g.refresh = function () {
                        var e = this, n = this._scrollElement === this._scrollElement.window ? d : _,
                            i = "auto" === this._config.method ? n : this._config.method,
                            s = i === _ ? this._getScrollTop() : 0;
                        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), t.makeArray(t(this._selector)).map(function (e) {
                            var n, r = P.getSelectorFromElement(e);
                            if (r && (n = t(r)[0]), n) {
                                var o = n.getBoundingClientRect();
                                if (o.width || o.height) return [t(n)[i]().top + s, r]
                            }
                            return null
                        }).filter(function (t) {
                            return t
                        }).sort(function (t, e) {
                            return t[0] - e[0]
                        }).forEach(function (t) {
                            e._offsets.push(t[0]), e._targets.push(t[1])
                        })
                    }, g.dispose = function () {
                        t.removeData(this._element, n), t(this._scrollElement).off(i), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                    }, g._getConfig = function (n) {
                        if ("string" != typeof(n = r({}, a, n)).target) {
                            var i = t(n.target).attr("id");
                            i || (i = P.getUID(e), t(n.target).attr("id", i)), n.target = "#" + i
                        }
                        return P.typeCheckConfig(e, n, l), n
                    }, g._getScrollTop = function () {
                        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                    }, g._getScrollHeight = function () {
                        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                    }, g._getOffsetHeight = function () {
                        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                    }, g._process = function () {
                        var t = this._getScrollTop() + this._config.offset, e = this._getScrollHeight(),
                            n = this._config.offset + e - this._getOffsetHeight();
                        if (this._scrollHeight !== e && this.refresh(), t >= n) {
                            var i = this._targets[this._targets.length - 1];
                            this._activeTarget !== i && this._activate(i)
                        } else {
                            if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                            for (var s = this._offsets.length; s--;) {
                                this._activeTarget !== this._targets[s] && t >= this._offsets[s] && ("undefined" == typeof this._offsets[s + 1] || t < this._offsets[s + 1]) && this._activate(this._targets[s])
                            }
                        }
                    }, g._activate = function (e) {
                        this._activeTarget = e, this._clear();
                        var n = this._selector.split(",");
                        n = n.map(function (t) {
                            return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                        });
                        var i = t(n.join(","));
                        i.hasClass(c) ? (i.closest(f.DROPDOWN).find(f.DROPDOWN_TOGGLE).addClass(u), i.addClass(u)) : (i.addClass(u), i.parents(f.NAV_LIST_GROUP).prev(f.NAV_LINKS + ", " + f.LIST_ITEMS).addClass(u), i.parents(f.NAV_LIST_GROUP).prev(f.NAV_ITEMS).children(f.NAV_LINKS).addClass(u)), t(this._scrollElement).trigger(h.ACTIVATE, {relatedTarget: e})
                    }, g._clear = function () {
                        t(this._selector).filter(f.ACTIVE).removeClass(u)
                    }, o._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n);
                            if (i || (i = new o(this, "object" == typeof e && e), t(this).data(n, i)), "string" == typeof e) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, s(o, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), o
                }();
            return t(window).on(h.LOAD_DATA_API, function () {
                for (var e = t.makeArray(t(f.DATA_SPY)), n = e.length; n--;) {
                    var i = t(e[n]);
                    g._jQueryInterface.call(i, i.data())
                }
            }), t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function () {
                return t.fn[e] = o, g._jQueryInterface
            }, g
        }(e), V = function (t) {
            var e = "bs.tab", n = "." + e, i = t.fn.tab, r = {
                    HIDE: "hide" + n,
                    HIDDEN: "hidden" + n,
                    SHOW: "show" + n,
                    SHOWN: "shown" + n,
                    CLICK_DATA_API: "click.bs.tab.data-api"
                }, o = "dropdown-menu", a = "active", l = "disabled", h = "fade", c = "show", u = ".dropdown",
                f = ".nav, .list-group", d = ".active", _ = "> li > .active",
                g = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', p = ".dropdown-toggle",
                m = "> .dropdown-menu .active", v = function () {
                    function n(t) {
                        this._element = t
                    }

                    var i = n.prototype;
                    return i.show = function () {
                        var e = this;
                        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(a) || t(this._element).hasClass(l))) {
                            var n, i, s = t(this._element).closest(f)[0], o = P.getSelectorFromElement(this._element);
                            if (s) {
                                var h = "UL" === s.nodeName ? _ : d;
                                i = (i = t.makeArray(t(s).find(h)))[i.length - 1]
                            }
                            var c = t.Event(r.HIDE, {relatedTarget: this._element}), u = t.Event(r.SHOW, {relatedTarget: i});
                            if (i && t(i).trigger(c), t(this._element).trigger(u), !u.isDefaultPrevented() && !c.isDefaultPrevented()) {
                                o && (n = t(o)[0]), this._activate(this._element, s);
                                var g = function () {
                                    var n = t.Event(r.HIDDEN, {relatedTarget: e._element}),
                                        s = t.Event(r.SHOWN, {relatedTarget: i});
                                    t(i).trigger(n), t(e._element).trigger(s)
                                };
                                n ? this._activate(n, n.parentNode, g) : g()
                            }
                        }
                    }, i.dispose = function () {
                        t.removeData(this._element, e), this._element = null
                    }, i._activate = function (e, n, i) {
                        var s = this, r = ("UL" === n.nodeName ? t(n).find(_) : t(n).children(d))[0],
                            o = i && P.supportsTransitionEnd() && r && t(r).hasClass(h), a = function () {
                                return s._transitionComplete(e, r, i)
                            };
                        r && o ? t(r).one(P.TRANSITION_END, a).emulateTransitionEnd(150) : a()
                    }, i._transitionComplete = function (e, n, i) {
                        if (n) {
                            t(n).removeClass(c + " " + a);
                            var s = t(n.parentNode).find(m)[0];
                            s && t(s).removeClass(a), "tab" === n.getAttribute("role") && n.setAttribute("aria-selected", !1)
                        }
                        if (t(e).addClass(a), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), P.reflow(e), t(e).addClass(c), e.parentNode && t(e.parentNode).hasClass(o)) {
                            var r = t(e).closest(u)[0];
                            r && t(r).find(p).addClass(a), e.setAttribute("aria-expanded", !0)
                        }
                        i && i()
                    }, n._jQueryInterface = function (i) {
                        return this.each(function () {
                            var s = t(this), r = s.data(e);
                            if (r || (r = new n(this), s.data(e, r)), "string" == typeof i) {
                                if ("undefined" == typeof r[i]) throw new TypeError('No method named "' + i + '"');
                                r[i]()
                            }
                        })
                    }, s(n, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }]), n
                }();
            return t(document).on(r.CLICK_DATA_API, g, function (e) {
                e.preventDefault(), v._jQueryInterface.call(t(this), "show")
            }), t.fn.tab = v._jQueryInterface, t.fn.tab.Constructor = v, t.fn.tab.noConflict = function () {
                return t.fn.tab = i, v._jQueryInterface
            }, v
        }(e);
    !function (t) {
        if ("undefined" == typeof t) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
        var e = t.fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
    }(e), t.Util = P, t.Alert = L, t.Button = R, t.Carousel = j, t.Collapse = H, t.Dropdown = W, t.Modal = M, t.Popover = x, t.Scrollspy = K, t.Tab = V, t.Tooltip = U, Object.defineProperty(t, "__esModule", {value: !0})
});
//# sourceMappingURL=bootstrap.min.js.map

/* ------------------------------------------------------------------
	Aos
--------------------------------------------------------------------- */
/*!
 * Aos
 */
!function (e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.AOS = t() : e.AOS = t()
}(this, function () {
    return function (e) {
        function t(o) {
            if (n[o]) return n[o].exports;
            var i = n[o] = {exports: {}, id: o, loaded: !1};
            return e[o].call(i.exports, i, i.exports, t), i.loaded = !0, i.exports
        }

        var n = {};
        return t.m = e, t.c = n, t.p = "dist/", t(0)
    }([function (e, t, n) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {default: e}
        }

        var i = Object.assign || function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o])
                }
                return e
            }, r = n(1), a = (o(r), n(6)), u = o(a), c = n(7), f = o(c), s = n(8), d = o(s), l = n(9), p = o(l), m = n(10),
            b = o(m), v = n(11), y = o(v), g = n(14), h = o(g), w = [], k = !1, x = document.all && !window.atob, j = {
                offset: 120,
                delay: 0,
                easing: "ease",
                duration: 400,
                disable: !1,
                once: !1,
                startEvent: "DOMContentLoaded"
            }, O = function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                if (e && (k = !0), k) return w = (0, y.default)(w, j), (0, b.default)(w, j.once), w
            }, S = function () {
                w = (0, h.default)(), O()
            }, _ = function () {
                w.forEach(function (e, t) {
                    e.node.removeAttribute("data-aos"), e.node.removeAttribute("data-aos-easing"), e.node.removeAttribute("data-aos-duration"), e.node.removeAttribute("data-aos-delay")
                })
            }, E = function (e) {
                return e === !0 || "mobile" === e && p.default.mobile() || "phone" === e && p.default.phone() || "tablet" === e && p.default.tablet() || "function" == typeof e && e() === !0
            }, z = function (e) {
                return j = i(j, e), w = (0, h.default)(), E(j.disable) || x ? _() : (document.querySelector("body").setAttribute("data-aos-easing", j.easing), document.querySelector("body").setAttribute("data-aos-duration", j.duration), document.querySelector("body").setAttribute("data-aos-delay", j.delay), "DOMContentLoaded" === j.startEvent && ["complete", "interactive"].indexOf(document.readyState) > -1 ? O(!0) : "load" === j.startEvent ? window.addEventListener(j.startEvent, function () {
                    O(!0)
                }) : document.addEventListener(j.startEvent, function () {
                    O(!0)
                }), window.addEventListener("resize", (0, f.default)(O, 50, !0)), window.addEventListener("orientationchange", (0, f.default)(O, 50, !0)), window.addEventListener("scroll", (0, u.default)(function () {
                    (0, b.default)(w, j.once)
                }, 99)), document.addEventListener("DOMNodeRemoved", function (e) {
                    var t = e.target;
                    t && 1 === t.nodeType && t.hasAttribute && t.hasAttribute("data-aos") && (0, f.default)(S, 50, !0)
                }), (0, d.default)("[data-aos]", S), w)
            };
        e.exports = {init: z, refresh: O, refreshHard: S}
    }, function (e, t) {
    }, , , , , function (e, t) {
        (function (t) {
            "use strict";

            function n(e, t, n) {
                function o(t) {
                    var n = b, o = v;
                    return b = v = void 0, k = t, g = e.apply(o, n)
                }

                function r(e) {
                    return k = e, h = setTimeout(s, t), S ? o(e) : g
                }

                function a(e) {
                    var n = e - w, o = e - k, i = t - n;
                    return _ ? j(i, y - o) : i
                }

                function c(e) {
                    var n = e - w, o = e - k;
                    return void 0 === w || n >= t || n < 0 || _ && o >= y
                }

                function s() {
                    var e = O();
                    return c(e) ? d(e) : void(h = setTimeout(s, a(e)))
                }

                function d(e) {
                    return h = void 0, E && b ? o(e) : (b = v = void 0, g)
                }

                function l() {
                    void 0 !== h && clearTimeout(h), k = 0, b = w = v = h = void 0
                }

                function p() {
                    return void 0 === h ? g : d(O())
                }

                function m() {
                    var e = O(), n = c(e);
                    if (b = arguments, v = this, w = e, n) {
                        if (void 0 === h) return r(w);
                        if (_) return h = setTimeout(s, t), o(w)
                    }
                    return void 0 === h && (h = setTimeout(s, t)), g
                }

                var b, v, y, g, h, w, k = 0, S = !1, _ = !1, E = !0;
                if ("function" != typeof e) throw new TypeError(f);
                return t = u(t) || 0, i(n) && (S = !!n.leading, _ = "maxWait" in n, y = _ ? x(u(n.maxWait) || 0, t) : y, E = "trailing" in n ? !!n.trailing : E), m.cancel = l, m.flush = p, m
            }

            function o(e, t, o) {
                var r = !0, a = !0;
                if ("function" != typeof e) throw new TypeError(f);
                return i(o) && (r = "leading" in o ? !!o.leading : r, a = "trailing" in o ? !!o.trailing : a), n(e, t, {
                    leading: r,
                    maxWait: t,
                    trailing: a
                })
            }

            function i(e) {
                var t = "undefined" == typeof e ? "undefined" : c(e);
                return !!e && ("object" == t || "function" == t)
            }

            function r(e) {
                return !!e && "object" == ("undefined" == typeof e ? "undefined" : c(e))
            }

            function a(e) {
                return "symbol" == ("undefined" == typeof e ? "undefined" : c(e)) || r(e) && k.call(e) == d
            }

            function u(e) {
                if ("number" == typeof e) return e;
                if (a(e)) return s;
                if (i(e)) {
                    var t = "function" == typeof e.valueOf ? e.valueOf() : e;
                    e = i(t) ? t + "" : t
                }
                if ("string" != typeof e) return 0 === e ? e : +e;
                e = e.replace(l, "");
                var n = m.test(e);
                return n || b.test(e) ? v(e.slice(2), n ? 2 : 8) : p.test(e) ? s : +e
            }

            var c = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }, f = "Expected a function", s = NaN, d = "[object Symbol]", l = /^\s+|\s+$/g, p = /^[-+]0x[0-9a-f]+$/i,
                m = /^0b[01]+$/i, b = /^0o[0-7]+$/i, v = parseInt,
                y = "object" == ("undefined" == typeof t ? "undefined" : c(t)) && t && t.Object === Object && t,
                g = "object" == ("undefined" == typeof self ? "undefined" : c(self)) && self && self.Object === Object && self,
                h = y || g || Function("return this")(), w = Object.prototype, k = w.toString, x = Math.max,
                j = Math.min, O = function () {
                    return h.Date.now()
                };
            e.exports = o
        }).call(t, function () {
            return this
        }())
    }, function (e, t) {
        (function (t) {
            "use strict";

            function n(e, t, n) {
                function i(t) {
                    var n = b, o = v;
                    return b = v = void 0, O = t, g = e.apply(o, n)
                }

                function r(e) {
                    return O = e, h = setTimeout(s, t), S ? i(e) : g
                }

                function u(e) {
                    var n = e - w, o = e - O, i = t - n;
                    return _ ? x(i, y - o) : i
                }

                function f(e) {
                    var n = e - w, o = e - O;
                    return void 0 === w || n >= t || n < 0 || _ && o >= y
                }

                function s() {
                    var e = j();
                    return f(e) ? d(e) : void(h = setTimeout(s, u(e)))
                }

                function d(e) {
                    return h = void 0, E && b ? i(e) : (b = v = void 0, g)
                }

                function l() {
                    void 0 !== h && clearTimeout(h), O = 0, b = w = v = h = void 0
                }

                function p() {
                    return void 0 === h ? g : d(j())
                }

                function m() {
                    var e = j(), n = f(e);
                    if (b = arguments, v = this, w = e, n) {
                        if (void 0 === h) return r(w);
                        if (_) return h = setTimeout(s, t), i(w)
                    }
                    return void 0 === h && (h = setTimeout(s, t)), g
                }

                var b, v, y, g, h, w, O = 0, S = !1, _ = !1, E = !0;
                if ("function" != typeof e) throw new TypeError(c);
                return t = a(t) || 0, o(n) && (S = !!n.leading, _ = "maxWait" in n, y = _ ? k(a(n.maxWait) || 0, t) : y, E = "trailing" in n ? !!n.trailing : E), m.cancel = l, m.flush = p, m
            }

            function o(e) {
                var t = "undefined" == typeof e ? "undefined" : u(e);
                return !!e && ("object" == t || "function" == t)
            }

            function i(e) {
                return !!e && "object" == ("undefined" == typeof e ? "undefined" : u(e))
            }

            function r(e) {
                return "symbol" == ("undefined" == typeof e ? "undefined" : u(e)) || i(e) && w.call(e) == s
            }

            function a(e) {
                if ("number" == typeof e) return e;
                if (r(e)) return f;
                if (o(e)) {
                    var t = "function" == typeof e.valueOf ? e.valueOf() : e;
                    e = o(t) ? t + "" : t
                }
                if ("string" != typeof e) return 0 === e ? e : +e;
                e = e.replace(d, "");
                var n = p.test(e);
                return n || m.test(e) ? b(e.slice(2), n ? 2 : 8) : l.test(e) ? f : +e
            }

            var u = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                }, c = "Expected a function", f = NaN, s = "[object Symbol]", d = /^\s+|\s+$/g, l = /^[-+]0x[0-9a-f]+$/i,
                p = /^0b[01]+$/i, m = /^0o[0-7]+$/i, b = parseInt,
                v = "object" == ("undefined" == typeof t ? "undefined" : u(t)) && t && t.Object === Object && t,
                y = "object" == ("undefined" == typeof self ? "undefined" : u(self)) && self && self.Object === Object && self,
                g = v || y || Function("return this")(), h = Object.prototype, w = h.toString, k = Math.max,
                x = Math.min, j = function () {
                    return g.Date.now()
                };
            e.exports = n
        }).call(t, function () {
            return this
        }())
    }, function (e, t) {
        "use strict";

        function n(e, t) {
            a.push({selector: e, fn: t}), !u && r && (u = new r(o), u.observe(i.documentElement, {
                childList: !0,
                subtree: !0,
                removedNodes: !0
            })), o()
        }

        function o() {
            for (var e, t, n = 0, o = a.length; n < o; n++) {
                e = a[n], t = i.querySelectorAll(e.selector);
                for (var r, u = 0, c = t.length; u < c; u++) r = t[u], r.ready || (r.ready = !0, e.fn.call(r, r))
            }
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = window.document, r = window.MutationObserver || window.WebKitMutationObserver, a = [], u = void 0;
        t.default = n
    }, function (e, t) {
        "use strict";

        function n(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function o() {
            return navigator.userAgent || navigator.vendor || window.opera || ""
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var o = t[n];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }

                return function (t, n, o) {
                    return n && e(t.prototype, n), o && e(t, o), t
                }
            }(),
            r = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
            a = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
            u = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,
            c = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
            f = function () {
                function e() {
                    n(this, e)
                }

                return i(e, [{
                    key: "phone", value: function () {
                        var e = o();
                        return !(!r.test(e) && !a.test(e.substr(0, 4)))
                    }
                }, {
                    key: "mobile", value: function () {
                        var e = o();
                        return !(!u.test(e) && !c.test(e.substr(0, 4)))
                    }
                }, {
                    key: "tablet", value: function () {
                        return this.mobile() && !this.phone()
                    }
                }]), e
            }();
        t.default = new f
    }, function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        var n = function (e, t, n) {
            var o = e.node.getAttribute("data-aos-once");
            t > e.position ? e.node.classList.add("aos-animate") : "undefined" != typeof o && ("false" === o || !n && "true" !== o) && e.node.classList.remove("aos-animate")
        }, o = function (e, t) {
            var o = window.pageYOffset, i = window.innerHeight;
            e.forEach(function (e, r) {
                n(e, i + o, t)
            })
        };
        t.default = o
    }, function (e, t, n) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {default: e}
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = n(12), r = o(i), a = function (e, t) {
            return e.forEach(function (e, n) {
                e.node.classList.add("aos-init"), e.position = (0, r.default)(e.node, t.offset)
            }), e
        };
        t.default = a
    }, function (e, t, n) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {default: e}
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = n(13), r = o(i), a = function (e, t) {
            var n = 0, o = 0, i = window.innerHeight, a = {
                offset: e.getAttribute("data-aos-offset"),
                anchor: e.getAttribute("data-aos-anchor"),
                anchorPlacement: e.getAttribute("data-aos-anchor-placement")
            };
            switch (a.offset && !isNaN(a.offset) && (o = parseInt(a.offset)), a.anchor && document.querySelectorAll(a.anchor) && (e = document.querySelectorAll(a.anchor)[0]), n = (0, r.default)(e).top, a.anchorPlacement) {
                case"top-bottom":
                    break;
                case"center-bottom":
                    n += e.offsetHeight / 2;
                    break;
                case"bottom-bottom":
                    n += e.offsetHeight;
                    break;
                case"top-center":
                    n += i / 2;
                    break;
                case"bottom-center":
                    n += i / 2 + e.offsetHeight;
                    break;
                case"center-center":
                    n += i / 2 + e.offsetHeight / 2;
                    break;
                case"top-top":
                    n += i;
                    break;
                case"bottom-top":
                    n += e.offsetHeight + i;
                    break;
                case"center-top":
                    n += e.offsetHeight / 2 + i
            }
            return a.anchorPlacement || a.offset || isNaN(t) || (o = t), n + o
        };
        t.default = a
    }, function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        var n = function (e) {
            for (var t = 0, n = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);) t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0), n += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0), e = e.offsetParent;
            return {top: n, left: t}
        };
        t.default = n
    }, function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        var n = function (e) {
            e = e || document.querySelectorAll("[data-aos]");
            var t = [];
            return [].forEach.call(e, function (e, n) {
                t.push({node: e})
            }), t
        };
        t.default = n
    }])
});
//# sourceMappingURL=aos.js.map

/* ------------------------------------------------------------------
	Ace Responsive Menu Plugin
--------------------------------------------------------------------- */

/*!
 * Ace Responsive Menu Plugin
 * Version: 1.0
 */
(function ($) {
    $.fn.aceResponsiveMenu = function (options) {

        //plugin's default options
        var defaults = {
            resizeWidth: '768',
            animationSpeed: 'fast',
            accoridonExpAll: false
        };

        //Variables
        var options = $.extend(defaults, options),
            opt = options,
            $resizeWidth = opt.resizeWidth,
            $animationSpeed = opt.animationSpeed,
            $expandAll = opt.accoridonExpAll,
            $aceMenu = $(this),
            $menuStyle = $(this).attr('data-menu-style');

        // Initilizing
        $aceMenu.find('ul').addClass("sub-menu");
        $aceMenu.find('ul').siblings('a').append('<span class="arrow "></span>');
        if ($menuStyle == 'accordion') {
            $(this).addClass('collapse');
        }

        // Window resize on menu breakpoint
        if ($(window).innerWidth() <= $resizeWidth) {
            menuCollapse();
        }
        $(window).resize(function () {
            menuCollapse();
        });

        // Menu Toggle
        function menuCollapse() {
            var w = $(window).innerWidth();
            if (w <= $resizeWidth) {
                $aceMenu.find('li.menu-active').removeClass('menu-active');
                $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                $aceMenu.addClass('collapse hide-menu');
                $aceMenu.attr('data-menu-style', '');
                $('.menu-toggle').show();
            } else {
                $aceMenu.attr('data-menu-style', $menuStyle);
                $aceMenu.removeClass('collapse hide-menu').removeAttr('style');
                $('.menu-toggle').hide();
                if ($aceMenu.attr('data-menu-style') == 'accordion') {
                    $aceMenu.addClass('collapse');
                    return;
                }
                $aceMenu.find('li.menu-active').removeClass('menu-active');
                $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
            }
        }

        //ToggleBtn Click
        $('#menu-btn').click(function () {
            $aceMenu.slideToggle().toggleClass('hide-menu');
        });


        // Main function
        return this.each(function () {
            // Function for Horizontal menu on mouseenter
            $aceMenu.on('mouseover', '> li a', function () {
                if ($aceMenu.hasClass('collapse') === true) {
                    return false;
                }
                $(this).off('click', '> li a');
                $(this).parent('li').siblings().children('.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style').stop();
                $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                return;
            });
            $aceMenu.on('mouseleave', 'li', function () {
                if ($aceMenu.hasClass('collapse') === true) {
                    return false;
                }
                $(this).off('click', '> li a');
                $(this).removeClass('menu-active');
                $(this).children('ul.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style');
                return;
            });
            //End of Horizontal menu function

            // Function for Vertical/Responsive Menu on mouse click
            $aceMenu.on('click', '> li a', function () {
                if ($aceMenu.hasClass('collapse') === false) {
                    //return false;
                }
                $(this).off('mouseover', '> li a');
                if ($(this).parent().hasClass('menu-active')) {
                    $(this).parent().children('.sub-menu').slideUp().removeClass('slide');
                    $(this).parent().removeClass('menu-active');
                } else {
                    if ($expandAll == true) {
                        $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                        return;
                    }
                    $(this).parent().siblings().removeClass('menu-active');
                    $(this).parent('li').siblings().children('.sub-menu').slideUp().removeClass('slide');
                    $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                }
            });
            //End of responsive menu function

        });
        //End of Main function
    }
})(jQuery);

/* ------------------------------------------------------------------
	jQuery Waypoints - v2.0.3
--------------------------------------------------------------------- */
/*!
 * jQuery Waypoints - v2.0.3
 */
(function () {
    var t = [].indexOf || function (t) {
        for (var e = 0, n = this.length; e < n; e++) {
            if (e in this && this[e] === t) return e
        }
        return -1
    }, e = [].slice;
    (function (t, e) {
        if (typeof define === "function" && define.amd) {
            return define("waypoints", ["jquery"], function (n) {
                return e(n, t)
            })
        } else {
            return e(t.jQuery, t)
        }
    })(this, function (n, r) {
        var i, o, l, s, f, u, a, c, h, d, p, y, v, w, g, m;
        i = n(r);
        c = t.call(r, "ontouchstart") >= 0;
        s = {horizontal: {}, vertical: {}};
        f = 1;
        a = {};
        u = "waypoints-context-id";
        p = "resize.waypoints";
        y = "scroll.waypoints";
        v = 1;
        w = "waypoints-waypoint-ids";
        g = "waypoint";
        m = "waypoints";
        o = function () {
            function t(t) {
                var e = this;
                this.$element = t;
                this.element = t[0];
                this.didResize = false;
                this.didScroll = false;
                this.id = "context" + f++;
                this.oldScroll = {x: t.scrollLeft(), y: t.scrollTop()};
                this.waypoints = {horizontal: {}, vertical: {}};
                t.data(u, this.id);
                a[this.id] = this;
                t.bind(y, function () {
                    var t;
                    if (!(e.didScroll || c)) {
                        e.didScroll = true;
                        t = function () {
                            e.doScroll();
                            return e.didScroll = false
                        };
                        return r.setTimeout(t, n[m].settings.scrollThrottle)
                    }
                });
                t.bind(p, function () {
                    var t;
                    if (!e.didResize) {
                        e.didResize = true;
                        t = function () {
                            n[m]("refresh");
                            return e.didResize = false
                        };
                        return r.setTimeout(t, n[m].settings.resizeThrottle)
                    }
                })
            }

            t.prototype.doScroll = function () {
                var t, e = this;
                t = {
                    horizontal: {
                        newScroll: this.$element.scrollLeft(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left"
                    },
                    vertical: {
                        newScroll: this.$element.scrollTop(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up"
                    }
                };
                if (c && (!t.vertical.oldScroll || !t.vertical.newScroll)) {
                    n[m]("refresh")
                }
                n.each(t, function (t, r) {
                    var i, o, l;
                    l = [];
                    o = r.newScroll > r.oldScroll;
                    i = o ? r.forward : r.backward;
                    n.each(e.waypoints[t], function (t, e) {
                        var n, i;
                        if (r.oldScroll < (n = e.offset) && n <= r.newScroll) {
                            return l.push(e)
                        } else if (r.newScroll < (i = e.offset) && i <= r.oldScroll) {
                            return l.push(e)
                        }
                    });
                    l.sort(function (t, e) {
                        return t.offset - e.offset
                    });
                    if (!o) {
                        l.reverse()
                    }
                    return n.each(l, function (t, e) {
                        if (e.options.continuous || t === l.length - 1) {
                            return e.trigger([i])
                        }
                    })
                });
                return this.oldScroll = {x: t.horizontal.newScroll, y: t.vertical.newScroll}
            };
            t.prototype.refresh = function () {
                var t, e, r, i = this;
                r = n.isWindow(this.element);
                e = this.$element.offset();
                this.doScroll();
                t = {
                    horizontal: {
                        contextOffset: r ? 0 : e.left,
                        contextScroll: r ? 0 : this.oldScroll.x,
                        contextDimension: this.$element.width(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                        offsetProp: "left"
                    },
                    vertical: {
                        contextOffset: r ? 0 : e.top,
                        contextScroll: r ? 0 : this.oldScroll.y,
                        contextDimension: r ? n[m]("viewportHeight") : this.$element.height(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                        offsetProp: "top"
                    }
                };
                return n.each(t, function (t, e) {
                    return n.each(i.waypoints[t], function (t, r) {
                        var i, o, l, s, f;
                        i = r.options.offset;
                        l = r.offset;
                        o = n.isWindow(r.element) ? 0 : r.$element.offset()[e.offsetProp];
                        if (n.isFunction(i)) {
                            i = i.apply(r.element)
                        } else if (typeof i === "string") {
                            i = parseFloat(i);
                            if (r.options.offset.indexOf("%") > -1) {
                                i = Math.ceil(e.contextDimension * i / 100)
                            }
                        }
                        r.offset = o - e.contextOffset + e.contextScroll - i;
                        if (r.options.onlyOnScroll && l != null || !r.enabled) {
                            return
                        }
                        if (l !== null && l < (s = e.oldScroll) && s <= r.offset) {
                            return r.trigger([e.backward])
                        } else if (l !== null && l > (f = e.oldScroll) && f >= r.offset) {
                            return r.trigger([e.forward])
                        } else if (l === null && e.oldScroll >= r.offset) {
                            return r.trigger([e.forward])
                        }
                    })
                })
            };
            t.prototype.checkEmpty = function () {
                if (n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical)) {
                    this.$element.unbind([p, y].join(" "));
                    return delete a[this.id]
                }
            };
            return t
        }();
        l = function () {
            function t(t, e, r) {
                var i, o;
                r = n.extend({}, n.fn[g].defaults, r);
                if (r.offset === "bottom-in-view") {
                    r.offset = function () {
                        var t;
                        t = n[m]("viewportHeight");
                        if (!n.isWindow(e.element)) {
                            t = e.$element.height()
                        }
                        return t - n(this).outerHeight()
                    }
                }
                this.$element = t;
                this.element = t[0];
                this.axis = r.horizontal ? "horizontal" : "vertical";
                this.callback = r.handler;
                this.context = e;
                this.enabled = r.enabled;
                this.id = "waypoints" + v++;
                this.offset = null;
                this.options = r;
                e.waypoints[this.axis][this.id] = this;
                s[this.axis][this.id] = this;
                i = (o = t.data(w)) != null ? o : [];
                i.push(this.id);
                t.data(w, i)
            }

            t.prototype.trigger = function (t) {
                if (!this.enabled) {
                    return
                }
                if (this.callback != null) {
                    this.callback.apply(this.element, t)
                }
                if (this.options.triggerOnce) {
                    return this.destroy()
                }
            };
            t.prototype.disable = function () {
                return this.enabled = false
            };
            t.prototype.enable = function () {
                this.context.refresh();
                return this.enabled = true
            };
            t.prototype.destroy = function () {
                delete s[this.axis][this.id];
                delete this.context.waypoints[this.axis][this.id];
                return this.context.checkEmpty()
            };
            t.getWaypointsByElement = function (t) {
                var e, r;
                r = n(t).data(w);
                if (!r) {
                    return []
                }
                e = n.extend({}, s.horizontal, s.vertical);
                return n.map(r, function (t) {
                    return e[t]
                })
            };
            return t
        }();
        d = {
            init: function (t, e) {
                var r;
                if (e == null) {
                    e = {}
                }
                if ((r = e.handler) == null) {
                    e.handler = t
                }
                this.each(function () {
                    var t, r, i, s;
                    t = n(this);
                    i = (s = e.context) != null ? s : n.fn[g].defaults.context;
                    if (!n.isWindow(i)) {
                        i = t.closest(i)
                    }
                    i = n(i);
                    r = a[i.data(u)];
                    if (!r) {
                        r = new o(i)
                    }
                    return new l(t, r, e)
                });
                n[m]("refresh");
                return this
            }, disable: function () {
                return d._invoke(this, "disable")
            }, enable: function () {
                return d._invoke(this, "enable")
            }, destroy: function () {
                return d._invoke(this, "destroy")
            }, prev: function (t, e) {
                return d._traverse.call(this, t, e, function (t, e, n) {
                    if (e > 0) {
                        return t.push(n[e - 1])
                    }
                })
            }, next: function (t, e) {
                return d._traverse.call(this, t, e, function (t, e, n) {
                    if (e < n.length - 1) {
                        return t.push(n[e + 1])
                    }
                })
            }, _traverse: function (t, e, i) {
                var o, l;
                if (t == null) {
                    t = "vertical"
                }
                if (e == null) {
                    e = r
                }
                l = h.aggregate(e);
                o = [];
                this.each(function () {
                    var e;
                    e = n.inArray(this, l[t]);
                    return i(o, e, l[t])
                });
                return this.pushStack(o)
            }, _invoke: function (t, e) {
                t.each(function () {
                    var t;
                    t = l.getWaypointsByElement(this);
                    return n.each(t, function (t, n) {
                        n[e]();
                        return true
                    })
                });
                return this
            }
        };
        n.fn[g] = function () {
            var t, r;
            r = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
            if (d[r]) {
                return d[r].apply(this, t)
            } else if (n.isFunction(r)) {
                return d.init.apply(this, arguments)
            } else if (n.isPlainObject(r)) {
                return d.init.apply(this, [null, r])
            } else if (!r) {
                return n.error("jQuery Waypoints needs a callback function or handler option.")
            } else {
                return n.error("The " + r + " method does not exist in jQuery Waypoints.")
            }
        };
        n.fn[g].defaults = {
            context: r,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: 0,
            triggerOnce: false
        };
        h = {
            refresh: function () {
                return n.each(a, function (t, e) {
                    return e.refresh()
                })
            }, viewportHeight: function () {
                var t;
                return (t = r.innerHeight) != null ? t : i.height()
            }, aggregate: function (t) {
                var e, r, i;
                e = s;
                if (t) {
                    e = (i = a[n(t).data(u)]) != null ? i.waypoints : void 0
                }
                if (!e) {
                    return []
                }
                r = {horizontal: [], vertical: []};
                n.each(r, function (t, i) {
                    n.each(e[t], function (t, e) {
                        return i.push(e)
                    });
                    i.sort(function (t, e) {
                        return t.offset - e.offset
                    });
                    r[t] = n.map(i, function (t) {
                        return t.element
                    });
                    return r[t] = n.unique(r[t])
                });
                return r
            }, above: function (t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "vertical", function (t, e) {
                    return e.offset <= t.oldScroll.y
                })
            }, below: function (t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "vertical", function (t, e) {
                    return e.offset > t.oldScroll.y
                })
            }, left: function (t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "horizontal", function (t, e) {
                    return e.offset <= t.oldScroll.x
                })
            }, right: function (t) {
                if (t == null) {
                    t = r
                }
                return h._filter(t, "horizontal", function (t, e) {
                    return e.offset > t.oldScroll.x
                })
            }, enable: function () {
                return h._invoke("enable")
            }, disable: function () {
                return h._invoke("disable")
            }, destroy: function () {
                return h._invoke("destroy")
            }, extendFn: function (t, e) {
                return d[t] = e
            }, _invoke: function (t) {
                var e;
                e = n.extend({}, s.vertical, s.horizontal);
                return n.each(e, function (e, n) {
                    n[t]();
                    return true
                })
            }, _filter: function (t, e, r) {
                var i, o;
                i = a[n(t).data(u)];
                if (!i) {
                    return []
                }
                o = [];
                n.each(i.waypoints[e], function (t, e) {
                    if (r(i, e)) {
                        return o.push(e)
                    }
                });
                o.sort(function (t, e) {
                    return t.offset - e.offset
                });
                return n.map(o, function (t) {
                    return t.element
                })
            }
        };
        n[m] = function () {
            var t, n;
            n = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
            if (h[n]) {
                return h[n].apply(null, t)
            } else {
                return h.aggregate.call(null, n)
            }
        };
        n[m].settings = {resizeThrottle: 100, scrollThrottle: 30};
        return i.load(function () {
            return n[m]("refresh")
        })
    })
}).call(this);

/* ------------------------------------------------------------------
	jquery.counterup.js 1.0
--------------------------------------------------------------------- */

/*!
 * jquery.counterup.js 1.0
 */
(function (e) {
    "use strict";
    e.fn.counterUp = function (t) {
        var n = e.extend({time: 400, delay: 10}, t);
        return this.each(function () {
            var t = e(this), r = n, i = function () {
                var e = [], n = r.time / r.delay, i = t.text(), s = /[0-9]+,[0-9]+/.test(i);
                i = i.replace(/,/g, "");
                var o = /^[0-9]+$/.test(i), u = /^[0-9]+\.[0-9]+$/.test(i), a = u ? (i.split(".")[1] || []).length : 0;
                for (var f = n; f >= 1; f--) {
                    var l = parseInt(i / n * f);
                    u && (l = parseFloat(i / n * f).toFixed(a));
                    if (s) while (/(\d+)(\d{3})/.test(l.toString())) l = l.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                    e.unshift(l)
                }
                t.data("counterup-nums", e);
                t.text("0");
                var c = function () {
                    t.text(t.data("counterup-nums").shift());
                    if (t.data("counterup-nums").length) setTimeout(t.data("counterup-func"), r.delay); else {
                        delete t.data("counterup-nums");
                        t.data("counterup-nums", null);
                        t.data("counterup-func", null)
                    }
                };
                t.data("counterup-func", c);
                setTimeout(t.data("counterup-func"), r.delay)
            };
            t.waypoint(i, {offset: "100%", triggerOnce: !0})
        })
    }
})(jQuery);

/* ------------------------------------------------------------------
	Isotope PACKAGED v3.0.4
--------------------------------------------------------------------- */
/*!
 * Isotope PACKAGED v3.0.4
 *
 * Licensed GPLv3 for open source use
 * or Isotope Commercial License for commercial use
 *
 * http://isotope.metafizzy.co
 * Copyright 2017 Metafizzy
 */

!function (t, e) {
    "function" == typeof define && define.amd ? define("jquery-bridget/jquery-bridget", ["jquery"], function (i) {
        return e(t, i)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("jquery")) : t.jQueryBridget = e(t, t.jQuery)
}(window, function (t, e) {
    "use strict";

    function i(i, s, a) {
        function u(t, e, o) {
            var n, s = "$()." + i + '("' + e + '")';
            return t.each(function (t, u) {
                var h = a.data(u, i);
                if (!h) return void r(i + " not initialized. Cannot call methods, i.e. " + s);
                var d = h[e];
                if (!d || "_" == e.charAt(0)) return void r(s + " is not a valid method");
                var l = d.apply(h, o);
                n = void 0 === n ? l : n
            }), void 0 !== n ? n : t
        }

        function h(t, e) {
            t.each(function (t, o) {
                var n = a.data(o, i);
                n ? (n.option(e), n._init()) : (n = new s(o, e), a.data(o, i, n))
            })
        }

        a = a || e || t.jQuery, a && (s.prototype.option || (s.prototype.option = function (t) {
            a.isPlainObject(t) && (this.options = a.extend(!0, this.options, t))
        }), a.fn[i] = function (t) {
            if ("string" == typeof t) {
                var e = n.call(arguments, 1);
                return u(this, t, e)
            }
            return h(this, t), this
        }, o(a))
    }

    function o(t) {
        !t || t && t.bridget || (t.bridget = i)
    }

    var n = Array.prototype.slice, s = t.console, r = "undefined" == typeof s ? function () {
    } : function (t) {
        s.error(t)
    };
    return o(e || t.jQuery), i
}), function (t, e) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
}("undefined" != typeof window ? window : this, function () {
    function t() {
    }

    var e = t.prototype;
    return e.on = function (t, e) {
        if (t && e) {
            var i = this._events = this._events || {}, o = i[t] = i[t] || [];
            return o.indexOf(e) == -1 && o.push(e), this
        }
    }, e.once = function (t, e) {
        if (t && e) {
            this.on(t, e);
            var i = this._onceEvents = this._onceEvents || {}, o = i[t] = i[t] || {};
            return o[e] = !0, this
        }
    }, e.off = function (t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var o = i.indexOf(e);
            return o != -1 && i.splice(o, 1), this
        }
    }, e.emitEvent = function (t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var o = 0, n = i[o];
            e = e || [];
            for (var s = this._onceEvents && this._onceEvents[t]; n;) {
                var r = s && s[n];
                r && (this.off(t, n), delete s[n]), n.apply(this, e), o += r ? 0 : 1, n = i[o]
            }
            return this
        }
    }, t
}), function (t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("get-size/get-size", [], function () {
        return e()
    }) : "object" == typeof module && module.exports ? module.exports = e() : t.getSize = e()
}(window, function () {
    "use strict";

    function t(t) {
        var e = parseFloat(t), i = t.indexOf("%") == -1 && !isNaN(e);
        return i && e
    }

    function e() {
    }

    function i() {
        for (var t = {
            width: 0,
            height: 0,
            innerWidth: 0,
            innerHeight: 0,
            outerWidth: 0,
            outerHeight: 0
        }, e = 0; e < h; e++) {
            var i = u[e];
            t[i] = 0
        }
        return t
    }

    function o(t) {
        var e = getComputedStyle(t);
        return e || a("Style returned " + e + ". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"), e
    }

    function n() {
        if (!d) {
            d = !0;
            var e = document.createElement("div");
            e.style.width = "200px", e.style.padding = "1px 2px 3px 4px", e.style.borderStyle = "solid", e.style.borderWidth = "1px 2px 3px 4px", e.style.boxSizing = "border-box";
            var i = document.body || document.documentElement;
            i.appendChild(e);
            var n = o(e);
            s.isBoxSizeOuter = r = 200 == t(n.width), i.removeChild(e)
        }
    }

    function s(e) {
        if (n(), "string" == typeof e && (e = document.querySelector(e)), e && "object" == typeof e && e.nodeType) {
            var s = o(e);
            if ("none" == s.display) return i();
            var a = {};
            a.width = e.offsetWidth, a.height = e.offsetHeight;
            for (var d = a.isBorderBox = "border-box" == s.boxSizing, l = 0; l < h; l++) {
                var f = u[l], c = s[f], m = parseFloat(c);
                a[f] = isNaN(m) ? 0 : m
            }
            var p = a.paddingLeft + a.paddingRight, y = a.paddingTop + a.paddingBottom,
                g = a.marginLeft + a.marginRight, v = a.marginTop + a.marginBottom,
                _ = a.borderLeftWidth + a.borderRightWidth, I = a.borderTopWidth + a.borderBottomWidth, z = d && r,
                x = t(s.width);
            x !== !1 && (a.width = x + (z ? 0 : p + _));
            var S = t(s.height);
            return S !== !1 && (a.height = S + (z ? 0 : y + I)), a.innerWidth = a.width - (p + _), a.innerHeight = a.height - (y + I), a.outerWidth = a.width + g, a.outerHeight = a.height + v, a
        }
    }

    var r, a = "undefined" == typeof console ? e : function (t) {
            console.error(t)
        },
        u = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"],
        h = u.length, d = !1;
    return s
}), function (t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("desandro-matches-selector/matches-selector", e) : "object" == typeof module && module.exports ? module.exports = e() : t.matchesSelector = e()
}(window, function () {
    "use strict";
    var t = function () {
        var t = window.Element.prototype;
        if (t.matches) return "matches";
        if (t.matchesSelector) return "matchesSelector";
        for (var e = ["webkit", "moz", "ms", "o"], i = 0; i < e.length; i++) {
            var o = e[i], n = o + "MatchesSelector";
            if (t[n]) return n
        }
    }();
    return function (e, i) {
        return e[t](i)
    }
}), function (t, e) {
    "function" == typeof define && define.amd ? define("fizzy-ui-utils/utils", ["desandro-matches-selector/matches-selector"], function (i) {
        return e(t, i)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("desandro-matches-selector")) : t.fizzyUIUtils = e(t, t.matchesSelector)
}(window, function (t, e) {
    var i = {};
    i.extend = function (t, e) {
        for (var i in e) t[i] = e[i];
        return t
    }, i.modulo = function (t, e) {
        return (t % e + e) % e
    }, i.makeArray = function (t) {
        var e = [];
        if (Array.isArray(t)) e = t; else if (t && "object" == typeof t && "number" == typeof t.length) for (var i = 0; i < t.length; i++) e.push(t[i]); else e.push(t);
        return e
    }, i.removeFrom = function (t, e) {
        var i = t.indexOf(e);
        i != -1 && t.splice(i, 1)
    }, i.getParent = function (t, i) {
        for (; t.parentNode && t != document.body;) if (t = t.parentNode, e(t, i)) return t
    }, i.getQueryElement = function (t) {
        return "string" == typeof t ? document.querySelector(t) : t
    }, i.handleEvent = function (t) {
        var e = "on" + t.type;
        this[e] && this[e](t)
    }, i.filterFindElements = function (t, o) {
        t = i.makeArray(t);
        var n = [];
        return t.forEach(function (t) {
            if (t instanceof HTMLElement) {
                if (!o) return void n.push(t);
                e(t, o) && n.push(t);
                for (var i = t.querySelectorAll(o), s = 0; s < i.length; s++) n.push(i[s])
            }
        }), n
    }, i.debounceMethod = function (t, e, i) {
        var o = t.prototype[e], n = e + "Timeout";
        t.prototype[e] = function () {
            var t = this[n];
            t && clearTimeout(t);
            var e = arguments, s = this;
            this[n] = setTimeout(function () {
                o.apply(s, e), delete s[n]
            }, i || 100)
        }
    }, i.docReady = function (t) {
        var e = document.readyState;
        "complete" == e || "interactive" == e ? setTimeout(t) : document.addEventListener("DOMContentLoaded", t)
    }, i.toDashed = function (t) {
        return t.replace(/(.)([A-Z])/g, function (t, e, i) {
            return e + "-" + i
        }).toLowerCase()
    };
    var o = t.console;
    return i.htmlInit = function (e, n) {
        i.docReady(function () {
            var s = i.toDashed(n), r = "data-" + s, a = document.querySelectorAll("[" + r + "]"),
                u = document.querySelectorAll(".js-" + s), h = i.makeArray(a).concat(i.makeArray(u)),
                d = r + "-options", l = t.jQuery;
            h.forEach(function (t) {
                var i, s = t.getAttribute(r) || t.getAttribute(d);
                try {
                    i = s && JSON.parse(s)
                } catch (a) {
                    return void(o && o.error("Error parsing " + r + " on " + t.className + ": " + a))
                }
                var u = new e(t, i);
                l && l.data(t, n, u)
            })
        })
    }, i
}), function (t, e) {
    "function" == typeof define && define.amd ? define("outlayer/item", ["ev-emitter/ev-emitter", "get-size/get-size"], e) : "object" == typeof module && module.exports ? module.exports = e(require("ev-emitter"), require("get-size")) : (t.Outlayer = {}, t.Outlayer.Item = e(t.EvEmitter, t.getSize))
}(window, function (t, e) {
    "use strict";

    function i(t) {
        for (var e in t) return !1;
        return e = null, !0
    }

    function o(t, e) {
        t && (this.element = t, this.layout = e, this.position = {x: 0, y: 0}, this._create())
    }

    function n(t) {
        return t.replace(/([A-Z])/g, function (t) {
            return "-" + t.toLowerCase()
        })
    }

    var s = document.documentElement.style, r = "string" == typeof s.transition ? "transition" : "WebkitTransition",
        a = "string" == typeof s.transform ? "transform" : "WebkitTransform",
        u = {WebkitTransition: "webkitTransitionEnd", transition: "transitionend"}[r], h = {
            transform: a,
            transition: r,
            transitionDuration: r + "Duration",
            transitionProperty: r + "Property",
            transitionDelay: r + "Delay"
        }, d = o.prototype = Object.create(t.prototype);
    d.constructor = o, d._create = function () {
        this._transn = {ingProperties: {}, clean: {}, onEnd: {}}, this.css({position: "absolute"})
    }, d.handleEvent = function (t) {
        var e = "on" + t.type;
        this[e] && this[e](t)
    }, d.getSize = function () {
        this.size = e(this.element)
    }, d.css = function (t) {
        var e = this.element.style;
        for (var i in t) {
            var o = h[i] || i;
            e[o] = t[i]
        }
    }, d.getPosition = function () {
        var t = getComputedStyle(this.element), e = this.layout._getOption("originLeft"),
            i = this.layout._getOption("originTop"), o = t[e ? "left" : "right"], n = t[i ? "top" : "bottom"],
            s = this.layout.size, r = o.indexOf("%") != -1 ? parseFloat(o) / 100 * s.width : parseInt(o, 10),
            a = n.indexOf("%") != -1 ? parseFloat(n) / 100 * s.height : parseInt(n, 10);
        r = isNaN(r) ? 0 : r, a = isNaN(a) ? 0 : a, r -= e ? s.paddingLeft : s.paddingRight, a -= i ? s.paddingTop : s.paddingBottom, this.position.x = r, this.position.y = a
    }, d.layoutPosition = function () {
        var t = this.layout.size, e = {}, i = this.layout._getOption("originLeft"),
            o = this.layout._getOption("originTop"), n = i ? "paddingLeft" : "paddingRight", s = i ? "left" : "right",
            r = i ? "right" : "left", a = this.position.x + t[n];
        e[s] = this.getXValue(a), e[r] = "";
        var u = o ? "paddingTop" : "paddingBottom", h = o ? "top" : "bottom", d = o ? "bottom" : "top",
            l = this.position.y + t[u];
        e[h] = this.getYValue(l), e[d] = "", this.css(e), this.emitEvent("layout", [this])
    }, d.getXValue = function (t) {
        var e = this.layout._getOption("horizontal");
        return this.layout.options.percentPosition && !e ? t / this.layout.size.width * 100 + "%" : t + "px"
    }, d.getYValue = function (t) {
        var e = this.layout._getOption("horizontal");
        return this.layout.options.percentPosition && e ? t / this.layout.size.height * 100 + "%" : t + "px"
    }, d._transitionTo = function (t, e) {
        this.getPosition();
        var i = this.position.x, o = this.position.y, n = parseInt(t, 10), s = parseInt(e, 10),
            r = n === this.position.x && s === this.position.y;
        if (this.setPosition(t, e), r && !this.isTransitioning) return void this.layoutPosition();
        var a = t - i, u = e - o, h = {};
        h.transform = this.getTranslate(a, u), this.transition({
            to: h,
            onTransitionEnd: {transform: this.layoutPosition},
            isCleaning: !0
        })
    }, d.getTranslate = function (t, e) {
        var i = this.layout._getOption("originLeft"), o = this.layout._getOption("originTop");
        return t = i ? t : -t, e = o ? e : -e, "translate3d(" + t + "px, " + e + "px, 0)"
    }, d.goTo = function (t, e) {
        this.setPosition(t, e), this.layoutPosition()
    }, d.moveTo = d._transitionTo, d.setPosition = function (t, e) {
        this.position.x = parseInt(t, 10), this.position.y = parseInt(e, 10)
    }, d._nonTransition = function (t) {
        this.css(t.to), t.isCleaning && this._removeStyles(t.to);
        for (var e in t.onTransitionEnd) t.onTransitionEnd[e].call(this)
    }, d.transition = function (t) {
        if (!parseFloat(this.layout.options.transitionDuration)) return void this._nonTransition(t);
        var e = this._transn;
        for (var i in t.onTransitionEnd) e.onEnd[i] = t.onTransitionEnd[i];
        for (i in t.to) e.ingProperties[i] = !0, t.isCleaning && (e.clean[i] = !0);
        if (t.from) {
            this.css(t.from);
            var o = this.element.offsetHeight;
            o = null
        }
        this.enableTransition(t.to), this.css(t.to), this.isTransitioning = !0
    };
    var l = "opacity," + n(a);
    d.enableTransition = function () {
        if (!this.isTransitioning) {
            var t = this.layout.options.transitionDuration;
            t = "number" == typeof t ? t + "ms" : t, this.css({
                transitionProperty: l,
                transitionDuration: t,
                transitionDelay: this.staggerDelay || 0
            }), this.element.addEventListener(u, this, !1)
        }
    }, d.onwebkitTransitionEnd = function (t) {
        this.ontransitionend(t)
    }, d.onotransitionend = function (t) {
        this.ontransitionend(t)
    };
    var f = {"-webkit-transform": "transform"};
    d.ontransitionend = function (t) {
        if (t.target === this.element) {
            var e = this._transn, o = f[t.propertyName] || t.propertyName;
            if (delete e.ingProperties[o], i(e.ingProperties) && this.disableTransition(), o in e.clean && (this.element.style[t.propertyName] = "", delete e.clean[o]), o in e.onEnd) {
                var n = e.onEnd[o];
                n.call(this), delete e.onEnd[o]
            }
            this.emitEvent("transitionEnd", [this])
        }
    }, d.disableTransition = function () {
        this.removeTransitionStyles(), this.element.removeEventListener(u, this, !1), this.isTransitioning = !1
    }, d._removeStyles = function (t) {
        var e = {};
        for (var i in t) e[i] = "";
        this.css(e)
    };
    var c = {transitionProperty: "", transitionDuration: "", transitionDelay: ""};
    return d.removeTransitionStyles = function () {
        this.css(c)
    }, d.stagger = function (t) {
        t = isNaN(t) ? 0 : t, this.staggerDelay = t + "ms"
    }, d.removeElem = function () {
        this.element.parentNode.removeChild(this.element), this.css({display: ""}), this.emitEvent("remove", [this])
    }, d.remove = function () {
        return r && parseFloat(this.layout.options.transitionDuration) ? (this.once("transitionEnd", function () {
            this.removeElem()
        }), void this.hide()) : void this.removeElem()
    }, d.reveal = function () {
        delete this.isHidden, this.css({display: ""});
        var t = this.layout.options, e = {}, i = this.getHideRevealTransitionEndProperty("visibleStyle");
        e[i] = this.onRevealTransitionEnd, this.transition({
            from: t.hiddenStyle,
            to: t.visibleStyle,
            isCleaning: !0,
            onTransitionEnd: e
        })
    }, d.onRevealTransitionEnd = function () {
        this.isHidden || this.emitEvent("reveal")
    }, d.getHideRevealTransitionEndProperty = function (t) {
        var e = this.layout.options[t];
        if (e.opacity) return "opacity";
        for (var i in e) return i
    }, d.hide = function () {
        this.isHidden = !0, this.css({display: ""});
        var t = this.layout.options, e = {}, i = this.getHideRevealTransitionEndProperty("hiddenStyle");
        e[i] = this.onHideTransitionEnd, this.transition({
            from: t.visibleStyle,
            to: t.hiddenStyle,
            isCleaning: !0,
            onTransitionEnd: e
        })
    }, d.onHideTransitionEnd = function () {
        this.isHidden && (this.css({display: "none"}), this.emitEvent("hide"))
    }, d.destroy = function () {
        this.css({position: "", left: "", right: "", top: "", bottom: "", transition: "", transform: ""})
    }, o
}), function (t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("outlayer/outlayer", ["ev-emitter/ev-emitter", "get-size/get-size", "fizzy-ui-utils/utils", "./item"], function (i, o, n, s) {
        return e(t, i, o, n, s)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter"), require("get-size"), require("fizzy-ui-utils"), require("./item")) : t.Outlayer = e(t, t.EvEmitter, t.getSize, t.fizzyUIUtils, t.Outlayer.Item)
}(window, function (t, e, i, o, n) {
    "use strict";

    function s(t, e) {
        var i = o.getQueryElement(t);
        if (!i) return void(u && u.error("Bad element for " + this.constructor.namespace + ": " + (i || t)));
        this.element = i, h && (this.$element = h(this.element)), this.options = o.extend({}, this.constructor.defaults), this.option(e);
        var n = ++l;
        this.element.outlayerGUID = n, f[n] = this, this._create();
        var s = this._getOption("initLayout");
        s && this.layout()
    }

    function r(t) {
        function e() {
            t.apply(this, arguments)
        }

        return e.prototype = Object.create(t.prototype), e.prototype.constructor = e, e
    }

    function a(t) {
        if ("number" == typeof t) return t;
        var e = t.match(/(^\d*\.?\d*)(\w*)/), i = e && e[1], o = e && e[2];
        if (!i.length) return 0;
        i = parseFloat(i);
        var n = m[o] || 1;
        return i * n
    }

    var u = t.console, h = t.jQuery, d = function () {
    }, l = 0, f = {};
    s.namespace = "outlayer", s.Item = n, s.defaults = {
        containerStyle: {position: "relative"},
        initLayout: !0,
        originLeft: !0,
        originTop: !0,
        resize: !0,
        resizeContainer: !0,
        transitionDuration: "0.4s",
        hiddenStyle: {opacity: 0, transform: "scale(0.001)"},
        visibleStyle: {opacity: 1, transform: "scale(1)"}
    };
    var c = s.prototype;
    o.extend(c, e.prototype), c.option = function (t) {
        o.extend(this.options, t)
    }, c._getOption = function (t) {
        var e = this.constructor.compatOptions[t];
        return e && void 0 !== this.options[e] ? this.options[e] : this.options[t]
    }, s.compatOptions = {
        initLayout: "isInitLayout",
        horizontal: "isHorizontal",
        layoutInstant: "isLayoutInstant",
        originLeft: "isOriginLeft",
        originTop: "isOriginTop",
        resize: "isResizeBound",
        resizeContainer: "isResizingContainer"
    }, c._create = function () {
        this.reloadItems(), this.stamps = [], this.stamp(this.options.stamp), o.extend(this.element.style, this.options.containerStyle);
        var t = this._getOption("resize");
        t && this.bindResize()
    }, c.reloadItems = function () {
        this.items = this._itemize(this.element.children)
    }, c._itemize = function (t) {
        for (var e = this._filterFindItemElements(t), i = this.constructor.Item, o = [], n = 0; n < e.length; n++) {
            var s = e[n], r = new i(s, this);
            o.push(r)
        }
        return o
    }, c._filterFindItemElements = function (t) {
        return o.filterFindElements(t, this.options.itemSelector)
    }, c.getItemElements = function () {
        return this.items.map(function (t) {
            return t.element
        })
    }, c.layout = function () {
        this._resetLayout(), this._manageStamps();
        var t = this._getOption("layoutInstant"), e = void 0 !== t ? t : !this._isLayoutInited;
        this.layoutItems(this.items, e), this._isLayoutInited = !0
    }, c._init = c.layout, c._resetLayout = function () {
        this.getSize()
    }, c.getSize = function () {
        this.size = i(this.element)
    }, c._getMeasurement = function (t, e) {
        var o, n = this.options[t];
        n ? ("string" == typeof n ? o = this.element.querySelector(n) : n instanceof HTMLElement && (o = n), this[t] = o ? i(o)[e] : n) : this[t] = 0
    }, c.layoutItems = function (t, e) {
        t = this._getItemsForLayout(t), this._layoutItems(t, e), this._postLayout()
    }, c._getItemsForLayout = function (t) {
        return t.filter(function (t) {
            return !t.isIgnored
        })
    }, c._layoutItems = function (t, e) {
        if (this._emitCompleteOnItems("layout", t), t && t.length) {
            var i = [];
            t.forEach(function (t) {
                var o = this._getItemLayoutPosition(t);
                o.item = t, o.isInstant = e || t.isLayoutInstant, i.push(o)
            }, this), this._processLayoutQueue(i)
        }
    }, c._getItemLayoutPosition = function () {
        return {x: 0, y: 0}
    }, c._processLayoutQueue = function (t) {
        this.updateStagger(), t.forEach(function (t, e) {
            this._positionItem(t.item, t.x, t.y, t.isInstant, e)
        }, this)
    }, c.updateStagger = function () {
        var t = this.options.stagger;
        return null === t || void 0 === t ? void(this.stagger = 0) : (this.stagger = a(t), this.stagger)
    }, c._positionItem = function (t, e, i, o, n) {
        o ? t.goTo(e, i) : (t.stagger(n * this.stagger), t.moveTo(e, i))
    }, c._postLayout = function () {
        this.resizeContainer()
    }, c.resizeContainer = function () {
        var t = this._getOption("resizeContainer");
        if (t) {
            var e = this._getContainerSize();
            e && (this._setContainerMeasure(e.width, !0), this._setContainerMeasure(e.height, !1))
        }
    }, c._getContainerSize = d, c._setContainerMeasure = function (t, e) {
        if (void 0 !== t) {
            var i = this.size;
            i.isBorderBox && (t += e ? i.paddingLeft + i.paddingRight + i.borderLeftWidth + i.borderRightWidth : i.paddingBottom + i.paddingTop + i.borderTopWidth + i.borderBottomWidth), t = Math.max(t, 0), this.element.style[e ? "width" : "height"] = t + "px"
        }
    }, c._emitCompleteOnItems = function (t, e) {
        function i() {
            n.dispatchEvent(t + "Complete", null, [e])
        }

        function o() {
            r++, r == s && i()
        }

        var n = this, s = e.length;
        if (!e || !s) return void i();
        var r = 0;
        e.forEach(function (e) {
            e.once(t, o)
        })
    }, c.dispatchEvent = function (t, e, i) {
        var o = e ? [e].concat(i) : i;
        if (this.emitEvent(t, o), h) if (this.$element = this.$element || h(this.element), e) {
            var n = h.Event(e);
            n.type = t, this.$element.trigger(n, i)
        } else this.$element.trigger(t, i)
    }, c.ignore = function (t) {
        var e = this.getItem(t);
        e && (e.isIgnored = !0)
    }, c.unignore = function (t) {
        var e = this.getItem(t);
        e && delete e.isIgnored
    }, c.stamp = function (t) {
        t = this._find(t), t && (this.stamps = this.stamps.concat(t), t.forEach(this.ignore, this))
    }, c.unstamp = function (t) {
        t = this._find(t), t && t.forEach(function (t) {
            o.removeFrom(this.stamps, t), this.unignore(t)
        }, this)
    }, c._find = function (t) {
        if (t) return "string" == typeof t && (t = this.element.querySelectorAll(t)), t = o.makeArray(t)
    }, c._manageStamps = function () {
        this.stamps && this.stamps.length && (this._getBoundingRect(), this.stamps.forEach(this._manageStamp, this))
    }, c._getBoundingRect = function () {
        var t = this.element.getBoundingClientRect(), e = this.size;
        this._boundingRect = {
            left: t.left + e.paddingLeft + e.borderLeftWidth,
            top: t.top + e.paddingTop + e.borderTopWidth,
            right: t.right - (e.paddingRight + e.borderRightWidth),
            bottom: t.bottom - (e.paddingBottom + e.borderBottomWidth)
        }
    }, c._manageStamp = d, c._getElementOffset = function (t) {
        var e = t.getBoundingClientRect(), o = this._boundingRect, n = i(t), s = {
            left: e.left - o.left - n.marginLeft,
            top: e.top - o.top - n.marginTop,
            right: o.right - e.right - n.marginRight,
            bottom: o.bottom - e.bottom - n.marginBottom
        };
        return s
    }, c.handleEvent = o.handleEvent, c.bindResize = function () {
        t.addEventListener("resize", this), this.isResizeBound = !0
    }, c.unbindResize = function () {
        t.removeEventListener("resize", this), this.isResizeBound = !1
    }, c.onresize = function () {
        this.resize()
    }, o.debounceMethod(s, "onresize", 100), c.resize = function () {
        this.isResizeBound && this.needsResizeLayout() && this.layout()
    }, c.needsResizeLayout = function () {
        var t = i(this.element), e = this.size && t;
        return e && t.innerWidth !== this.size.innerWidth
    }, c.addItems = function (t) {
        var e = this._itemize(t);
        return e.length && (this.items = this.items.concat(e)), e
    }, c.appended = function (t) {
        var e = this.addItems(t);
        e.length && (this.layoutItems(e, !0), this.reveal(e))
    }, c.prepended = function (t) {
        var e = this._itemize(t);
        if (e.length) {
            var i = this.items.slice(0);
            this.items = e.concat(i), this._resetLayout(), this._manageStamps(), this.layoutItems(e, !0), this.reveal(e), this.layoutItems(i)
        }
    }, c.reveal = function (t) {
        if (this._emitCompleteOnItems("reveal", t), t && t.length) {
            var e = this.updateStagger();
            t.forEach(function (t, i) {
                t.stagger(i * e), t.reveal()
            })
        }
    }, c.hide = function (t) {
        if (this._emitCompleteOnItems("hide", t), t && t.length) {
            var e = this.updateStagger();
            t.forEach(function (t, i) {
                t.stagger(i * e), t.hide()
            })
        }
    }, c.revealItemElements = function (t) {
        var e = this.getItems(t);
        this.reveal(e)
    }, c.hideItemElements = function (t) {
        var e = this.getItems(t);
        this.hide(e)
    }, c.getItem = function (t) {
        for (var e = 0; e < this.items.length; e++) {
            var i = this.items[e];
            if (i.element == t) return i
        }
    }, c.getItems = function (t) {
        t = o.makeArray(t);
        var e = [];
        return t.forEach(function (t) {
            var i = this.getItem(t);
            i && e.push(i)
        }, this), e
    }, c.remove = function (t) {
        var e = this.getItems(t);
        this._emitCompleteOnItems("remove", e), e && e.length && e.forEach(function (t) {
            t.remove(), o.removeFrom(this.items, t)
        }, this)
    }, c.destroy = function () {
        var t = this.element.style;
        t.height = "", t.position = "", t.width = "", this.items.forEach(function (t) {
            t.destroy()
        }), this.unbindResize();
        var e = this.element.outlayerGUID;
        delete f[e], delete this.element.outlayerGUID, h && h.removeData(this.element, this.constructor.namespace)
    }, s.data = function (t) {
        t = o.getQueryElement(t);
        var e = t && t.outlayerGUID;
        return e && f[e]
    }, s.create = function (t, e) {
        var i = r(s);
        return i.defaults = o.extend({}, s.defaults), o.extend(i.defaults, e), i.compatOptions = o.extend({}, s.compatOptions), i.namespace = t, i.data = s.data, i.Item = r(n), o.htmlInit(i, t), h && h.bridget && h.bridget(t, i), i
    };
    var m = {ms: 1, s: 1e3};
    return s.Item = n, s
}), function (t, e) {
    "function" == typeof define && define.amd ? define("isotope/js/item", ["outlayer/outlayer"], e) : "object" == typeof module && module.exports ? module.exports = e(require("outlayer")) : (t.Isotope = t.Isotope || {}, t.Isotope.Item = e(t.Outlayer))
}(window, function (t) {
    "use strict";

    function e() {
        t.Item.apply(this, arguments)
    }

    var i = e.prototype = Object.create(t.Item.prototype), o = i._create;
    i._create = function () {
        this.id = this.layout.itemGUID++, o.call(this), this.sortData = {}
    }, i.updateSortData = function () {
        if (!this.isIgnored) {
            this.sortData.id = this.id, this.sortData["original-order"] = this.id, this.sortData.random = Math.random();
            var t = this.layout.options.getSortData, e = this.layout._sorters;
            for (var i in t) {
                var o = e[i];
                this.sortData[i] = o(this.element, this)
            }
        }
    };
    var n = i.destroy;
    return i.destroy = function () {
        n.apply(this, arguments), this.css({display: ""})
    }, e
}), function (t, e) {
    "function" == typeof define && define.amd ? define("isotope/js/layout-mode", ["get-size/get-size", "outlayer/outlayer"], e) : "object" == typeof module && module.exports ? module.exports = e(require("get-size"), require("outlayer")) : (t.Isotope = t.Isotope || {}, t.Isotope.LayoutMode = e(t.getSize, t.Outlayer))
}(window, function (t, e) {
    "use strict";

    function i(t) {
        this.isotope = t, t && (this.options = t.options[this.namespace], this.element = t.element, this.items = t.filteredItems, this.size = t.size)
    }

    var o = i.prototype,
        n = ["_resetLayout", "_getItemLayoutPosition", "_manageStamp", "_getContainerSize", "_getElementOffset", "needsResizeLayout", "_getOption"];
    return n.forEach(function (t) {
        o[t] = function () {
            return e.prototype[t].apply(this.isotope, arguments)
        }
    }), o.needsVerticalResizeLayout = function () {
        var e = t(this.isotope.element), i = this.isotope.size && e;
        return i && e.innerHeight != this.isotope.size.innerHeight
    }, o._getMeasurement = function () {
        this.isotope._getMeasurement.apply(this, arguments)
    }, o.getColumnWidth = function () {
        this.getSegmentSize("column", "Width")
    }, o.getRowHeight = function () {
        this.getSegmentSize("row", "Height")
    }, o.getSegmentSize = function (t, e) {
        var i = t + e, o = "outer" + e;
        if (this._getMeasurement(i, o), !this[i]) {
            var n = this.getFirstItemSize();
            this[i] = n && n[o] || this.isotope.size["inner" + e]
        }
    }, o.getFirstItemSize = function () {
        var e = this.isotope.filteredItems[0];
        return e && e.element && t(e.element)
    }, o.layout = function () {
        this.isotope.layout.apply(this.isotope, arguments)
    }, o.getSize = function () {
        this.isotope.getSize(), this.size = this.isotope.size
    }, i.modes = {}, i.create = function (t, e) {
        function n() {
            i.apply(this, arguments)
        }

        return n.prototype = Object.create(o), n.prototype.constructor = n, e && (n.options = e), n.prototype.namespace = t, i.modes[t] = n, n
    }, i
}), function (t, e) {
    "function" == typeof define && define.amd ? define("masonry/masonry", ["outlayer/outlayer", "get-size/get-size"], e) : "object" == typeof module && module.exports ? module.exports = e(require("outlayer"), require("get-size")) : t.Masonry = e(t.Outlayer, t.getSize)
}(window, function (t, e) {
    var i = t.create("masonry");
    i.compatOptions.fitWidth = "isFitWidth";
    var o = i.prototype;
    return o._resetLayout = function () {
        this.getSize(), this._getMeasurement("columnWidth", "outerWidth"), this._getMeasurement("gutter", "outerWidth"), this.measureColumns(), this.colYs = [];
        for (var t = 0; t < this.cols; t++) this.colYs.push(0);
        this.maxY = 0, this.horizontalColIndex = 0
    }, o.measureColumns = function () {
        if (this.getContainerWidth(), !this.columnWidth) {
            var t = this.items[0], i = t && t.element;
            this.columnWidth = i && e(i).outerWidth || this.containerWidth
        }
        var o = this.columnWidth += this.gutter, n = this.containerWidth + this.gutter, s = n / o, r = o - n % o,
            a = r && r < 1 ? "round" : "floor";
        s = Math[a](s), this.cols = Math.max(s, 1)
    }, o.getContainerWidth = function () {
        var t = this._getOption("fitWidth"), i = t ? this.element.parentNode : this.element, o = e(i);
        this.containerWidth = o && o.innerWidth
    }, o._getItemLayoutPosition = function (t) {
        t.getSize();
        var e = t.size.outerWidth % this.columnWidth, i = e && e < 1 ? "round" : "ceil",
            o = Math[i](t.size.outerWidth / this.columnWidth);
        o = Math.min(o, this.cols);
        for (var n = this.options.horizontalOrder ? "_getHorizontalColPosition" : "_getTopColPosition", s = this[n](o, t), r = {
            x: this.columnWidth * s.col,
            y: s.y
        }, a = s.y + t.size.outerHeight, u = o + s.col, h = s.col; h < u; h++) this.colYs[h] = a;
        return r
    }, o._getTopColPosition = function (t) {
        var e = this._getTopColGroup(t), i = Math.min.apply(Math, e);
        return {col: e.indexOf(i), y: i}
    }, o._getTopColGroup = function (t) {
        if (t < 2) return this.colYs;
        for (var e = [], i = this.cols + 1 - t, o = 0; o < i; o++) e[o] = this._getColGroupY(o, t);
        return e
    }, o._getColGroupY = function (t, e) {
        if (e < 2) return this.colYs[t];
        var i = this.colYs.slice(t, t + e);
        return Math.max.apply(Math, i)
    }, o._getHorizontalColPosition = function (t, e) {
        var i = this.horizontalColIndex % this.cols, o = t > 1 && i + t > this.cols;
        i = o ? 0 : i;
        var n = e.size.outerWidth && e.size.outerHeight;
        return this.horizontalColIndex = n ? i + t : this.horizontalColIndex, {col: i, y: this._getColGroupY(i, t)}
    }, o._manageStamp = function (t) {
        var i = e(t), o = this._getElementOffset(t), n = this._getOption("originLeft"), s = n ? o.left : o.right,
            r = s + i.outerWidth, a = Math.floor(s / this.columnWidth);
        a = Math.max(0, a);
        var u = Math.floor(r / this.columnWidth);
        u -= r % this.columnWidth ? 0 : 1, u = Math.min(this.cols - 1, u);
        for (var h = this._getOption("originTop"), d = (h ? o.top : o.bottom) + i.outerHeight, l = a; l <= u; l++) this.colYs[l] = Math.max(d, this.colYs[l])
    }, o._getContainerSize = function () {
        this.maxY = Math.max.apply(Math, this.colYs);
        var t = {height: this.maxY};
        return this._getOption("fitWidth") && (t.width = this._getContainerFitWidth()), t
    }, o._getContainerFitWidth = function () {
        for (var t = 0, e = this.cols; --e && 0 === this.colYs[e];) t++;
        return (this.cols - t) * this.columnWidth - this.gutter
    }, o.needsResizeLayout = function () {
        var t = this.containerWidth;
        return this.getContainerWidth(), t != this.containerWidth
    }, i
}), function (t, e) {
    "function" == typeof define && define.amd ? define("isotope/js/layout-modes/masonry", ["../layout-mode", "masonry/masonry"], e) : "object" == typeof module && module.exports ? module.exports = e(require("../layout-mode"), require("masonry-layout")) : e(t.Isotope.LayoutMode, t.Masonry)
}(window, function (t, e) {
    "use strict";
    var i = t.create("masonry"), o = i.prototype, n = {_getElementOffset: !0, layout: !0, _getMeasurement: !0};
    for (var s in e.prototype) n[s] || (o[s] = e.prototype[s]);
    var r = o.measureColumns;
    o.measureColumns = function () {
        this.items = this.isotope.filteredItems, r.call(this)
    };
    var a = o._getOption;
    return o._getOption = function (t) {
        return "fitWidth" == t ? void 0 !== this.options.isFitWidth ? this.options.isFitWidth : this.options.fitWidth : a.apply(this.isotope, arguments)
    }, i
}), function (t, e) {
    "function" == typeof define && define.amd ? define("isotope/js/layout-modes/fit-rows", ["../layout-mode"], e) : "object" == typeof exports ? module.exports = e(require("../layout-mode")) : e(t.Isotope.LayoutMode)
}(window, function (t) {
    "use strict";
    var e = t.create("fitRows"), i = e.prototype;
    return i._resetLayout = function () {
        this.x = 0, this.y = 0, this.maxY = 0, this._getMeasurement("gutter", "outerWidth")
    }, i._getItemLayoutPosition = function (t) {
        t.getSize();
        var e = t.size.outerWidth + this.gutter, i = this.isotope.size.innerWidth + this.gutter;
        0 !== this.x && e + this.x > i && (this.x = 0, this.y = this.maxY);
        var o = {x: this.x, y: this.y};
        return this.maxY = Math.max(this.maxY, this.y + t.size.outerHeight), this.x += e, o
    }, i._getContainerSize = function () {
        return {height: this.maxY}
    }, e
}), function (t, e) {
    "function" == typeof define && define.amd ? define("isotope/js/layout-modes/vertical", ["../layout-mode"], e) : "object" == typeof module && module.exports ? module.exports = e(require("../layout-mode")) : e(t.Isotope.LayoutMode)
}(window, function (t) {
    "use strict";
    var e = t.create("vertical", {horizontalAlignment: 0}), i = e.prototype;
    return i._resetLayout = function () {
        this.y = 0
    }, i._getItemLayoutPosition = function (t) {
        t.getSize();
        var e = (this.isotope.size.innerWidth - t.size.outerWidth) * this.options.horizontalAlignment, i = this.y;
        return this.y += t.size.outerHeight, {x: e, y: i}
    }, i._getContainerSize = function () {
        return {height: this.y}
    }, e
}), function (t, e) {
    "function" == typeof define && define.amd ? define(["outlayer/outlayer", "get-size/get-size", "desandro-matches-selector/matches-selector", "fizzy-ui-utils/utils", "isotope/js/item", "isotope/js/layout-mode", "isotope/js/layout-modes/masonry", "isotope/js/layout-modes/fit-rows", "isotope/js/layout-modes/vertical"], function (i, o, n, s, r, a) {
        return e(t, i, o, n, s, r, a)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("outlayer"), require("get-size"), require("desandro-matches-selector"), require("fizzy-ui-utils"), require("isotope/js/item"), require("isotope/js/layout-mode"), require("isotope/js/layout-modes/masonry"), require("isotope/js/layout-modes/fit-rows"), require("isotope/js/layout-modes/vertical")) : t.Isotope = e(t, t.Outlayer, t.getSize, t.matchesSelector, t.fizzyUIUtils, t.Isotope.Item, t.Isotope.LayoutMode)
}(window, function (t, e, i, o, n, s, r) {
    function a(t, e) {
        return function (i, o) {
            for (var n = 0; n < t.length; n++) {
                var s = t[n], r = i.sortData[s], a = o.sortData[s];
                if (r > a || r < a) {
                    var u = void 0 !== e[s] ? e[s] : e, h = u ? 1 : -1;
                    return (r > a ? 1 : -1) * h
                }
            }
            return 0
        }
    }

    var u = t.jQuery, h = String.prototype.trim ? function (t) {
        return t.trim()
    } : function (t) {
        return t.replace(/^\s+|\s+$/g, "")
    }, d = e.create("isotope", {layoutMode: "masonry", isJQueryFiltering: !0, sortAscending: !0});
    d.Item = s, d.LayoutMode = r;
    var l = d.prototype;
    l._create = function () {
        this.itemGUID = 0, this._sorters = {}, this._getSorters(), e.prototype._create.call(this), this.modes = {}, this.filteredItems = this.items, this.sortHistory = ["original-order"];
        for (var t in r.modes) this._initLayoutMode(t)
    }, l.reloadItems = function () {
        this.itemGUID = 0, e.prototype.reloadItems.call(this)
    }, l._itemize = function () {
        for (var t = e.prototype._itemize.apply(this, arguments), i = 0; i < t.length; i++) {
            var o = t[i];
            o.id = this.itemGUID++
        }
        return this._updateItemsSortData(t), t
    }, l._initLayoutMode = function (t) {
        var e = r.modes[t], i = this.options[t] || {};
        this.options[t] = e.options ? n.extend(e.options, i) : i, this.modes[t] = new e(this)
    }, l.layout = function () {
        return !this._isLayoutInited && this._getOption("initLayout") ? void this.arrange() : void this._layout()
    }, l._layout = function () {
        var t = this._getIsInstant();
        this._resetLayout(), this._manageStamps(), this.layoutItems(this.filteredItems, t), this._isLayoutInited = !0
    }, l.arrange = function (t) {
        this.option(t), this._getIsInstant();
        var e = this._filter(this.items);
        this.filteredItems = e.matches, this._bindArrangeComplete(), this._isInstant ? this._noTransition(this._hideReveal, [e]) : this._hideReveal(e), this._sort(), this._layout()
    }, l._init = l.arrange, l._hideReveal = function (t) {
        this.reveal(t.needReveal), this.hide(t.needHide)
    }, l._getIsInstant = function () {
        var t = this._getOption("layoutInstant"), e = void 0 !== t ? t : !this._isLayoutInited;
        return this._isInstant = e, e
    }, l._bindArrangeComplete = function () {
        function t() {
            e && i && o && n.dispatchEvent("arrangeComplete", null, [n.filteredItems])
        }

        var e, i, o, n = this;
        this.once("layoutComplete", function () {
            e = !0, t()
        }), this.once("hideComplete", function () {
            i = !0, t()
        }), this.once("revealComplete", function () {
            o = !0, t()
        })
    }, l._filter = function (t) {
        var e = this.options.filter;
        e = e || "*";
        for (var i = [], o = [], n = [], s = this._getFilterTest(e), r = 0; r < t.length; r++) {
            var a = t[r];
            if (!a.isIgnored) {
                var u = s(a);
                u && i.push(a), u && a.isHidden ? o.push(a) : u || a.isHidden || n.push(a)
            }
        }
        return {matches: i, needReveal: o, needHide: n}
    }, l._getFilterTest = function (t) {
        return u && this.options.isJQueryFiltering ? function (e) {
            return u(e.element).is(t)
        } : "function" == typeof t ? function (e) {
            return t(e.element)
        } : function (e) {
            return o(e.element, t)
        }
    }, l.updateSortData = function (t) {
        var e;
        t ? (t = n.makeArray(t), e = this.getItems(t)) : e = this.items, this._getSorters(), this._updateItemsSortData(e)
    }, l._getSorters = function () {
        var t = this.options.getSortData;
        for (var e in t) {
            var i = t[e];
            this._sorters[e] = f(i)
        }
    }, l._updateItemsSortData = function (t) {
        for (var e = t && t.length, i = 0; e && i < e; i++) {
            var o = t[i];
            o.updateSortData()
        }
    };
    var f = function () {
        function t(t) {
            if ("string" != typeof t) return t;
            var i = h(t).split(" "), o = i[0], n = o.match(/^\[(.+)\]$/), s = n && n[1], r = e(s, o),
                a = d.sortDataParsers[i[1]];
            return t = a ? function (t) {
                return t && a(r(t))
            } : function (t) {
                return t && r(t)
            }
        }

        function e(t, e) {
            return t ? function (e) {
                return e.getAttribute(t)
            } : function (t) {
                var i = t.querySelector(e);
                return i && i.textContent
            }
        }

        return t
    }();
    d.sortDataParsers = {
        parseInt: function (t) {
            return parseInt(t, 10)
        }, parseFloat: function (t) {
            return parseFloat(t)
        }
    }, l._sort = function () {
        if (this.options.sortBy) {
            var t = n.makeArray(this.options.sortBy);
            this._getIsSameSortBy(t) || (this.sortHistory = t.concat(this.sortHistory));
            var e = a(this.sortHistory, this.options.sortAscending);
            this.filteredItems.sort(e)
        }
    }, l._getIsSameSortBy = function (t) {
        for (var e = 0; e < t.length; e++) if (t[e] != this.sortHistory[e]) return !1;
        return !0
    }, l._mode = function () {
        var t = this.options.layoutMode, e = this.modes[t];
        if (!e) throw new Error("No layout mode: " + t);
        return e.options = this.options[t], e
    }, l._resetLayout = function () {
        e.prototype._resetLayout.call(this), this._mode()._resetLayout()
    }, l._getItemLayoutPosition = function (t) {
        return this._mode()._getItemLayoutPosition(t)
    }, l._manageStamp = function (t) {
        this._mode()._manageStamp(t)
    }, l._getContainerSize = function () {
        return this._mode()._getContainerSize()
    }, l.needsResizeLayout = function () {
        return this._mode().needsResizeLayout()
    }, l.appended = function (t) {
        var e = this.addItems(t);
        if (e.length) {
            var i = this._filterRevealAdded(e);
            this.filteredItems = this.filteredItems.concat(i)
        }
    }, l.prepended = function (t) {
        var e = this._itemize(t);
        if (e.length) {
            this._resetLayout(), this._manageStamps();
            var i = this._filterRevealAdded(e);
            this.layoutItems(this.filteredItems), this.filteredItems = i.concat(this.filteredItems), this.items = e.concat(this.items)
        }
    }, l._filterRevealAdded = function (t) {
        var e = this._filter(t);
        return this.hide(e.needHide), this.reveal(e.matches), this.layoutItems(e.matches, !0), e.matches
    }, l.insert = function (t) {
        var e = this.addItems(t);
        if (e.length) {
            var i, o, n = e.length;
            for (i = 0; i < n; i++) o = e[i], this.element.appendChild(o.element);
            var s = this._filter(e).matches;
            for (i = 0; i < n; i++) e[i].isLayoutInstant = !0;
            for (this.arrange(), i = 0; i < n; i++) delete e[i].isLayoutInstant;
            this.reveal(s)
        }
    };
    var c = l.remove;
    return l.remove = function (t) {
        t = n.makeArray(t);
        var e = this.getItems(t);
        c.call(this, t);
        for (var i = e && e.length, o = 0; i && o < i; o++) {
            var s = e[o];
            n.removeFrom(this.filteredItems, s)
        }
    }, l.shuffle = function () {
        for (var t = 0; t < this.items.length; t++) {
            var e = this.items[t];
            e.sortData.random = Math.random()
        }
        this.options.sortBy = "random", this._sort(), this._layout()
    }, l._noTransition = function (t, e) {
        var i = this.options.transitionDuration;
        this.options.transitionDuration = 0;
        var o = t.apply(this, e);
        return this.options.transitionDuration = i, o
    }, l.getFilteredItemElements = function () {
        return this.filteredItems.map(function (t) {
            return t.element
        })
    }, d
});

/* ------------------------------------------------------------------
	jQuery Owl Carousel plugin
--------------------------------------------------------------------- */

/**
 * jQuery Owl Carousel plugin
 */
!function (a, b, c, d) {
    function e(b, c) {
        this.settings = null, this.options = a.extend({}, e.Defaults, c), this.$element = a(b), this.drag = a.extend({}, m), this.state = a.extend({}, n), this.e = a.extend({}, o), this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._invalidated = {}, this._pipe = [], a.each(e.Plugins, a.proxy(function (a, b) {
            this._plugins[a[0].toLowerCase() + a.slice(1)] = new b(this)
        }, this)), a.each(e.Pipe, a.proxy(function (b, c) {
            this._pipe.push({filter: c.filter, run: a.proxy(c.run, this)})
        }, this)), this.setup(), this.initialize()
    }

    function f(a) {
        if (a.touches !== d) return {x: a.touches[0].pageX, y: a.touches[0].pageY};
        if (a.touches === d) {
            if (a.pageX !== d) return {x: a.pageX, y: a.pageY};
            if (a.pageX === d) return {x: a.clientX, y: a.clientY}
        }
    }

    function g(a) {
        var b, d, e = c.createElement("div"), f = a;
        for (b in f) if (d = f[b], "undefined" != typeof e.style[d]) return e = null, [d, b];
        return [!1]
    }

    function h() {
        return g(["transition", "WebkitTransition", "MozTransition", "OTransition"])[1]
    }

    function i() {
        return g(["transform", "WebkitTransform", "MozTransform", "OTransform", "msTransform"])[0]
    }

    function j() {
        return g(["perspective", "webkitPerspective", "MozPerspective", "OPerspective", "MsPerspective"])[0]
    }

    function k() {
        return "ontouchstart" in b || !!navigator.msMaxTouchPoints
    }

    function l() {
        return b.navigator.msPointerEnabled
    }

    var m, n, o;
    m = {
        start: 0,
        startX: 0,
        startY: 0,
        current: 0,
        currentX: 0,
        currentY: 0,
        offsetX: 0,
        offsetY: 0,
        distance: null,
        startTime: 0,
        endTime: 0,
        updatedX: 0,
        targetEl: null
    }, n = {isTouch: !1, isScrolling: !1, isSwiping: !1, direction: !1, inMotion: !1}, o = {
        _onDragStart: null,
        _onDragMove: null,
        _onDragEnd: null,
        _transitionEnd: null,
        _resizer: null,
        _responsiveCall: null,
        _goToLoop: null,
        _checkVisibile: null
    }, e.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: b,
        responsiveClass: !1,
        fallbackEasing: "swing",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        themeClass: "owl-theme",
        baseClass: "owl-carousel",
        itemClass: "owl-item",
        centerClass: "center",
        activeClass: "active"
    }, e.Width = {
        Default: "default",
        Inner: "inner",
        Outer: "outer"
    }, e.Plugins = {}, e.Pipe = [{
        filter: ["width", "items", "settings"], run: function (a) {
            a.current = this._items && this._items[this.relative(this._current)]
        }
    }, {
        filter: ["items", "settings"], run: function () {
            var a = this._clones, b = this.$stage.children(".cloned");
            (b.length !== a.length || !this.settings.loop && a.length > 0) && (this.$stage.children(".cloned").remove(), this._clones = [])
        }
    }, {
        filter: ["items", "settings"], run: function () {
            var a, b, c = this._clones, d = this._items,
                e = this.settings.loop ? c.length - Math.max(2 * this.settings.items, 4) : 0;
            for (a = 0, b = Math.abs(e / 2); b > a; a++) e > 0 ? (this.$stage.children().eq(d.length + c.length - 1).remove(), c.pop(), this.$stage.children().eq(0).remove(), c.pop()) : (c.push(c.length / 2), this.$stage.append(d[c[c.length - 1]].clone().addClass("cloned")), c.push(d.length - 1 - (c.length - 1) / 2), this.$stage.prepend(d[c[c.length - 1]].clone().addClass("cloned")))
        }
    }, {
        filter: ["width", "items", "settings"], run: function () {
            var a, b, c, d = this.settings.rtl ? 1 : -1, e = (this.width() / this.settings.items).toFixed(3), f = 0;
            for (this._coordinates = [], b = 0, c = this._clones.length + this._items.length; c > b; b++) a = this._mergers[this.relative(b)], a = this.settings.mergeFit && Math.min(a, this.settings.items) || a, f += (this.settings.autoWidth ? this._items[this.relative(b)].width() + this.settings.margin : e * a) * d, this._coordinates.push(f)
        }
    }, {
        filter: ["width", "items", "settings"], run: function () {
            var b, c, d = (this.width() / this.settings.items).toFixed(3), e = {
                width: Math.abs(this._coordinates[this._coordinates.length - 1]) + 2 * this.settings.stagePadding,
                "padding-left": this.settings.stagePadding || "",
                "padding-right": this.settings.stagePadding || ""
            };
            if (this.$stage.css(e), e = {width: this.settings.autoWidth ? "auto" : d - this.settings.margin}, e[this.settings.rtl ? "margin-left" : "margin-right"] = this.settings.margin, !this.settings.autoWidth && a.grep(this._mergers, function (a) {
                    return a > 1
                }).length > 0) for (b = 0, c = this._coordinates.length; c > b; b++) e.width = Math.abs(this._coordinates[b]) - Math.abs(this._coordinates[b - 1] || 0) - this.settings.margin, this.$stage.children().eq(b).css(e); else this.$stage.children().css(e)
        }
    }, {
        filter: ["width", "items", "settings"], run: function (a) {
            a.current && this.reset(this.$stage.children().index(a.current))
        }
    }, {
        filter: ["position"], run: function () {
            this.animate(this.coordinates(this._current))
        }
    }, {
        filter: ["width", "position", "items", "settings"], run: function () {
            var a, b, c, d, e = this.settings.rtl ? 1 : -1, f = 2 * this.settings.stagePadding,
                g = this.coordinates(this.current()) + f, h = g + this.width() * e, i = [];
            for (c = 0, d = this._coordinates.length; d > c; c++) a = this._coordinates[c - 1] || 0, b = Math.abs(this._coordinates[c]) + f * e, (this.op(a, "<=", g) && this.op(a, ">", h) || this.op(b, "<", g) && this.op(b, ">", h)) && i.push(c);
            this.$stage.children("." + this.settings.activeClass).removeClass(this.settings.activeClass), this.$stage.children(":eq(" + i.join("), :eq(") + ")").addClass(this.settings.activeClass), this.settings.center && (this.$stage.children("." + this.settings.centerClass).removeClass(this.settings.centerClass), this.$stage.children().eq(this.current()).addClass(this.settings.centerClass))
        }
    }], e.prototype.initialize = function () {
        if (this.trigger("initialize"), this.$element.addClass(this.settings.baseClass).addClass(this.settings.themeClass).toggleClass("owl-rtl", this.settings.rtl), this.browserSupport(), this.settings.autoWidth && this.state.imagesLoaded !== !0) {
            var b, c, e;
            if (b = this.$element.find("img"), c = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : d, e = this.$element.children(c).width(), b.length && 0 >= e) return this.preloadAutoWidthImages(b), !1
        }
        this.$element.addClass("owl-loading"), this.$stage = a("<" + this.settings.stageElement + ' class="owl-stage"/>').wrap('<div class="owl-stage-outer">'), this.$element.append(this.$stage.parent()), this.replace(this.$element.children().not(this.$stage.parent())), this._width = this.$element.width(), this.refresh(), this.$element.removeClass("owl-loading").addClass("owl-loaded"), this.eventsCall(), this.internalEvents(), this.addTriggerableEvents(), this.trigger("initialized")
    }, e.prototype.setup = function () {
        var b = this.viewport(), c = this.options.responsive, d = -1, e = null;
        c ? (a.each(c, function (a) {
            b >= a && a > d && (d = Number(a))
        }), e = a.extend({}, this.options, c[d]), delete e.responsive, e.responsiveClass && this.$element.attr("class", function (a, b) {
            return b.replace(/\b owl-responsive-\S+/g, "")
        }).addClass("owl-responsive-" + d)) : e = a.extend({}, this.options), (null === this.settings || this._breakpoint !== d) && (this.trigger("change", {
            property: {
                name: "settings",
                value: e
            }
        }), this._breakpoint = d, this.settings = e, this.invalidate("settings"), this.trigger("changed", {
            property: {
                name: "settings",
                value: this.settings
            }
        }))
    }, e.prototype.optionsLogic = function () {
        this.$element.toggleClass("owl-center", this.settings.center), this.settings.loop && this._items.length < this.settings.items && (this.settings.loop = !1), this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
    }, e.prototype.prepare = function (b) {
        var c = this.trigger("prepare", {content: b});
        return c.data || (c.data = a("<" + this.settings.itemElement + "/>").addClass(this.settings.itemClass).append(b)), this.trigger("prepared", {content: c.data}), c.data
    }, e.prototype.update = function () {
        for (var b = 0, c = this._pipe.length, d = a.proxy(function (a) {
            return this[a]
        }, this._invalidated), e = {}; c > b;) (this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) && this._pipe[b].run(e), b++;
        this._invalidated = {}
    }, e.prototype.width = function (a) {
        switch (a = a || e.Width.Default) {
            case e.Width.Inner:
            case e.Width.Outer:
                return this._width;
            default:
                return this._width - 2 * this.settings.stagePadding + this.settings.margin
        }
    }, e.prototype.refresh = function () {
        if (0 === this._items.length) return !1;
        (new Date).getTime();
        this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$stage.addClass("owl-refresh"), this.update(), this.$stage.removeClass("owl-refresh"), this.state.orientation = b.orientation, this.watchVisibility(), this.trigger("refreshed")
    }, e.prototype.eventsCall = function () {
        this.e._onDragStart = a.proxy(function (a) {
            this.onDragStart(a)
        }, this), this.e._onDragMove = a.proxy(function (a) {
            this.onDragMove(a)
        }, this), this.e._onDragEnd = a.proxy(function (a) {
            this.onDragEnd(a)
        }, this), this.e._onResize = a.proxy(function (a) {
            this.onResize(a)
        }, this), this.e._transitionEnd = a.proxy(function (a) {
            this.transitionEnd(a)
        }, this), this.e._preventClick = a.proxy(function (a) {
            this.preventClick(a)
        }, this)
    }, e.prototype.onThrottledResize = function () {
        b.clearTimeout(this.resizeTimer), this.resizeTimer = b.setTimeout(this.e._onResize, this.settings.responsiveRefreshRate)
    }, e.prototype.onResize = function () {
        return this._items.length ? this._width === this.$element.width() ? !1 : this.trigger("resize").isDefaultPrevented() ? !1 : (this._width = this.$element.width(), this.invalidate("width"), this.refresh(), void this.trigger("resized")) : !1
    }, e.prototype.eventsRouter = function (a) {
        var b = a.type;
        "mousedown" === b || "touchstart" === b ? this.onDragStart(a) : "mousemove" === b || "touchmove" === b ? this.onDragMove(a) : "mouseup" === b || "touchend" === b ? this.onDragEnd(a) : "touchcancel" === b && this.onDragEnd(a)
    }, e.prototype.internalEvents = function () {
        var c = (k(), l());
        this.settings.mouseDrag ? (this.$stage.on("mousedown", a.proxy(function (a) {
            this.eventsRouter(a)
        }, this)), this.$stage.on("dragstart", function () {
            return !1
        }), this.$stage.get(0).onselectstart = function () {
            return !1
        }) : this.$element.addClass("owl-text-select-on"), this.settings.touchDrag && !c && this.$stage.on("touchstart touchcancel", a.proxy(function (a) {
            this.eventsRouter(a)
        }, this)), this.transitionEndVendor && this.on(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd, !1), this.settings.responsive !== !1 && this.on(b, "resize", a.proxy(this.onThrottledResize, this))
    }, e.prototype.onDragStart = function (d) {
        var e, g, h, i;
        if (e = d.originalEvent || d || b.event, 3 === e.which || this.state.isTouch) return !1;
        if ("mousedown" === e.type && this.$stage.addClass("owl-grab"), this.trigger("drag"), this.drag.startTime = (new Date).getTime(), this.speed(0), this.state.isTouch = !0, this.state.isScrolling = !1, this.state.isSwiping = !1, this.drag.distance = 0, g = f(e).x, h = f(e).y, this.drag.offsetX = this.$stage.position().left, this.drag.offsetY = this.$stage.position().top, this.settings.rtl && (this.drag.offsetX = this.$stage.position().left + this.$stage.width() - this.width() + this.settings.margin), this.state.inMotion && this.support3d) i = this.getTransformProperty(), this.drag.offsetX = i, this.animate(i), this.state.inMotion = !0; else if (this.state.inMotion && !this.support3d) return this.state.inMotion = !1, !1;
        this.drag.startX = g - this.drag.offsetX, this.drag.startY = h - this.drag.offsetY, this.drag.start = g - this.drag.startX, this.drag.targetEl = e.target || e.srcElement, this.drag.updatedX = this.drag.start, ("IMG" === this.drag.targetEl.tagName || "A" === this.drag.targetEl.tagName) && (this.drag.targetEl.draggable = !1), a(c).on("mousemove.owl.dragEvents mouseup.owl.dragEvents touchmove.owl.dragEvents touchend.owl.dragEvents", a.proxy(function (a) {
            this.eventsRouter(a)
        }, this))
    }, e.prototype.onDragMove = function (a) {
        var c, e, g, h, i, j;
        this.state.isTouch && (this.state.isScrolling || (c = a.originalEvent || a || b.event, e = f(c).x, g = f(c).y, this.drag.currentX = e - this.drag.startX, this.drag.currentY = g - this.drag.startY, this.drag.distance = this.drag.currentX - this.drag.offsetX, this.drag.distance < 0 ? this.state.direction = this.settings.rtl ? "right" : "left" : this.drag.distance > 0 && (this.state.direction = this.settings.rtl ? "left" : "right"), this.settings.loop ? this.op(this.drag.currentX, ">", this.coordinates(this.minimum())) && "right" === this.state.direction ? this.drag.currentX -= (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length) : this.op(this.drag.currentX, "<", this.coordinates(this.maximum())) && "left" === this.state.direction && (this.drag.currentX += (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length)) : (h = this.coordinates(this.settings.rtl ? this.maximum() : this.minimum()), i = this.coordinates(this.settings.rtl ? this.minimum() : this.maximum()), j = this.settings.pullDrag ? this.drag.distance / 5 : 0, this.drag.currentX = Math.max(Math.min(this.drag.currentX, h + j), i + j)), (this.drag.distance > 8 || this.drag.distance < -8) && (c.preventDefault !== d ? c.preventDefault() : c.returnValue = !1, this.state.isSwiping = !0), this.drag.updatedX = this.drag.currentX, (this.drag.currentY > 16 || this.drag.currentY < -16) && this.state.isSwiping === !1 && (this.state.isScrolling = !0, this.drag.updatedX = this.drag.start), this.animate(this.drag.updatedX)))
    }, e.prototype.onDragEnd = function (b) {
        var d, e, f;
        if (this.state.isTouch) {
            if ("mouseup" === b.type && this.$stage.removeClass("owl-grab"), this.trigger("dragged"), this.drag.targetEl.removeAttribute("draggable"), this.state.isTouch = !1, this.state.isScrolling = !1, this.state.isSwiping = !1, 0 === this.drag.distance && this.state.inMotion !== !0) return this.state.inMotion = !1, !1;
            this.drag.endTime = (new Date).getTime(), d = this.drag.endTime - this.drag.startTime, e = Math.abs(this.drag.distance), (e > 3 || d > 300) && this.removeClick(this.drag.targetEl), f = this.closest(this.drag.updatedX), this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(f), this.invalidate("position"), this.update(), this.settings.pullDrag || this.drag.updatedX !== this.coordinates(f) || this.transitionEnd(), this.drag.distance = 0, a(c).off(".owl.dragEvents")
        }
    }, e.prototype.removeClick = function (c) {
        this.drag.targetEl = c, a(c).on("click.preventClick", this.e._preventClick), b.setTimeout(function () {
            a(c).off("click.preventClick")
        }, 300)
    }, e.prototype.preventClick = function (b) {
        b.preventDefault ? b.preventDefault() : b.returnValue = !1, b.stopPropagation && b.stopPropagation(), a(b.target).off("click.preventClick")
    }, e.prototype.getTransformProperty = function () {
        var a, c;
        return a = b.getComputedStyle(this.$stage.get(0), null).getPropertyValue(this.vendorName + "transform"), a = a.replace(/matrix(3d)?\(|\)/g, "").split(","), c = 16 === a.length, c !== !0 ? a[4] : a[12]
    }, e.prototype.closest = function (b) {
        var c = -1, d = 30, e = this.width(), f = this.coordinates();
        return this.settings.freeDrag || a.each(f, a.proxy(function (a, g) {
            return b > g - d && g + d > b ? c = a : this.op(b, "<", g) && this.op(b, ">", f[a + 1] || g - e) && (c = "left" === this.state.direction ? a + 1 : a), -1 === c
        }, this)), this.settings.loop || (this.op(b, ">", f[this.minimum()]) ? c = b = this.minimum() : this.op(b, "<", f[this.maximum()]) && (c = b = this.maximum())), c
    }, e.prototype.animate = function (b) {
        this.trigger("translate"), this.state.inMotion = this.speed() > 0, this.support3d ? this.$stage.css({
            transform: "translate3d(" + b + "px,0px, 0px)",
            transition: this.speed() / 1e3 + "s"
        }) : this.state.isTouch ? this.$stage.css({left: b + "px"}) : this.$stage.animate({left: b}, this.speed() / 1e3, this.settings.fallbackEasing, a.proxy(function () {
            this.state.inMotion && this.transitionEnd()
        }, this))
    }, e.prototype.current = function (a) {
        if (a === d) return this._current;
        if (0 === this._items.length) return d;
        if (a = this.normalize(a), this._current !== a) {
            var b = this.trigger("change", {property: {name: "position", value: a}});
            b.data !== d && (a = this.normalize(b.data)), this._current = a, this.invalidate("position"), this.trigger("changed", {
                property: {
                    name: "position",
                    value: this._current
                }
            })
        }
        return this._current
    }, e.prototype.invalidate = function (a) {
        this._invalidated[a] = !0
    }, e.prototype.reset = function (a) {
        a = this.normalize(a), a !== d && (this._speed = 0, this._current = a, this.suppress(["translate", "translated"]), this.animate(this.coordinates(a)), this.release(["translate", "translated"]))
    }, e.prototype.normalize = function (b, c) {
        var e = c ? this._items.length : this._items.length + this._clones.length;
        return !a.isNumeric(b) || 1 > e ? d : b = this._clones.length ? (b % e + e) % e : Math.max(this.minimum(c), Math.min(this.maximum(c), b))
    }, e.prototype.relative = function (a) {
        return a = this.normalize(a), a -= this._clones.length / 2, this.normalize(a, !0)
    }, e.prototype.maximum = function (a) {
        var b, c, d, e = 0, f = this.settings;
        if (a) return this._items.length - 1;
        if (!f.loop && f.center) b = this._items.length - 1; else if (f.loop || f.center) if (f.loop || f.center) b = this._items.length + f.items; else {
            if (!f.autoWidth && !f.merge) throw"Can not detect maximum absolute position.";
            for (revert = f.rtl ? 1 : -1, c = this.$stage.width() - this.$element.width(); (d = this.coordinates(e)) && !(d * revert >= c);) b = ++e
        } else b = this._items.length - f.items;
        return b
    }, e.prototype.minimum = function (a) {
        return a ? 0 : this._clones.length / 2
    }, e.prototype.items = function (a) {
        return a === d ? this._items.slice() : (a = this.normalize(a, !0), this._items[a])
    }, e.prototype.mergers = function (a) {
        return a === d ? this._mergers.slice() : (a = this.normalize(a, !0), this._mergers[a])
    }, e.prototype.clones = function (b) {
        var c = this._clones.length / 2, e = c + this._items.length, f = function (a) {
            return a % 2 === 0 ? e + a / 2 : c - (a + 1) / 2
        };
        return b === d ? a.map(this._clones, function (a, b) {
            return f(b)
        }) : a.map(this._clones, function (a, c) {
            return a === b ? f(c) : null
        })
    }, e.prototype.speed = function (a) {
        return a !== d && (this._speed = a), this._speed
    }, e.prototype.coordinates = function (b) {
        var c = null;
        return b === d ? a.map(this._coordinates, a.proxy(function (a, b) {
            return this.coordinates(b)
        }, this)) : (this.settings.center ? (c = this._coordinates[b], c += (this.width() - c + (this._coordinates[b - 1] || 0)) / 2 * (this.settings.rtl ? -1 : 1)) : c = this._coordinates[b - 1] || 0, c)
    }, e.prototype.duration = function (a, b, c) {
        return Math.min(Math.max(Math.abs(b - a), 1), 6) * Math.abs(c || this.settings.smartSpeed)
    }, e.prototype.to = function (c, d) {
        if (this.settings.loop) {
            var e = c - this.relative(this.current()), f = this.current(), g = this.current(), h = this.current() + e,
                i = 0 > g - h ? !0 : !1, j = this._clones.length + this._items.length;
            h < this.settings.items && i === !1 ? (f = g + this._items.length, this.reset(f)) : h >= j - this.settings.items && i === !0 && (f = g - this._items.length, this.reset(f)), b.clearTimeout(this.e._goToLoop), this.e._goToLoop = b.setTimeout(a.proxy(function () {
                this.speed(this.duration(this.current(), f + e, d)), this.current(f + e), this.update()
            }, this), 30)
        } else this.speed(this.duration(this.current(), c, d)), this.current(c), this.update()
    }, e.prototype.next = function (a) {
        a = a || !1, this.to(this.relative(this.current()) + 1, a)
    }, e.prototype.prev = function (a) {
        a = a || !1, this.to(this.relative(this.current()) - 1, a)
    }, e.prototype.transitionEnd = function (a) {
        return a !== d && (a.stopPropagation(), (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0)) ? !1 : (this.state.inMotion = !1, void this.trigger("translated"))
    }, e.prototype.viewport = function () {
        var d;
        if (this.options.responsiveBaseElement !== b) d = a(this.options.responsiveBaseElement).width(); else if (b.innerWidth) d = b.innerWidth; else {
            if (!c.documentElement || !c.documentElement.clientWidth) throw"Can not detect viewport width.";
            d = c.documentElement.clientWidth
        }
        return d
    }, e.prototype.replace = function (b) {
        this.$stage.empty(), this._items = [], b && (b = b instanceof jQuery ? b : a(b)), this.settings.nestedItemSelector && (b = b.find("." + this.settings.nestedItemSelector)), b.filter(function () {
            return 1 === this.nodeType
        }).each(a.proxy(function (a, b) {
            b = this.prepare(b), this.$stage.append(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1)
        }, this)), this.reset(a.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
    }, e.prototype.add = function (a, b) {
        b = b === d ? this._items.length : this.normalize(b, !0), this.trigger("add", {
            content: a,
            position: b
        }), 0 === this._items.length || b === this._items.length ? (this.$stage.append(a), this._items.push(a), this._mergers.push(1 * a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1)) : (this._items[b].before(a), this._items.splice(b, 0, a), this._mergers.splice(b, 0, 1 * a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1)), this.invalidate("items"), this.trigger("added", {
            content: a,
            position: b
        })
    }, e.prototype.remove = function (a) {
        a = this.normalize(a, !0), a !== d && (this.trigger("remove", {
            content: this._items[a],
            position: a
        }), this._items[a].remove(), this._items.splice(a, 1), this._mergers.splice(a, 1), this.invalidate("items"), this.trigger("removed", {
            content: null,
            position: a
        }))
    }, e.prototype.addTriggerableEvents = function () {
        var b = a.proxy(function (b, c) {
            return a.proxy(function (a) {
                a.relatedTarget !== this && (this.suppress([c]), b.apply(this, [].slice.call(arguments, 1)), this.release([c]))
            }, this)
        }, this);
        a.each({
            next: this.next,
            prev: this.prev,
            to: this.to,
            destroy: this.destroy,
            refresh: this.refresh,
            replace: this.replace,
            add: this.add,
            remove: this.remove
        }, a.proxy(function (a, c) {
            this.$element.on(a + ".owl.carousel", b(c, a + ".owl.carousel"))
        }, this))
    }, e.prototype.watchVisibility = function () {
        function c(a) {
            return a.offsetWidth > 0 && a.offsetHeight > 0
        }

        function d() {
            c(this.$element.get(0)) && (this.$element.removeClass("owl-hidden"), this.refresh(), b.clearInterval(this.e._checkVisibile))
        }

        c(this.$element.get(0)) || (this.$element.addClass("owl-hidden"), b.clearInterval(this.e._checkVisibile), this.e._checkVisibile = b.setInterval(a.proxy(d, this), 500))
    }, e.prototype.preloadAutoWidthImages = function (b) {
        var c, d, e, f;
        c = 0, d = this, b.each(function (g, h) {
            e = a(h), f = new Image, f.onload = function () {
                c++, e.attr("src", f.src), e.css("opacity", 1), c >= b.length && (d.state.imagesLoaded = !0, d.initialize())
            }, f.src = e.attr("src") || e.attr("data-src") || e.attr("data-src-retina")
        })
    }, e.prototype.destroy = function () {
        this.$element.hasClass(this.settings.themeClass) && this.$element.removeClass(this.settings.themeClass), this.settings.responsive !== !1 && a(b).off("resize.owl.carousel"), this.transitionEndVendor && this.off(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd);
        for (var d in this._plugins) this._plugins[d].destroy();
        (this.settings.mouseDrag || this.settings.touchDrag) && (this.$stage.off("mousedown touchstart touchcancel"), a(c).off(".owl.dragEvents"), this.$stage.get(0).onselectstart = function () {
        }, this.$stage.off("dragstart", function () {
            return !1
        })), this.$element.off(".owl"), this.$stage.children(".cloned").remove(), this.e = null, this.$element.removeData("owlCarousel"), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$stage.unwrap()
    }, e.prototype.op = function (a, b, c) {
        var d = this.settings.rtl;
        switch (b) {
            case"<":
                return d ? a > c : c > a;
            case">":
                return d ? c > a : a > c;
            case">=":
                return d ? c >= a : a >= c;
            case"<=":
                return d ? a >= c : c >= a
        }
    }, e.prototype.on = function (a, b, c, d) {
        a.addEventListener ? a.addEventListener(b, c, d) : a.attachEvent && a.attachEvent("on" + b, c)
    }, e.prototype.off = function (a, b, c, d) {
        a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c)
    }, e.prototype.trigger = function (b, c, d) {
        var e = {item: {count: this._items.length, index: this.current()}},
            f = a.camelCase(a.grep(["on", b, d], function (a) {
                return a
            }).join("-").toLowerCase()),
            g = a.Event([b, "owl", d || "carousel"].join(".").toLowerCase(), a.extend({relatedTarget: this}, e, c));
        return this._supress[b] || (a.each(this._plugins, function (a, b) {
            b.onTrigger && b.onTrigger(g)
        }), this.$element.trigger(g), this.settings && "function" == typeof this.settings[f] && this.settings[f].apply(this, g)), g
    }, e.prototype.suppress = function (b) {
        a.each(b, a.proxy(function (a, b) {
            this._supress[b] = !0
        }, this))
    }, e.prototype.release = function (b) {
        a.each(b, a.proxy(function (a, b) {
            delete this._supress[b]
        }, this))
    }, e.prototype.browserSupport = function () {
        if (this.support3d = j(), this.support3d) {
            this.transformVendor = i();
            var a = ["transitionend", "webkitTransitionEnd", "transitionend", "oTransitionEnd"];
            this.transitionEndVendor = a[h()], this.vendorName = this.transformVendor.replace(/Transform/i, ""), this.vendorName = "" !== this.vendorName ? "-" + this.vendorName.toLowerCase() + "-" : ""
        }
        this.state.orientation = b.orientation
    }, a.fn.owlCarousel = function (b) {
        return this.each(function () {
            a(this).data("owlCarousel") || a(this).data("owlCarousel", new e(this, b))
        })
    }, a.fn.owlCarousel.Constructor = e
}(window.Zepto || window.jQuery, window, document), function (a, b) {
    var c = function (b) {
        this._core = b, this._loaded = [], this._handlers = {
            "initialized.owl.carousel change.owl.carousel": a.proxy(function (b) {
                if (b.namespace && this._core.settings && this._core.settings.lazyLoad && (b.property && "position" == b.property.name || "initialized" == b.type)) for (var c = this._core.settings, d = c.center && Math.ceil(c.items / 2) || c.items, e = c.center && -1 * d || 0, f = (b.property && b.property.value || this._core.current()) + e, g = this._core.clones().length, h = a.proxy(function (a, b) {
                    this.load(b)
                }, this); e++ < d;) this.load(g / 2 + this._core.relative(f)), g && a.each(this._core.clones(this._core.relative(f++)), h)
            }, this)
        }, this._core.options = a.extend({}, c.Defaults, this._core.options), this._core.$element.on(this._handlers)
    };
    c.Defaults = {lazyLoad: !1}, c.prototype.load = function (c) {
        var d = this._core.$stage.children().eq(c), e = d && d.find(".owl-lazy");
        !e || a.inArray(d.get(0), this._loaded) > -1 || (e.each(a.proxy(function (c, d) {
            var e, f = a(d), g = b.devicePixelRatio > 1 && f.attr("data-src-retina") || f.attr("data-src");
            this._core.trigger("load", {
                element: f,
                url: g
            }, "lazy"), f.is("img") ? f.one("load.owl.lazy", a.proxy(function () {
                f.css("opacity", 1), this._core.trigger("loaded", {element: f, url: g}, "lazy")
            }, this)).attr("src", g) : (e = new Image, e.onload = a.proxy(function () {
                f.css({"background-image": "url(" + g + ")", opacity: "1"}), this._core.trigger("loaded", {
                    element: f,
                    url: g
                }, "lazy")
            }, this), e.src = g)
        }, this)), this._loaded.push(d.get(0)))
    }, c.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this._core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Lazy = c
}(window.Zepto || window.jQuery, window, document), function (a) {
    var b = function (c) {
        this._core = c, this._handlers = {
            "initialized.owl.carousel": a.proxy(function () {
                this._core.settings.autoHeight && this.update()
            }, this), "changed.owl.carousel": a.proxy(function (a) {
                this._core.settings.autoHeight && "position" == a.property.name && this.update()
            }, this), "loaded.owl.lazy": a.proxy(function (a) {
                this._core.settings.autoHeight && a.element.closest("." + this._core.settings.itemClass) === this._core.$stage.children().eq(this._core.current()) && this.update()
            }, this)
        }, this._core.options = a.extend({}, b.Defaults, this._core.options), this._core.$element.on(this._handlers)
    };
    b.Defaults = {autoHeight: !1, autoHeightClass: "owl-height"}, b.prototype.update = function () {
        this._core.$stage.parent().height(this._core.$stage.children().eq(this._core.current()).height()).addClass(this._core.settings.autoHeightClass)
    }, b.prototype.destroy = function () {
        var a, b;
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.AutoHeight = b
}(window.Zepto || window.jQuery, window, document), function (a, b, c) {
    var d = function (b) {
        this._core = b, this._videos = {}, this._playing = null, this._fullscreen = !1, this._handlers = {
            "resize.owl.carousel": a.proxy(function (a) {
                this._core.settings.video && !this.isInFullScreen() && a.preventDefault()
            }, this), "refresh.owl.carousel changed.owl.carousel": a.proxy(function () {
                this._playing && this.stop()
            }, this), "prepared.owl.carousel": a.proxy(function (b) {
                var c = a(b.content).find(".owl-video");
                c.length && (c.css("display", "none"), this.fetch(c, a(b.content)))
            }, this)
        }, this._core.options = a.extend({}, d.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", a.proxy(function (a) {
            this.play(a)
        }, this))
    };
    d.Defaults = {video: !1, videoHeight: !1, videoWidth: !1}, d.prototype.fetch = function (a, b) {
        var c = a.attr("data-vimeo-id") ? "vimeo" : "youtube", d = a.attr("data-vimeo-id") || a.attr("data-youtube-id"),
            e = a.attr("data-width") || this._core.settings.videoWidth,
            f = a.attr("data-height") || this._core.settings.videoHeight, g = a.attr("href");
        if (!g) throw new Error("Missing video URL.");
        if (d = g.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), d[3].indexOf("youtu") > -1) c = "youtube"; else {
            if (!(d[3].indexOf("vimeo") > -1)) throw new Error("Video URL not supported.");
            c = "vimeo"
        }
        d = d[6], this._videos[g] = {
            type: c,
            id: d,
            width: e,
            height: f
        }, b.attr("data-video", g), this.thumbnail(a, this._videos[g])
    }, d.prototype.thumbnail = function (b, c) {
        var d, e, f, g = c.width && c.height ? 'style="width:' + c.width + "px;height:" + c.height + 'px;"' : "",
            h = b.find("img"), i = "src", j = "", k = this._core.settings, l = function (a) {
                e = '<div class="owl-video-play-icon"></div>', d = k.lazyLoad ? '<div class="owl-video-tn ' + j + '" ' + i + '="' + a + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + a + ')"></div>', b.after(d), b.after(e)
            };
        return b.wrap('<div class="owl-video-wrapper"' + g + "></div>"), this._core.settings.lazyLoad && (i = "data-src", j = "owl-lazy"), h.length ? (l(h.attr(i)), h.remove(), !1) : void("youtube" === c.type ? (f = "http://img.youtube.com/vi/" + c.id + "/hqdefault.jpg", l(f)) : "vimeo" === c.type && a.ajax({
            type: "GET",
            url: "http://vimeo.com/api/v2/video/" + c.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function (a) {
                f = a[0].thumbnail_large, l(f)
            }
        }))
    }, d.prototype.stop = function () {
        this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null
    }, d.prototype.play = function (b) {
        this._core.trigger("play", null, "video"), this._playing && this.stop();
        var c, d, e = a(b.target || b.srcElement), f = e.closest("." + this._core.settings.itemClass),
            g = this._videos[f.attr("data-video")], h = g.width || "100%", i = g.height || this._core.$stage.height();
        "youtube" === g.type ? c = '<iframe width="' + h + '" height="' + i + '" src="http://www.youtube.com/embed/' + g.id + "?autoplay=1&v=" + g.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === g.type && (c = '<iframe src="http://player.vimeo.com/video/' + g.id + '?autoplay=1" width="' + h + '" height="' + i + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'), f.addClass("owl-video-playing"), this._playing = f, d = a('<div style="height:' + i + "px; width:" + h + 'px" class="owl-video-frame">' + c + "</div>"), e.after(d)
    }, d.prototype.isInFullScreen = function () {
        var d = c.fullscreenElement || c.mozFullScreenElement || c.webkitFullscreenElement;
        return d && a(d).parent().hasClass("owl-video-frame") && (this._core.speed(0), this._fullscreen = !0), d && this._fullscreen && this._playing ? !1 : this._fullscreen ? (this._fullscreen = !1, !1) : this._playing && this._core.state.orientation !== b.orientation ? (this._core.state.orientation = b.orientation, !1) : !0
    }, d.prototype.destroy = function () {
        var a, b;
        this._core.$element.off("click.owl.video");
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Video = d
}(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
    var e = function (b) {
        this.core = b, this.core.options = a.extend({}, e.Defaults, this.core.options), this.swapping = !0, this.previous = d, this.next = d, this.handlers = {
            "change.owl.carousel": a.proxy(function (a) {
                "position" == a.property.name && (this.previous = this.core.current(), this.next = a.property.value)
            }, this), "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": a.proxy(function (a) {
                this.swapping = "translated" == a.type
            }, this), "translate.owl.carousel": a.proxy(function () {
                this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
            }, this)
        }, this.core.$element.on(this.handlers)
    };
    e.Defaults = {animateOut: !1, animateIn: !1}, e.prototype.swap = function () {
        if (1 === this.core.settings.items && this.core.support3d) {
            this.core.speed(0);
            var b, c = a.proxy(this.clear, this), d = this.core.$stage.children().eq(this.previous),
                e = this.core.$stage.children().eq(this.next), f = this.core.settings.animateIn,
                g = this.core.settings.animateOut;
            this.core.current() !== this.previous && (g && (b = this.core.coordinates(this.previous) - this.core.coordinates(this.next), d.css({left: b + "px"}).addClass("animated owl-animated-out").addClass(g).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", c)), f && e.addClass("animated owl-animated-in").addClass(f).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", c))
        }
    }, e.prototype.clear = function (b) {
        a(b.target).css({left: ""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.transitionEnd()
    }, e.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Animate = e
}(window.Zepto || window.jQuery, window, document), function (a, b, c) {
    var d = function (b) {
        this.core = b, this.core.options = a.extend({}, d.Defaults, this.core.options), this.handlers = {
            "translated.owl.carousel refreshed.owl.carousel": a.proxy(function () {
                this.autoplay()
            }, this), "play.owl.autoplay": a.proxy(function (a, b, c) {
                this.play(b, c)
            }, this), "stop.owl.autoplay": a.proxy(function () {
                this.stop()
            }, this), "mouseover.owl.autoplay": a.proxy(function () {
                this.core.settings.autoplayHoverPause && this.pause()
            }, this), "mouseleave.owl.autoplay": a.proxy(function () {
                this.core.settings.autoplayHoverPause && this.autoplay()
            }, this)
        }, this.core.$element.on(this.handlers)
    };
    d.Defaults = {
        autoplay: !1,
        autoplayTimeout: 5e3,
        autoplayHoverPause: !1,
        autoplaySpeed: !1
    }, d.prototype.autoplay = function () {
        this.core.settings.autoplay && !this.core.state.videoPlay ? (b.clearInterval(this.interval), this.interval = b.setInterval(a.proxy(function () {
            this.play()
        }, this), this.core.settings.autoplayTimeout)) : b.clearInterval(this.interval)
    }, d.prototype.play = function () {
        return c.hidden === !0 || this.core.state.isTouch || this.core.state.isScrolling || this.core.state.isSwiping || this.core.state.inMotion ? void 0 : this.core.settings.autoplay === !1 ? void b.clearInterval(this.interval) : void this.core.next(this.core.settings.autoplaySpeed)
    }, d.prototype.stop = function () {
        b.clearInterval(this.interval)
    }, d.prototype.pause = function () {
        b.clearInterval(this.interval)
    }, d.prototype.destroy = function () {
        var a, c;
        b.clearInterval(this.interval);
        for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
        for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.autoplay = d
}(window.Zepto || window.jQuery, window, document), function (a) {
    "use strict";
    var b = function (c) {
        this._core = c, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
            next: this._core.next,
            prev: this._core.prev,
            to: this._core.to
        }, this._handlers = {
            "prepared.owl.carousel": a.proxy(function (b) {
                this._core.settings.dotsData && this._templates.push(a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"))
            }, this), "add.owl.carousel": a.proxy(function (b) {
                this._core.settings.dotsData && this._templates.splice(b.position, 0, a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"))
            }, this), "remove.owl.carousel prepared.owl.carousel": a.proxy(function (a) {
                this._core.settings.dotsData && this._templates.splice(a.position, 1)
            }, this), "change.owl.carousel": a.proxy(function (a) {
                if ("position" == a.property.name && !this._core.state.revert && !this._core.settings.loop && this._core.settings.navRewind) {
                    var b = this._core.current(), c = this._core.maximum(), d = this._core.minimum();
                    a.data = a.property.value > c ? b >= c ? d : c : a.property.value < d ? c : a.property.value
                }
            }, this), "changed.owl.carousel": a.proxy(function (a) {
                "position" == a.property.name && this.draw()
            }, this), "refreshed.owl.carousel": a.proxy(function () {
                this._initialized || (this.initialize(), this._initialized = !0), this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation")
            }, this)
        }, this._core.options = a.extend({}, b.Defaults, this._core.options), this.$element.on(this._handlers)
    };
    b.Defaults = {
        nav: !1,
        navRewind: !0,
        navText: ["prev", "next"],
        navSpeed: !1,
        navElement: "div",
        navContainer: !1,
        navContainerClass: "owl-nav",
        navClass: ["owl-prev", "owl-next"],
        slideBy: 1,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: !0,
        dotsEach: !1,
        dotData: !1,
        dotsSpeed: !1,
        dotsContainer: !1,
        controlsClass: "owl-controls"
    }, b.prototype.initialize = function () {
        var b, c, d = this._core.settings;
        d.dotsData || (this._templates = [a("<div>").addClass(d.dotClass).append(a("<span>")).prop("outerHTML")]), d.navContainer && d.dotsContainer || (this._controls.$container = a("<div>").addClass(d.controlsClass).appendTo(this.$element)), this._controls.$indicators = d.dotsContainer ? a(d.dotsContainer) : a("<div>").hide().addClass(d.dotsClass).appendTo(this._controls.$container), this._controls.$indicators.on("click", "div", a.proxy(function (b) {
            var c = a(b.target).parent().is(this._controls.$indicators) ? a(b.target).index() : a(b.target).parent().index();
            b.preventDefault(), this.to(c, d.dotsSpeed)
        }, this)), b = d.navContainer ? a(d.navContainer) : a("<div>").addClass(d.navContainerClass).prependTo(this._controls.$container), this._controls.$next = a("<" + d.navElement + ">"), this._controls.$previous = this._controls.$next.clone(), this._controls.$previous.addClass(d.navClass[0]).html(d.navText[0]).hide().prependTo(b).on("click", a.proxy(function () {
            this.prev(d.navSpeed)
        }, this)), this._controls.$next.addClass(d.navClass[1]).html(d.navText[1]).hide().appendTo(b).on("click", a.proxy(function () {
            this.next(d.navSpeed)
        }, this));
        for (c in this._overrides) this._core[c] = a.proxy(this[c], this)
    }, b.prototype.destroy = function () {
        var a, b, c, d;
        for (a in this._handlers) this.$element.off(a, this._handlers[a]);
        for (b in this._controls) this._controls[b].remove();
        for (d in this.overides) this._core[d] = this._overrides[d];
        for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
    }, b.prototype.update = function () {
        var a, b, c, d = this._core.settings, e = this._core.clones().length / 2, f = e + this._core.items().length,
            g = d.center || d.autoWidth || d.dotData ? 1 : d.dotsEach || d.items;
        if ("page" !== d.slideBy && (d.slideBy = Math.min(d.slideBy, d.items)), d.dots || "page" == d.slideBy) for (this._pages = [], a = e, b = 0, c = 0; f > a; a++) (b >= g || 0 === b) && (this._pages.push({
            start: a - e,
            end: a - e + g - 1
        }), b = 0, ++c), b += this._core.mergers(this._core.relative(a))
    }, b.prototype.draw = function () {
        var b, c, d = "", e = this._core.settings,
            f = (this._core.$stage.children(), this._core.relative(this._core.current()));
        if (!e.nav || e.loop || e.navRewind || (this._controls.$previous.toggleClass("disabled", 0 >= f), this._controls.$next.toggleClass("disabled", f >= this._core.maximum())), this._controls.$previous.toggle(e.nav), this._controls.$next.toggle(e.nav), e.dots) {
            if (b = this._pages.length - this._controls.$indicators.children().length, e.dotData && 0 !== b) {
                for (c = 0; c < this._controls.$indicators.children().length; c++) d += this._templates[this._core.relative(c)];
                this._controls.$indicators.html(d)
            } else b > 0 ? (d = new Array(b + 1).join(this._templates[0]), this._controls.$indicators.append(d)) : 0 > b && this._controls.$indicators.children().slice(b).remove();
            this._controls.$indicators.find(".active").removeClass("active"), this._controls.$indicators.children().eq(a.inArray(this.current(), this._pages)).addClass("active")
        }
        this._controls.$indicators.toggle(e.dots)
    }, b.prototype.onTrigger = function (b) {
        var c = this._core.settings;
        b.page = {
            index: a.inArray(this.current(), this._pages),
            count: this._pages.length,
            size: c && (c.center || c.autoWidth || c.dotData ? 1 : c.dotsEach || c.items)
        }
    }, b.prototype.current = function () {
        var b = this._core.relative(this._core.current());
        return a.grep(this._pages, function (a) {
            return a.start <= b && a.end >= b
        }).pop()
    }, b.prototype.getPosition = function (b) {
        var c, d, e = this._core.settings;
        return "page" == e.slideBy ? (c = a.inArray(this.current(), this._pages), d = this._pages.length, b ? ++c : --c, c = this._pages[(c % d + d) % d].start) : (c = this._core.relative(this._core.current()), d = this._core.items().length, b ? c += e.slideBy : c -= e.slideBy), c
    }, b.prototype.next = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b)
    }, b.prototype.prev = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b)
    }, b.prototype.to = function (b, c, d) {
        var e;
        d ? a.proxy(this._overrides.to, this._core)(b, c) : (e = this._pages.length, a.proxy(this._overrides.to, this._core)(this._pages[(b % e + e) % e].start, c))
    }, a.fn.owlCarousel.Constructor.Plugins.Navigation = b
}(window.Zepto || window.jQuery, window, document), function (a, b) {
    "use strict";
    var c = function (d) {
        this._core = d, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
            "initialized.owl.carousel": a.proxy(function () {
                "URLHash" == this._core.settings.startPosition && a(b).trigger("hashchange.owl.navigation")
            }, this), "prepared.owl.carousel": a.proxy(function (b) {
                var c = a(b.content).find("[data-hash]").andSelf("[data-hash]").attr("data-hash");
                this._hashes[c] = b.content
            }, this)
        }, this._core.options = a.extend({}, c.Defaults, this._core.options), this.$element.on(this._handlers), a(b).on("hashchange.owl.navigation", a.proxy(function () {
            var a = b.location.hash.substring(1), c = this._core.$stage.children(),
                d = this._hashes[a] && c.index(this._hashes[a]) || 0;
            return a ? void this._core.to(d, !1, !0) : !1
        }, this))
    };
    c.Defaults = {URLhashListener: !1}, c.prototype.destroy = function () {
        var c, d;
        a(b).off("hashchange.owl.navigation");
        for (c in this._handlers) this._core.$element.off(c, this._handlers[c]);
        for (d in Object.getOwnPropertyNames(this)) "function" != typeof this[d] && (this[d] = null)
    }, a.fn.owlCarousel.Constructor.Plugins.Hash = c
}(window.Zepto || window.jQuery, window, document);

/*!
 * fancyBox v3.2.11
 */
!function (t, e, n, o) {
    "use strict";

    function i(t) {
        var e = n(t.currentTarget), o = t.data ? t.data.options : {}, i = e.attr("data-fancybox") || "", a = 0, s = [];
        t.isDefaultPrevented() || (t.preventDefault(), i ? (s = o.selector ? n(o.selector) : t.data ? t.data.items : [], s = s.length ? s.filter('[data-fancybox="' + i + '"]') : n('[data-fancybox="' + i + '"]'), a = s.index(e), a < 0 && (a = 0)) : s = [e], n.fancybox.open(s, o, a))
    }

    if (n) {
        if (n.fn.fancybox) return void("console" in t && console.log("fancyBox already initialized"));
        var a = {
            loop: !1,
            margin: [44, 0],
            gutter: 50,
            keyboard: !0,
            arrows: !0,
            infobar: !0,
            toolbar: !0,
            buttons: ["slideShow", "fullScreen", "thumbs", "share", "close"],
            idleTime: 3,
            smallBtn: "auto",
            protect: !1,
            modal: !1,
            image: {preload: "auto"},
            ajax: {settings: {data: {fancybox: !0}}},
            iframe: {
                tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                preload: !0,
                css: {},
                attr: {scrolling: "auto"}
            },
            defaultType: "image",
            animationEffect: "zoom",
            animationDuration: 500,
            zoomOpacity: "auto",
            transitionEffect: "fade",
            transitionDuration: 366,
            slideClass: "",
            baseClass: "",
            baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div></div></div>',
            spinnerTpl: '<div class="fancybox-loading"></div>',
            errorTpl: '<div class="fancybox-error"><p>{{ERROR}}<p></div>',
            btnTpl: {
                download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}"><svg viewBox="0 0 40 40"><path d="M20,23 L20,8 L20,23 L13,16 L20,23 L27,16 L20,23 M26,28 L13,28 L27,28 L14,28" /></svg></a>',
                zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg viewBox="0 0 40 40"><path d="M 18,17 m-8,0 a 8,8 0 1,0 16,0 a 8,8 0 1,0 -16,0 M25,23 L31,29 L25,23" /></svg></button>',
                close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30" /></svg></button>',
                smallBtn: '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35"><path d="M12,12 L23,23 M23,12 L12,23"></path></svg></button>',
                arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><svg viewBox="0 0 40 40"><path d="M10,20 L30,20 L10,20 L18,28 L10,20 L18,12 L10,20"></path></svg></button>',
                arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><svg viewBox="0 0 40 40"><path d="M30,20 L10,20 L30,20 L22,28 L30,20 L22,12 L30,20"></path></svg></button>'
            },
            parentEl: "body",
            autoFocus: !1,
            backFocus: !0,
            trapFocus: !0,
            fullScreen: {autoStart: !1},
            touch: {vertical: !0, momentum: !0},
            hash: null,
            media: {},
            slideShow: {autoStart: !1, speed: 4e3},
            thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"},
            wheel: "auto",
            onInit: n.noop,
            beforeLoad: n.noop,
            afterLoad: n.noop,
            beforeShow: n.noop,
            afterShow: n.noop,
            beforeClose: n.noop,
            afterClose: n.noop,
            onActivate: n.noop,
            onDeactivate: n.noop,
            clickContent: function (t, e) {
                return "image" === t.type && "zoom"
            },
            clickSlide: "close",
            clickOutside: "close",
            dblclickContent: !1,
            dblclickSlide: !1,
            dblclickOutside: !1,
            mobile: {
                idleTime: !1, margin: 0, clickContent: function (t, e) {
                    return "image" === t.type && "toggleControls"
                }, clickSlide: function (t, e) {
                    return "image" === t.type ? "toggleControls" : "close"
                }, dblclickContent: function (t, e) {
                    return "image" === t.type && "zoom"
                }, dblclickSlide: function (t, e) {
                    return "image" === t.type && "zoom"
                }
            },
            lang: "en",
            i18n: {
                en: {
                    CLOSE: "Close",
                    NEXT: "Next",
                    PREV: "Previous",
                    ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                    PLAY_START: "Start slideshow",
                    PLAY_STOP: "Pause slideshow",
                    FULL_SCREEN: "Full screen",
                    THUMBS: "Thumbnails",
                    DOWNLOAD: "Download",
                    SHARE: "Share",
                    ZOOM: "Zoom"
                },
                de: {
                    CLOSE: "Schliessen",
                    NEXT: "Weiter",
                    PREV: "Zurück",
                    ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es später nochmal.",
                    PLAY_START: "Diaschau starten",
                    PLAY_STOP: "Diaschau beenden",
                    FULL_SCREEN: "Vollbild",
                    THUMBS: "Vorschaubilder",
                    DOWNLOAD: "Herunterladen",
                    SHARE: "Teilen",
                    ZOOM: "Maßstab"
                }
            }
        }, s = n(t), r = n(e), c = 0, l = function (t) {
            return t && t.hasOwnProperty && t instanceof n
        }, u = function () {
            return t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
                return t.setTimeout(e, 1e3 / 60)
            }
        }(), d = function () {
            var t, n = e.createElement("fakeelement"), i = {
                transition: "transitionend",
                OTransition: "oTransitionEnd",
                MozTransition: "transitionend",
                WebkitTransition: "webkitTransitionEnd"
            };
            for (t in i) if (n.style[t] !== o) return i[t];
            return "transitionend"
        }(), f = function (t) {
            return t && t.length && t[0].offsetHeight
        }, p = function (t, o, i) {
            var a = this;
            a.opts = n.extend(!0, {index: i}, n.fancybox.defaults, o || {}), n.fancybox.isMobile && (a.opts = n.extend(!0, {}, a.opts, a.opts.mobile)), o && n.isArray(o.buttons) && (a.opts.buttons = o.buttons), a.id = a.opts.id || ++c, a.group = [], a.currIndex = parseInt(a.opts.index, 10) || 0, a.prevIndex = null, a.prevPos = null, a.currPos = 0, a.firstRun = null, a.createGroup(t), a.group.length && (a.$lastFocus = n(e.activeElement).blur(), a.slides = {}, a.init())
        };
        n.extend(p.prototype, {
            init: function () {
                var i, a, s, c = this, l = c.group[c.currIndex], u = l.opts, d = n.fancybox.scrollbarWidth;
                c.scrollTop = r.scrollTop(), c.scrollLeft = r.scrollLeft(), n.fancybox.getInstance() || (n("body").addClass("fancybox-active"), /iPad|iPhone|iPod/.test(navigator.userAgent) && !t.MSStream ? "image" !== l.type && n("body").css("top", n("body").scrollTop() * -1).addClass("fancybox-iosfix") : !n.fancybox.isMobile && e.body.scrollHeight > t.innerHeight && (d === o && (i = n('<div style="width:50px;height:50px;overflow:scroll;" />').appendTo("body"), d = n.fancybox.scrollbarWidth = i[0].offsetWidth - i[0].clientWidth, i.remove()), n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar { margin-right: ' + d + "px; }</style>"), n("body").addClass("compensate-for-scrollbar"))), s = "", n.each(u.buttons, function (t, e) {
                    s += u.btnTpl[e] || ""
                }), a = n(c.translate(c, u.baseTpl.replace("{{buttons}}", s).replace("{{arrows}}", u.btnTpl.arrowLeft + u.btnTpl.arrowRight))).attr("id", "fancybox-container-" + c.id).addClass("fancybox-is-hidden").addClass(u.baseClass).data("FancyBox", c).appendTo(u.parentEl), c.$refs = {container: a}, ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function (t) {
                    c.$refs[t] = a.find(".fancybox-" + t)
                }), c.trigger("onInit"), c.activate(), c.jumpTo(c.currIndex)
            }, translate: function (t, e) {
                var n = t.opts.i18n[t.opts.lang];
                return e.replace(/\{\{(\w+)\}\}/g, function (t, e) {
                    var i = n[e];
                    return i === o ? t : i
                })
            }, createGroup: function (t) {
                var e = this, i = n.makeArray(t);
                n.each(i, function (t, i) {
                    var a, s, r, c, l, u = {}, d = {};
                    n.isPlainObject(i) ? (u = i, d = i.opts || i) : "object" === n.type(i) && n(i).length ? (a = n(i), d = a.data(), d = n.extend({}, d, d.options || {}), d.$orig = a, u.src = d.src || a.attr("href"), u.type || u.src || (u.type = "inline", u.src = i)) : u = {
                        type: "html",
                        src: i + ""
                    }, u.opts = n.extend(!0, {}, e.opts, d), n.isArray(d.buttons) && (u.opts.buttons = d.buttons), s = u.type || u.opts.type, c = u.src || "", !s && c && (c.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? s = "image" : c.match(/\.(pdf)((\?|#).*)?$/i) ? s = "pdf" : (r = c.match(/\.(mp4|mov|ogv)((\?|#).*)?$/i)) ? (s = "video", u.opts.videoFormat || (u.opts.videoFormat = "video/" + ("ogv" === r[1] ? "ogg" : r[1]))) : "#" === c.charAt(0) && (s = "inline")), s ? u.type = s : e.trigger("objectNeedsType", u), u.index = e.group.length, u.opts.$orig && !u.opts.$orig.length && delete u.opts.$orig, !u.opts.$thumb && u.opts.$orig && (u.opts.$thumb = u.opts.$orig.find("img:first")), u.opts.$thumb && !u.opts.$thumb.length && delete u.opts.$thumb, "function" === n.type(u.opts.caption) && (u.opts.caption = u.opts.caption.apply(i, [e, u])), "function" === n.type(e.opts.caption) && (u.opts.caption = e.opts.caption.apply(i, [e, u])), u.opts.caption instanceof n || (u.opts.caption = u.opts.caption === o ? "" : u.opts.caption + ""), "ajax" === s && (l = c.split(/\s+/, 2), l.length > 1 && (u.src = l.shift(), u.opts.filter = l.shift())), "auto" == u.opts.smallBtn && (n.inArray(s, ["html", "inline", "ajax", "video"]) > -1 ? (u.opts.toolbar = !1, u.opts.smallBtn = !0) : u.opts.smallBtn = !1), "pdf" === s && (u.type = "iframe", u.opts.iframe.preload = !1), u.opts.modal && (u.opts = n.extend(!0, u.opts, {
                        infobar: 0,
                        toolbar: 0,
                        smallBtn: 0,
                        keyboard: 0,
                        slideShow: 0,
                        fullScreen: 0,
                        thumbs: 0,
                        touch: 0,
                        clickContent: !1,
                        clickSlide: !1,
                        clickOutside: !1,
                        dblclickContent: !1,
                        dblclickSlide: !1,
                        dblclickOutside: !1
                    })), e.group.push(u)
                })
            }, addEvents: function () {
                var o = this;
                o.removeEvents(), o.$refs.container.on("click.fb-close", "[data-fancybox-close]", function (t) {
                    t.stopPropagation(), t.preventDefault(), o.close(t)
                }).on("click.fb-prev touchend.fb-prev", "[data-fancybox-prev]", function (t) {
                    t.stopPropagation(), t.preventDefault(), o.previous()
                }).on("click.fb-next touchend.fb-next", "[data-fancybox-next]", function (t) {
                    t.stopPropagation(), t.preventDefault(), o.next()
                }).on("click.fb", "[data-fancybox-zoom]", function (t) {
                    o[o.isScaledDown() ? "scaleToActual" : "scaleToFit"]()
                }), s.on("orientationchange.fb resize.fb", function (t) {
                    t && t.originalEvent && "resize" === t.originalEvent.type ? u(function () {
                        o.update()
                    }) : (o.$refs.stage.hide(), setTimeout(function () {
                        o.$refs.stage.show(), o.update()
                    }, 600))
                }), r.on("focusin.fb", function (t) {
                    var i = n.fancybox ? n.fancybox.getInstance() : null;
                    i.isClosing || !i.current || !i.current.opts.trapFocus || n(t.target).hasClass("fancybox-container") || n(t.target).is(e) || i && "fixed" !== n(t.target).css("position") && !i.$refs.container.has(t.target).length && (t.stopPropagation(), i.focus(), s.scrollTop(o.scrollTop).scrollLeft(o.scrollLeft))
                }), r.on("keydown.fb", function (t) {
                    var e = o.current, i = t.keyCode || t.which;
                    if (e && e.opts.keyboard && !n(t.target).is("input") && !n(t.target).is("textarea")) return 8 === i || 27 === i ? (t.preventDefault(), void o.close(t)) : 37 === i || 38 === i ? (t.preventDefault(), void o.previous()) : 39 === i || 40 === i ? (t.preventDefault(), void o.next()) : void o.trigger("afterKeydown", t, i)
                }), o.group[o.currIndex].opts.idleTime && (o.idleSecondsCounter = 0, r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function (t) {
                    o.idleSecondsCounter = 0, o.isIdle && o.showControls(), o.isIdle = !1
                }), o.idleInterval = t.setInterval(function () {
                    o.idleSecondsCounter++, o.idleSecondsCounter >= o.group[o.currIndex].opts.idleTime && !o.isDragging && (o.isIdle = !0, o.idleSecondsCounter = 0, o.hideControls())
                }, 1e3))
            }, removeEvents: function () {
                var e = this;
                s.off("orientationchange.fb resize.fb"), r.off("focusin.fb keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), e.idleInterval && (t.clearInterval(e.idleInterval), e.idleInterval = null)
            }, previous: function (t) {
                return this.jumpTo(this.currPos - 1, t)
            }, next: function (t) {
                return this.jumpTo(this.currPos + 1, t)
            }, jumpTo: function (t, e) {
                var i, a, s, r, c, l, u, d = this, p = d.group.length;
                if (!(d.isDragging || d.isClosing || d.isAnimating && d.firstRun)) {
                    if (t = parseInt(t, 10), a = d.current ? d.current.opts.loop : d.opts.loop, !a && (t < 0 || t >= p)) return !1;
                    if (i = d.firstRun = null === d.firstRun, !(p < 2 && !i && d.isDragging)) {
                        if (r = d.current, d.prevIndex = d.currIndex, d.prevPos = d.currPos, s = d.createSlide(t), p > 1 && ((a || s.index > 0) && d.createSlide(t - 1), (a || s.index < p - 1) && d.createSlide(t + 1)), d.current = s, d.currIndex = s.index, d.currPos = s.pos, d.trigger("beforeShow", i), d.updateControls(), l = n.fancybox.getTranslate(s.$slide), s.isMoved = (0 !== l.left || 0 !== l.top) && !s.$slide.hasClass("fancybox-animated"), s.forcedDuration = o, n.isNumeric(e) ? s.forcedDuration = e : e = s.opts[i ? "animationDuration" : "transitionDuration"], e = parseInt(e, 10), i) return s.opts.animationEffect && e && d.$refs.container.css("transition-duration", e + "ms"), d.$refs.container.removeClass("fancybox-is-hidden"), f(d.$refs.container), d.$refs.container.addClass("fancybox-is-open"), s.$slide.addClass("fancybox-slide--current"), d.loadSlide(s), void d.preload("image");
                        n.each(d.slides, function (t, e) {
                            n.fancybox.stop(e.$slide)
                        }), s.$slide.removeClass("fancybox-slide--next fancybox-slide--previous").addClass("fancybox-slide--current"), s.isMoved ? (c = Math.round(s.$slide.width()), n.each(d.slides, function (t, o) {
                            var i = o.pos - s.pos;
                            n.fancybox.animate(o.$slide, {top: 0, left: i * c + i * o.opts.gutter}, e, function () {
                                o.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"), o.pos === d.currPos && (s.isMoved = !1, d.complete())
                            })
                        })) : d.$refs.stage.children().removeAttr("style"), s.isLoaded ? d.revealContent(s) : d.loadSlide(s), d.preload("image"), r.pos !== s.pos && (u = "fancybox-slide--" + (r.pos > s.pos ? "next" : "previous"), r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current fancybox-slide--next fancybox-slide--previous"), r.isComplete = !1, e && (s.isMoved || s.opts.transitionEffect) && (s.isMoved ? r.$slide.addClass(u) : (u = "fancybox-animated " + u + " fancybox-fx-" + s.opts.transitionEffect, n.fancybox.animate(r.$slide, u, e, function () {
                            r.$slide.removeClass(u).removeAttr("style")
                        }))))
                    }
                }
            }, createSlide: function (t) {
                var e, o, i = this;
                return o = t % i.group.length, o = o < 0 ? i.group.length + o : o, !i.slides[t] && i.group[o] && (e = n('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage), i.slides[t] = n.extend(!0, {}, i.group[o], {
                    pos: t,
                    $slide: e,
                    isLoaded: !1
                }), i.updateSlide(i.slides[t])), i.slides[t]
            }, scaleToActual: function (t, e, i) {
                var a, s, r, c, l, u = this, d = u.current, f = d.$content, p = parseInt(d.$slide.width(), 10),
                    h = parseInt(d.$slide.height(), 10), g = d.width, b = d.height;
                "image" != d.type || d.hasError || !f || u.isAnimating || (n.fancybox.stop(f), u.isAnimating = !0, t = t === o ? .5 * p : t, e = e === o ? .5 * h : e, a = n.fancybox.getTranslate(f), c = g / a.width, l = b / a.height, s = .5 * p - .5 * g, r = .5 * h - .5 * b, g > p && (s = a.left * c - (t * c - t), s > 0 && (s = 0), s < p - g && (s = p - g)), b > h && (r = a.top * l - (e * l - e), r > 0 && (r = 0), r < h - b && (r = h - b)), u.updateCursor(g, b), n.fancybox.animate(f, {
                    top: r,
                    left: s,
                    scaleX: c,
                    scaleY: l
                }, i || 330, function () {
                    u.isAnimating = !1
                }), u.SlideShow && u.SlideShow.isActive && u.SlideShow.stop())
            }, scaleToFit: function (t) {
                var e, o = this, i = o.current, a = i.$content;
                "image" != i.type || i.hasError || !a || o.isAnimating || (n.fancybox.stop(a), o.isAnimating = !0, e = o.getFitPos(i), o.updateCursor(e.width, e.height), n.fancybox.animate(a, {
                    top: e.top,
                    left: e.left,
                    scaleX: e.width / a.width(),
                    scaleY: e.height / a.height()
                }, t || 330, function () {
                    o.isAnimating = !1
                }))
            }, getFitPos: function (t) {
                var e, o, i, a, s, r = this, c = t.$content, l = t.width, u = t.height, d = t.opts.margin;
                return !(!c || !c.length || !l && !u) && ("number" === n.type(d) && (d = [d, d]), 2 == d.length && (d = [d[0], d[1], d[0], d[1]]), e = parseInt(r.$refs.stage.width(), 10) - (d[1] + d[3]), o = parseInt(r.$refs.stage.height(), 10) - (d[0] + d[2]), i = Math.min(1, e / l, o / u), a = Math.floor(i * l), s = Math.floor(i * u), {
                    top: Math.floor(.5 * (o - s)) + d[0],
                    left: Math.floor(.5 * (e - a)) + d[3],
                    width: a,
                    height: s
                })
            }, update: function () {
                var t = this;
                n.each(t.slides, function (e, n) {
                    t.updateSlide(n)
                })
            }, updateSlide: function (t, e) {
                var o = this, i = t && t.$content;
                i && (t.width || t.height) && (o.isAnimating = !1, n.fancybox.stop(i), n.fancybox.setTranslate(i, o.getFitPos(t)), t.pos === o.currPos && o.updateCursor()), t.$slide.trigger("refresh"), o.trigger("onUpdate", t)
            }, centerSlide: function (t, e) {
                var i, a, s = this;
                s.current && (i = Math.round(t.$slide.width()), a = t.pos - s.current.pos, n.fancybox.animate(t.$slide, {
                    top: 0,
                    left: a * i + a * t.opts.gutter,
                    opacity: 1
                }, e === o ? 0 : e, null, !1))
            }, updateCursor: function (t, e) {
                var n, i = this,
                    a = i.$refs.container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-drag fancybox-can-zoomOut");
                i.current && !i.isClosing && (i.isZoomable() ? (a.addClass("fancybox-is-zoomable"), n = t !== o && e !== o ? t < i.current.width && e < i.current.height : i.isScaledDown(), n ? a.addClass("fancybox-can-zoomIn") : i.current.opts.touch ? a.addClass("fancybox-can-drag") : a.addClass("fancybox-can-zoomOut")) : i.current.opts.touch && a.addClass("fancybox-can-drag"))
            }, isZoomable: function () {
                var t, e = this, o = e.current;
                if (o && !e.isClosing) return !!("image" === o.type && o.isLoaded && !o.hasError && ("zoom" === o.opts.clickContent || n.isFunction(o.opts.clickContent) && "zoom" === o.opts.clickContent(o)) && (t = e.getFitPos(o), o.width > t.width || o.height > t.height))
            }, isScaledDown: function () {
                var t = this, e = t.current, o = e.$content, i = !1;
                return o && (i = n.fancybox.getTranslate(o), i = i.width < e.width || i.height < e.height), i
            }, canPan: function () {
                var t = this, e = t.current, n = e.$content, o = !1;
                return n && (o = t.getFitPos(e), o = Math.abs(n.width() - o.width) > 1 || Math.abs(n.height() - o.height) > 1), o
            }, loadSlide: function (t) {
                var e, o, i, a = this;
                if (!t.isLoading && !t.isLoaded) {
                    switch (t.isLoading = !0, a.trigger("beforeLoad", t), e = t.type, o = t.$slide, o.off("refresh").trigger("onReset").addClass("fancybox-slide--" + (e || "unknown")).addClass(t.opts.slideClass), e) {
                        case"image":
                            a.setImage(t);
                            break;
                        case"iframe":
                            a.setIframe(t);
                            break;
                        case"html":
                            a.setContent(t, t.src || t.content);
                            break;
                        case"inline":
                            n(t.src).length ? a.setContent(t, n(t.src)) : a.setError(t);
                            break;
                        case"ajax":
                            a.showLoading(t), i = n.ajax(n.extend({}, t.opts.ajax.settings, {
                                url: t.src,
                                success: function (e, n) {
                                    "success" === n && a.setContent(t, e)
                                },
                                error: function (e, n) {
                                    e && "abort" !== n && a.setError(t)
                                }
                            })), o.one("onReset", function () {
                                i.abort()
                            });
                            break;
                        case"video":
                            a.setContent(t, '<div class="fancybox-content"><video controls' + (t.opts.width && t.opts.height ? ' width="' + t.opts.width + '" height="' + t.opts.height + '" ' : "") + '><source src="' + t.src + '" type="' + t.opts.videoFormat + "\">Your browser doesn't support HTML5 video</video></div>");
                            break;
                        default:
                            a.setError(t)
                    }
                    return !0
                }
            }, setImage: function (e) {
                var o, i, a, s, r = this, c = e.opts.srcset || e.opts.image.srcset;
                if (c) {
                    a = t.devicePixelRatio || 1, s = t.innerWidth * a, i = c.split(",").map(function (t) {
                        var e = {};
                        return t.trim().split(/\s+/).forEach(function (t, n) {
                            var o = parseInt(t.substring(0, t.length - 1), 10);
                            return 0 === n ? e.url = t : void(o && (e.value = o, e.postfix = t[t.length - 1]))
                        }), e
                    }), i.sort(function (t, e) {
                        return t.value - e.value
                    });
                    for (var l = 0; l < i.length; l++) {
                        var u = i[l];
                        if ("w" === u.postfix && u.value >= s || "x" === u.postfix && u.value >= a) {
                            o = u;
                            break
                        }
                    }
                    !o && i.length && (o = i[i.length - 1]), o && (e.src = o.url, e.width && e.height && "w" == o.postfix && (e.height = e.width / e.height * o.value, e.width = o.value), e.opts.srcset = c)
                }
                e.$content = n('<div class="fancybox-image-wrap"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide), e.opts.preload !== !1 && e.opts.width && e.opts.height && (e.opts.thumb || e.opts.$thumb) ? (e.width = e.opts.width, e.height = e.opts.height, e.$ghost = n("<img />").one("error", function () {
                    n(this).remove(), e.$ghost = null, r.setBigImage(e)
                }).one("load", function () {
                    r.afterLoad(e), r.setBigImage(e)
                }).addClass("fancybox-image").appendTo(e.$content).attr("src", e.opts.thumb || e.opts.$thumb.attr("src"))) : r.setBigImage(e)
            }, setBigImage: function (t) {
                var e = this, o = n("<img />");
                t.$image = o.one("error", function () {
                    e.setError(t)
                }).one("load", function () {
                    var n;
                    t.$ghost || (e.resolveImageSlideSize(t, this.naturalWidth, this.naturalHeight), e.afterLoad(t)), clearTimeout(t.timouts), t.timouts = null, e.isClosing || (t.opts.srcset && (n = t.opts.sizes, n && "auto" !== n || (n = (t.width > t.height ? "100" : Math.round(t.width / t.height * 100)) + "vw"), o.attr("sizes", n).attr("srcset", t.opts.srcset)), t.$ghost && (t.timouts = setTimeout(function () {
                        t.timouts = null, t.$ghost.hide()
                    }, Math.min(300, Math.max(1e3, t.height / 1600)))), e.hideLoading(t))
                }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content), (o[0].complete || "complete" == o[0].readyState) && o[0].naturalWidth && o[0].naturalHeight ? o.trigger("load") : o[0].error ? o.trigger("error") : t.timouts = setTimeout(function () {
                    o[0].complete || t.hasError || e.showLoading(t)
                }, 100)
            }, resolveImageSlideSize: function (t, e, n) {
                var o = parseInt(t.opts.width, 10), i = parseInt(t.opts.height, 10);
                t.width = e, t.height = n, o > 0 && (t.width = o, t.height = Math.floor(o * n / e)), i > 0 && (t.width = Math.floor(i * e / n), t.height = i)
            }, setIframe: function (t) {
                var e, i = this, a = t.opts.iframe, s = t.$slide;
                t.$content = n('<div class="fancybox-content' + (a.preload ? " fancybox-is-hidden" : "") + '"></div>').css(a.css).appendTo(s), e = n(a.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(a.attr).appendTo(t.$content), a.preload ? (i.showLoading(t), e.on("load.fb error.fb", function (e) {
                    this.isReady = 1, t.$slide.trigger("refresh"), i.afterLoad(t)
                }), s.on("refresh.fb", function () {
                    var n, i, s, r = t.$content, c = a.css.width, l = a.css.height;
                    if (1 === e[0].isReady) {
                        try {
                            i = e.contents(), s = i.find("body")
                        } catch (t) {
                        }
                        s && s.length && (c === o && (n = e[0].contentWindow.document.documentElement.scrollWidth, c = Math.ceil(s.outerWidth(!0) + (r.width() - n)), c += r.outerWidth() - r.innerWidth()), l === o && (l = Math.ceil(s.outerHeight(!0)), l += r.outerHeight() - r.innerHeight()), c && r.width(c), l && r.height(l)), r.removeClass("fancybox-is-hidden")
                    }
                })) : this.afterLoad(t), e.attr("src", t.src), t.opts.smallBtn === !0 && t.$content.prepend(i.translate(t, t.opts.btnTpl.smallBtn)), s.one("onReset", function () {
                    try {
                        n(this).find("iframe").hide().attr("src", "//about:blank")
                    } catch (t) {
                    }
                    n(this).empty(), t.isLoaded = !1
                })
            }, setContent: function (t, e) {
                var o = this;
                o.isClosing || (o.hideLoading(t), t.$slide.empty(), l(e) && e.parent().length ? (e.parent(".fancybox-slide--inline").trigger("onReset"), t.$placeholder = n("<div></div>").hide().insertAfter(e), e.css("display", "inline-block")) : t.hasError || ("string" === n.type(e) && (e = n("<div>").append(n.trim(e)).contents(), 3 === e[0].nodeType && (e = n("<div>").html(e))), t.opts.filter && (e = n("<div>").html(e).find(t.opts.filter))), t.$slide.one("onReset", function () {
                    n(this).find("video,audio").trigger("pause"), t.$placeholder && (t.$placeholder.after(e.hide()).remove(), t.$placeholder = null), t.$smallBtn && (t.$smallBtn.remove(), t.$smallBtn = null), t.hasError || (n(this).empty(), t.isLoaded = !1)
                }), t.$content = n(e).appendTo(t.$slide), this.afterLoad(t))
            }, setError: function (t) {
                t.hasError = !0, t.$slide.removeClass("fancybox-slide--" + t.type), this.setContent(t, this.translate(t, t.opts.errorTpl))
            }, showLoading: function (t) {
                var e = this;
                t = t || e.current, t && !t.$spinner && (t.$spinner = n(e.opts.spinnerTpl).appendTo(t.$slide))
            }, hideLoading: function (t) {
                var e = this;
                t = t || e.current, t && t.$spinner && (t.$spinner.remove(), delete t.$spinner)
            }, afterLoad: function (t) {
                var e = this;
                e.isClosing || (t.isLoading = !1, t.isLoaded = !0, e.trigger("afterLoad", t), e.hideLoading(t), t.opts.smallBtn && !t.$smallBtn && (t.$smallBtn = n(e.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content.filter("div,form").first())), t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function (t) {
                    return 2 == t.button && t.preventDefault(), !0
                }), "image" === t.type && n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)), e.revealContent(t))
            }, revealContent: function (t) {
                var e, i, a, s, r = this, c = t.$slide, l = !1, u = !1;
                return e = t.opts[r.firstRun ? "animationEffect" : "transitionEffect"], a = t.opts[r.firstRun ? "animationDuration" : "transitionDuration"], a = parseInt(t.forcedDuration === o ? a : t.forcedDuration, 10), !t.isMoved && t.pos === r.currPos && a || (e = !1), "zoom" === e && (t.pos === r.currPos && a && "image" === t.type && !t.hasError && (u = r.getThumbPos(t)) ? l = r.getFitPos(t) : e = "fade"), "zoom" === e && l ? (l.scaleX = l.width / u.width, l.scaleY = l.height / u.height, s = t.opts.zoomOpacity, "auto" == s && (s = Math.abs(t.width / t.height - u.width / u.height) > .1), s && (u.opacity = .1, l.opacity = 1), n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), u), f(t.$content), void n.fancybox.animate(t.$content, l, a, function () {
                    r.complete()
                })) : (r.updateSlide(t), e ? (n.fancybox.stop(c), i = "fancybox-animated fancybox-slide--" + (t.pos >= r.prevPos ? "next" : "previous") + " fancybox-fx-" + e, c.removeAttr("style").removeClass("fancybox-slide--current fancybox-slide--next fancybox-slide--previous").addClass(i), t.$content.removeClass("fancybox-is-hidden"), f(c), void n.fancybox.animate(c, "fancybox-slide--current", a, function (e) {
                    c.removeClass(i).removeAttr("style"), t.pos === r.currPos && r.complete()
                }, !0)) : (f(c), t.$content.removeClass("fancybox-is-hidden"), void(t.pos === r.currPos && r.complete())))
            }, getThumbPos: function (o) {
                var i, a = this, s = !1, r = function (e) {
                    for (var o, i = e[0], a = i.getBoundingClientRect(), s = []; null !== i.parentElement;) "hidden" !== n(i.parentElement).css("overflow") && "auto" !== n(i.parentElement).css("overflow") || s.push(i.parentElement.getBoundingClientRect()), i = i.parentElement;
                    return o = s.every(function (t) {
                        var e = Math.min(a.right, t.right) - Math.max(a.left, t.left),
                            n = Math.min(a.bottom, t.bottom) - Math.max(a.top, t.top);
                        return e > 0 && n > 0
                    }), o && a.bottom > 0 && a.right > 0 && a.left < n(t).width() && a.top < n(t).height()
                }, c = o.opts.$thumb, l = c ? c.offset() : 0;
                return l && c[0].ownerDocument === e && r(c) && (i = a.$refs.stage.offset(), s = {
                    top: l.top - i.top + parseFloat(c.css("border-top-width") || 0),
                    left: l.left - i.left + parseFloat(c.css("border-left-width") || 0),
                    width: c.width(),
                    height: c.height(),
                    scaleX: 1,
                    scaleY: 1
                }), s
            }, complete: function () {
                var t = this, o = t.current, i = {};
                o.isMoved || !o.isLoaded || o.isComplete || (o.isComplete = !0, o.$slide.siblings().trigger("onReset"), t.preload("inline"), f(o.$slide), o.$slide.addClass("fancybox-slide--complete"), n.each(t.slides, function (e, o) {
                    o.pos >= t.currPos - 1 && o.pos <= t.currPos + 1 ? i[o.pos] = o : o && (n.fancybox.stop(o.$slide), o.$slide.off().remove())
                }), t.slides = i, t.updateCursor(), t.trigger("afterShow"), o.$slide.find("video,audio").first().trigger("play"), (n(e.activeElement).is("[disabled]") || o.opts.autoFocus && "image" != o.type && "iframe" !== o.type) && t.focus())
            }, preload: function (t) {
                var e = this, n = e.slides[e.currPos + 1], o = e.slides[e.currPos - 1];
                n && n.type === t && e.loadSlide(n), o && o.type === t && e.loadSlide(o)
            }, focus: function () {
                var t, e = this.current;
                this.isClosing || (e && e.isComplete && (t = e.$slide.find("input[autofocus]:enabled:visible:first"), t.length || (t = e.$slide.find("button,:input,[tabindex],a").filter(":enabled:visible:first"))), t = t && t.length ? t : this.$refs.container, t.focus())
            }, activate: function () {
                var t = this;
                n(".fancybox-container").each(function () {
                    var e = n(this).data("FancyBox");
                    e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"), e.removeEvents(), e.isVisible = !1)
                }), t.isVisible = !0, (t.current || t.isIdle) && (t.update(), t.updateControls()), t.trigger("onActivate"), t.addEvents()
            }, close: function (t, e) {
                var o, i, a, s, r, c, l, p = this, h = p.current, g = function () {
                    p.cleanUp(t)
                };
                return !p.isClosing && (p.isClosing = !0, p.trigger("beforeClose", t) === !1 ? (p.isClosing = !1, u(function () {
                    p.update()
                }), !1) : (p.removeEvents(), h.timouts && clearTimeout(h.timouts), a = h.$content, o = h.opts.animationEffect, i = n.isNumeric(e) ? e : o ? h.opts.animationDuration : 0, h.$slide.off(d).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"), h.$slide.siblings().trigger("onReset").remove(), i && p.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"), p.hideLoading(h), p.hideControls(), p.updateCursor(), "zoom" !== o || t !== !0 && a && i && "image" === h.type && !h.hasError && (l = p.getThumbPos(h)) || (o = "fade"), "zoom" === o ? (n.fancybox.stop(a), s = a[0].getBoundingClientRect(), c = {
                    top: s.top,
                    left: s.left,
                    scaleX: s.width / l.width,
                    scaleY: s.height / l.height,
                    width: l.width,
                    height: l.height
                }, r = h.opts.zoomOpacity, "auto" == r && (r = Math.abs(h.width / h.height - l.width / l.height) > .1), r && (l.opacity = 0), n.fancybox.setTranslate(h.$content, c), f(h.$content), n.fancybox.animate(h.$content, l, i, g), !0) : (o && i ? t === !0 ? setTimeout(g, i) : n.fancybox.animate(h.$slide.removeClass("fancybox-slide--current"), "fancybox-animated fancybox-slide--previous fancybox-fx-" + o, i, g) : g(), !0)))
            }, cleanUp: function (t) {
                var o, i, a = this, r = n("body");
                a.current.$slide.trigger("onReset"), a.$refs.container.empty().remove(), a.trigger("afterClose", t), a.$lastFocus && a.current.opts.backFocus && a.$lastFocus.focus(), a.current = null, o = n.fancybox.getInstance(), o ? o.activate() : (s.scrollTop(a.scrollTop).scrollLeft(a.scrollLeft), r.removeClass("fancybox-active compensate-for-scrollbar"), r.hasClass("fancybox-iosfix") && (i = parseInt(e.body.style.top, 10), r.removeClass("fancybox-iosfix").css("top", "").scrollTop(i * -1)), n("#fancybox-style-noscroll").remove())
            }, trigger: function (t, e) {
                var o, i = Array.prototype.slice.call(arguments, 1), a = this, s = e && e.opts ? e : a.current;
                return s ? i.unshift(s) : s = a, i.unshift(a), n.isFunction(s.opts[t]) && (o = s.opts[t].apply(s, i)), o === !1 ? o : void("afterClose" !== t && a.$refs ? a.$refs.container.trigger(t + ".fb", i) : r.trigger(t + ".fb", i))
            }, updateControls: function (t) {
                var e = this, n = e.current, o = n.index, i = n.opts.caption, a = e.$refs.container,
                    s = e.$refs.caption;
                n.$slide.trigger("refresh"), e.$caption = i && i.length ? s.html(i) : null, e.isHiddenControls || e.isIdle || e.showControls(), a.find("[data-fancybox-count]").html(e.group.length), a.find("[data-fancybox-index]").html(o + 1), a.find("[data-fancybox-prev]").prop("disabled", !n.opts.loop && o <= 0), a.find("[data-fancybox-next]").prop("disabled", !n.opts.loop && o >= e.group.length - 1), "image" === n.type ? a.find("[data-fancybox-download]").attr("href", n.opts.image.src || n.src).show() : a.find("[data-fancybox-download],[data-fancybox-zoom]").hide()
            }, hideControls: function () {
                this.isHiddenControls = !0, this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav")
            }, showControls: function () {
                var t = this, e = t.current ? t.current.opts : t.opts, n = t.$refs.container;
                t.isHiddenControls = !1, t.idleSecondsCounter = 0, n.toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons)).toggleClass("fancybox-show-infobar", !!(e.infobar && t.group.length > 1)).toggleClass("fancybox-show-nav", !!(e.arrows && t.group.length > 1)).toggleClass("fancybox-is-modal", !!e.modal), t.$caption ? n.addClass("fancybox-show-caption ") : n.removeClass("fancybox-show-caption")
            }, toggleControls: function () {
                this.isHiddenControls ? this.showControls() : this.hideControls()
            }
        }), n.fancybox = {
            version: "3.2.11",
            defaults: a,
            getInstance: function (t) {
                var e = n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),
                    o = Array.prototype.slice.call(arguments, 1);
                return e instanceof p && ("string" === n.type(t) ? e[t].apply(e, o) : "function" === n.type(t) && t.apply(e, o), e)
            },
            open: function (t, e, n) {
                return new p(t, e, n)
            },
            close: function (t) {
                var e = this.getInstance();
                e && (e.close(), t === !0 && this.close())
            },
            destroy: function () {
                this.close(!0), r.off("click.fb-start")
            },
            isMobile: e.createTouch !== o && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            use3d: function () {
                var n = e.createElement("div");
                return t.getComputedStyle && t.getComputedStyle(n).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)
            }(),
            getTranslate: function (t) {
                var e;
                if (!t || !t.length) return !1;
                if (e = t.eq(0).css("transform"), e && e.indexOf("matrix") !== -1 ? (e = e.split("(")[1], e = e.split(")")[0], e = e.split(",")) : e = [], e.length) e = e.length > 10 ? [e[13], e[12], e[0], e[5]] : [e[5], e[4], e[0], e[3]], e = e.map(parseFloat); else {
                    e = [0, 0, 1, 1];
                    var n = /\.*translate\((.*)px,(.*)px\)/i, o = n.exec(t.eq(0).attr("style"));
                    o && (e[0] = parseFloat(o[2]), e[1] = parseFloat(o[1]))
                }
                return {
                    top: e[0],
                    left: e[1],
                    scaleX: e[2],
                    scaleY: e[3],
                    opacity: parseFloat(t.css("opacity")),
                    width: t.width(),
                    height: t.height()
                }
            },
            setTranslate: function (t, e) {
                var n = "", i = {};
                if (t && e) return e.left === o && e.top === o || (n = (e.left === o ? t.position().left : e.left) + "px, " + (e.top === o ? t.position().top : e.top) + "px", n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")"), e.scaleX !== o && e.scaleY !== o && (n = (n.length ? n + " " : "") + "scale(" + e.scaleX + ", " + e.scaleY + ")"), n.length && (i.transform = n), e.opacity !== o && (i.opacity = e.opacity), e.width !== o && (i.width = e.width), e.height !== o && (i.height = e.height), t.css(i)
            },
            animate: function (t, e, i, a, s) {
                var r = !1;
                n.isFunction(i) && (a = i, i = null), n.isPlainObject(e) || t.removeAttr("style"), t.on(d, function (o) {
                    (!o || !o.originalEvent || t.is(o.originalEvent.target) && "z-index" != o.originalEvent.propertyName) && (n.fancybox.stop(t), r && n.fancybox.setTranslate(t, r), n.isPlainObject(e) ? s === !1 && t.removeAttr("style") : s !== !0 && t.removeClass(e), n.isFunction(a) && a(o))
                }), n.isNumeric(i) && t.css("transition-duration", i + "ms"), n.isPlainObject(e) ? (e.scaleX !== o && e.scaleY !== o && (r = n.extend({}, e, {
                    width: t.width() * e.scaleX,
                    height: t.height() * e.scaleY,
                    scaleX: 1,
                    scaleY: 1
                }), delete e.width, delete e.height, t.hasClass("fancybox-image-wrap") && t.parent().addClass("fancybox-is-scaling")), n.fancybox.setTranslate(t, e)) : t.addClass(e), t.data("timer", setTimeout(function () {
                    t.trigger("transitionend")
                }, i + 16))
            },
            stop: function (t) {
                clearTimeout(t.data("timer")), t.off("transitionend").css("transition-duration", ""), t.hasClass("fancybox-image-wrap") && t.parent().removeClass("fancybox-is-scaling")
            }
        }, n.fn.fancybox = function (t) {
            var e;
            return t = t || {}, e = t.selector || !1, e ? n("body").off("click.fb-start", e).on("click.fb-start", e, {options: t}, i) : this.off("click.fb-start").on("click.fb-start", {
                items: this,
                options: t
            }, i), this
        }, r.on("click.fb-start", "[data-fancybox]", i)
    }
}(window, document, window.jQuery || jQuery), function (t) {
    "use strict";
    var e = function (e, n, o) {
        if (e) return o = o || "",
        "object" === t.type(o) && (o = t.param(o, !0)), t.each(n, function (t, n) {
            e = e.replace("$" + t, n || "")
        }), o.length && (e += (e.indexOf("?") > 0 ? "&" : "?") + o), e
    }, n = {
        youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {autoplay: 1, autohide: 1, fs: 1, rel: 0, hd: 1, wmode: "transparent", enablejsapi: 1, html5: 1},
            paramPlace: 8,
            type: "iframe",
            url: "//www.youtube.com/embed/$4",
            thumb: "//img.youtube.com/vi/$4/hqdefault.jpg"
        },
        vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {autoplay: 1, hd: 1, show_title: 1, show_byline: 1, show_portrait: 0, fullscreen: 1, api: 1},
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
        },
        metacafe: {
            matcher: /metacafe.com\/watch\/(\d+)\/(.*)?/,
            type: "iframe",
            url: "//www.metacafe.com/embed/$1/?ap=1"
        },
        dailymotion: {
            matcher: /dailymotion.com\/video\/(.*)\/?(.*)/,
            params: {additionalInfos: 0, autoStart: 1},
            type: "iframe",
            url: "//www.dailymotion.com/embed/video/$1"
        },
        vine: {matcher: /vine.co\/v\/([a-zA-Z0-9\?\=\-]+)/, type: "iframe", url: "//vine.co/v/$1/embed/simple"},
        instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
        },
        gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function (t) {
                return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12]) + "&output=" + (t[12] && t[12].indexOf("layer=c") > 0 ? "svembed" : "embed")
            }
        },
        gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function (t) {
                return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
        }
    };
    t(document).on("objectNeedsType.fb", function (o, i, a) {
        var s, r, c, l, u, d, f, p = a.src || "", h = !1;
        s = t.extend(!0, {}, n, a.opts.media), t.each(s, function (n, o) {
            if (c = p.match(o.matcher)) {
                if (h = o.type, d = {}, o.paramPlace && c[o.paramPlace]) {
                    u = c[o.paramPlace], "?" == u[0] && (u = u.substring(1)), u = u.split("&");
                    for (var i = 0; i < u.length; ++i) {
                        var s = u[i].split("=", 2);
                        2 == s.length && (d[s[0]] = decodeURIComponent(s[1].replace(/\+/g, " ")))
                    }
                }
                return l = t.extend(!0, {}, o.params, a.opts[n], d), p = "function" === t.type(o.url) ? o.url.call(this, c, l, a) : e(o.url, c, l), r = "function" === t.type(o.thumb) ? o.thumb.call(this, c, l, a) : e(o.thumb, c), "vimeo" === n && (p = p.replace("&%23", "#")), !1
            }
        }), h ? (a.src = p, a.type = h, a.opts.thumb || a.opts.$thumb && a.opts.$thumb.length || (a.opts.thumb = r), "iframe" === h && (t.extend(!0, a.opts, {
            iframe: {
                preload: !1,
                attr: {scrolling: "no"}
            }
        }), a.contentProvider = f, a.opts.slideClass += " fancybox-slide--" + ("gmap_place" == f || "gmap_search" == f ? "map" : "video"))) : p && (a.type = a.opts.defaultType)
    })
}(window.jQuery || jQuery), function (t, e, n) {
    "use strict";
    var o = function () {
        return t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
            return t.setTimeout(e, 1e3 / 60)
        }
    }(), i = function () {
        return t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function (e) {
            t.clearTimeout(e)
        }
    }(), a = function (e) {
        var n = [];
        e = e.originalEvent || e || t.e, e = e.touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e];
        for (var o in e) e[o].pageX ? n.push({x: e[o].pageX, y: e[o].pageY}) : e[o].clientX && n.push({
            x: e[o].clientX,
            y: e[o].clientY
        });
        return n
    }, s = function (t, e, n) {
        return e && t ? "x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
    }, r = function (t) {
        if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea') || n.isFunction(t.get(0).onclick) || t.data("selectable")) return !0;
        for (var e = 0, o = t[0].attributes, i = o.length; e < i; e++) if ("data-fancybox-" === o[e].nodeName.substr(0, 14)) return !0;
        return !1
    }, c = function (e) {
        var n = t.getComputedStyle(e)["overflow-y"], o = t.getComputedStyle(e)["overflow-x"],
            i = ("scroll" === n || "auto" === n) && e.scrollHeight > e.clientHeight,
            a = ("scroll" === o || "auto" === o) && e.scrollWidth > e.clientWidth;
        return i || a
    }, l = function (t) {
        for (var e = !1; ;) {
            if (e = c(t.get(0))) break;
            if (t = t.parent(), !t.length || t.hasClass("fancybox-stage") || t.is("body")) break
        }
        return e
    }, u = function (t) {
        var e = this;
        e.instance = t, e.$bg = t.$refs.bg, e.$stage = t.$refs.stage, e.$container = t.$refs.container, e.destroy(), e.$container.on("touchstart.fb.touch mousedown.fb.touch", n.proxy(e, "ontouchstart"))
    };
    u.prototype.destroy = function () {
        this.$container.off(".fb.touch")
    }, u.prototype.ontouchstart = function (o) {
        var i = this, c = n(o.target), u = i.instance, d = u.current, f = d.$content, p = "touchstart" == o.type;
        if (p && i.$container.off("mousedown.fb.touch"), (!o.originalEvent || 2 != o.originalEvent.button) && c.length && !r(c) && !r(c.parent()) && (c.is("img") || !(o.originalEvent.clientX > c[0].clientWidth + c.offset().left))) {
            if (!d || u.isAnimating || u.isClosing) return o.stopPropagation(), void o.preventDefault();
            if (i.realPoints = i.startPoints = a(o), i.startPoints) {
                if (o.stopPropagation(), i.startEvent = o, i.canTap = !0, i.$target = c, i.$content = f, i.opts = d.opts.touch, i.isPanning = !1, i.isSwiping = !1, i.isZooming = !1, i.isScrolling = !1, i.sliderStartPos = i.sliderLastPos || {
                        top: 0,
                        left: 0
                    }, i.contentStartPos = n.fancybox.getTranslate(i.$content), i.contentLastPos = null, i.startTime = (new Date).getTime(), i.distanceX = i.distanceY = i.distance = 0, i.canvasWidth = Math.round(d.$slide[0].clientWidth), i.canvasHeight = Math.round(d.$slide[0].clientHeight), n(e).off(".fb.touch").on(p ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", n.proxy(i, "ontouchend")).on(p ? "touchmove.fb.touch" : "mousemove.fb.touch", n.proxy(i, "ontouchmove")), n.fancybox.isMobile && e.addEventListener("scroll", i.onscroll, !0), !i.opts && !u.canPan() || !c.is(i.$stage) && !i.$stage.find(c).length) return void(c.is("img") && o.preventDefault());
                n.fancybox.isMobile && (l(c) || l(c.parent())) || o.preventDefault(), 1 === i.startPoints.length && ("image" === d.type && (i.contentStartPos.width > i.canvasWidth + 1 || i.contentStartPos.height > i.canvasHeight + 1) ? (n.fancybox.stop(i.$content), i.$content.css("transition-duration", ""), i.isPanning = !0) : i.isSwiping = !0, i.$container.addClass("fancybox-controls--isGrabbing")), 2 !== i.startPoints.length || u.isAnimating || d.hasError || "image" !== d.type || !d.isLoaded && !d.$ghost || (i.canTap = !1, i.isSwiping = !1, i.isPanning = !1, i.isZooming = !0, n.fancybox.stop(i.$content), i.$content.css("transition-duration", ""), i.centerPointStartX = .5 * (i.startPoints[0].x + i.startPoints[1].x) - n(t).scrollLeft(), i.centerPointStartY = .5 * (i.startPoints[0].y + i.startPoints[1].y) - n(t).scrollTop(), i.percentageOfImageAtPinchPointX = (i.centerPointStartX - i.contentStartPos.left) / i.contentStartPos.width, i.percentageOfImageAtPinchPointY = (i.centerPointStartY - i.contentStartPos.top) / i.contentStartPos.height, i.startDistanceBetweenFingers = s(i.startPoints[0], i.startPoints[1]))
            }
        }
    }, u.prototype.onscroll = function (t) {
        var n = this;
        n.isScrolling = !0, e.removeEventListener("scroll", n.onscroll, !0)
    }, u.prototype.ontouchmove = function (t) {
        var e = this, o = n(t.target);
        return e.isScrolling || !o.is(e.$stage) && !e.$stage.find(o).length ? void(e.canTap = !1) : (e.newPoints = a(t), void((e.opts || e.instance.canPan()) && e.newPoints && e.newPoints.length && (e.isSwiping && e.isSwiping === !0 || t.preventDefault(), e.distanceX = s(e.newPoints[0], e.startPoints[0], "x"), e.distanceY = s(e.newPoints[0], e.startPoints[0], "y"), e.distance = s(e.newPoints[0], e.startPoints[0]), e.distance > 0 && (e.isSwiping ? e.onSwipe(t) : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()))))
    }, u.prototype.onSwipe = function (e) {
        var a, s = this, r = s.isSwiping, c = s.sliderStartPos.left || 0;
        if (r !== !0) "x" == r && (s.distanceX > 0 && (s.instance.group.length < 2 || 0 === s.instance.current.index && !s.instance.current.opts.loop) ? c += Math.pow(s.distanceX, .8) : s.distanceX < 0 && (s.instance.group.length < 2 || s.instance.current.index === s.instance.group.length - 1 && !s.instance.current.opts.loop) ? c -= Math.pow(-s.distanceX, .8) : c += s.distanceX), s.sliderLastPos = {
            top: "x" == r ? 0 : s.sliderStartPos.top + s.distanceY,
            left: c
        }, s.requestId && (i(s.requestId), s.requestId = null), s.requestId = o(function () {
            s.sliderLastPos && (n.each(s.instance.slides, function (t, e) {
                var o = e.pos - s.instance.currPos;
                n.fancybox.setTranslate(e.$slide, {
                    top: s.sliderLastPos.top,
                    left: s.sliderLastPos.left + o * s.canvasWidth + o * e.opts.gutter
                })
            }), s.$container.addClass("fancybox-is-sliding"))
        }); else if (Math.abs(s.distance) > 10) {
            if (s.canTap = !1, s.instance.group.length < 2 && s.opts.vertical ? s.isSwiping = "y" : s.instance.isDragging || s.opts.vertical === !1 || "auto" === s.opts.vertical && n(t).width() > 800 ? s.isSwiping = "x" : (a = Math.abs(180 * Math.atan2(s.distanceY, s.distanceX) / Math.PI), s.isSwiping = a > 45 && a < 135 ? "y" : "x"), s.canTap = !1, "y" === s.isSwiping && n.fancybox.isMobile && (l(s.$target) || l(s.$target.parent()))) return void(s.isScrolling = !0);
            s.instance.isDragging = s.isSwiping, s.startPoints = s.newPoints, n.each(s.instance.slides, function (t, e) {
                n.fancybox.stop(e.$slide), e.$slide.css("transition-duration", ""), e.inTransition = !1, e.pos === s.instance.current.pos && (s.sliderStartPos.left = n.fancybox.getTranslate(e.$slide).left)
            }), s.instance.SlideShow && s.instance.SlideShow.isActive && s.instance.SlideShow.stop()
        }
    }, u.prototype.onPan = function () {
        var t = this;
        return s(t.newPoints[0], t.realPoints[0]) < (n.fancybox.isMobile ? 10 : 5) ? void(t.startPoints = t.newPoints) : (t.canTap = !1, t.contentLastPos = t.limitMovement(), t.requestId && (i(t.requestId), t.requestId = null), void(t.requestId = o(function () {
            n.fancybox.setTranslate(t.$content, t.contentLastPos)
        })))
    }, u.prototype.limitMovement = function () {
        var t, e, n, o, i, a, s = this, r = s.canvasWidth, c = s.canvasHeight, l = s.distanceX, u = s.distanceY,
            d = s.contentStartPos, f = d.left, p = d.top, h = d.width, g = d.height;
        return i = h > r ? f + l : f, a = p + u, t = Math.max(0, .5 * r - .5 * h), e = Math.max(0, .5 * c - .5 * g), n = Math.min(r - h, .5 * r - .5 * h), o = Math.min(c - g, .5 * c - .5 * g), h > r && (l > 0 && i > t && (i = t - 1 + Math.pow(-t + f + l, .8) || 0), l < 0 && i < n && (i = n + 1 - Math.pow(n - f - l, .8) || 0)), g > c && (u > 0 && a > e && (a = e - 1 + Math.pow(-e + p + u, .8) || 0), u < 0 && a < o && (a = o + 1 - Math.pow(o - p - u, .8) || 0)), {
            top: a,
            left: i,
            scaleX: d.scaleX,
            scaleY: d.scaleY
        }
    }, u.prototype.limitPosition = function (t, e, n, o) {
        var i = this, a = i.canvasWidth, s = i.canvasHeight;
        return n > a ? (t = t > 0 ? 0 : t, t = t < a - n ? a - n : t) : t = Math.max(0, a / 2 - n / 2), o > s ? (e = e > 0 ? 0 : e, e = e < s - o ? s - o : e) : e = Math.max(0, s / 2 - o / 2), {
            top: e,
            left: t
        }
    }, u.prototype.onZoom = function () {
        var e = this, a = e.contentStartPos.width, r = e.contentStartPos.height, c = e.contentStartPos.left,
            l = e.contentStartPos.top, u = s(e.newPoints[0], e.newPoints[1]), d = u / e.startDistanceBetweenFingers,
            f = Math.floor(a * d), p = Math.floor(r * d), h = (a - f) * e.percentageOfImageAtPinchPointX,
            g = (r - p) * e.percentageOfImageAtPinchPointY,
            b = (e.newPoints[0].x + e.newPoints[1].x) / 2 - n(t).scrollLeft(),
            m = (e.newPoints[0].y + e.newPoints[1].y) / 2 - n(t).scrollTop(), y = b - e.centerPointStartX,
            v = m - e.centerPointStartY, x = c + (h + y), w = l + (g + v),
            $ = {top: w, left: x, scaleX: e.contentStartPos.scaleX * d, scaleY: e.contentStartPos.scaleY * d};
        e.canTap = !1, e.newWidth = f, e.newHeight = p, e.contentLastPos = $, e.requestId && (i(e.requestId), e.requestId = null), e.requestId = o(function () {
            n.fancybox.setTranslate(e.$content, e.contentLastPos)
        })
    }, u.prototype.ontouchend = function (t) {
        var o = this, s = Math.max((new Date).getTime() - o.startTime, 1), r = o.isSwiping, c = o.isPanning,
            l = o.isZooming, u = o.isScrolling;
        return o.endPoints = a(t), o.$container.removeClass("fancybox-controls--isGrabbing"), n(e).off(".fb.touch"), e.removeEventListener("scroll", o.onscroll, !0), o.requestId && (i(o.requestId), o.requestId = null), o.isSwiping = !1, o.isPanning = !1, o.isZooming = !1, o.isScrolling = !1, o.instance.isDragging = !1, o.canTap ? o.onTap(t) : (o.speed = 366, o.velocityX = o.distanceX / s * .5, o.velocityY = o.distanceY / s * .5, o.speedX = Math.max(.5 * o.speed, Math.min(1.5 * o.speed, 1 / Math.abs(o.velocityX) * o.speed)), void(c ? o.endPanning() : l ? o.endZooming() : o.endSwiping(r, u)))
    }, u.prototype.endSwiping = function (t, e) {
        var o = this, i = !1, a = o.instance.group.length;
        o.sliderLastPos = null, "y" == t && !e && Math.abs(o.distanceY) > 50 ? (n.fancybox.animate(o.instance.current.$slide, {
            top: o.sliderStartPos.top + o.distanceY + 150 * o.velocityY,
            opacity: 0
        }, 150), i = o.instance.close(!0, 300)) : "x" == t && o.distanceX > 50 && a > 1 ? i = o.instance.previous(o.speedX) : "x" == t && o.distanceX < -50 && a > 1 && (i = o.instance.next(o.speedX)), i !== !1 || "x" != t && "y" != t || (e || a < 2 ? o.instance.centerSlide(o.instance.current, 150) : o.instance.jumpTo(o.instance.current.index)), o.$container.removeClass("fancybox-is-sliding")
    }, u.prototype.endPanning = function () {
        var t, e, o, i = this;
        i.contentLastPos && (i.opts.momentum === !1 ? (t = i.contentLastPos.left, e = i.contentLastPos.top) : (t = i.contentLastPos.left + i.velocityX * i.speed, e = i.contentLastPos.top + i.velocityY * i.speed), o = i.limitPosition(t, e, i.contentStartPos.width, i.contentStartPos.height), o.width = i.contentStartPos.width, o.height = i.contentStartPos.height, n.fancybox.animate(i.$content, o, 330))
    }, u.prototype.endZooming = function () {
        var t, e, o, i, a = this, s = a.instance.current, r = a.newWidth, c = a.newHeight;
        a.contentLastPos && (t = a.contentLastPos.left, e = a.contentLastPos.top, i = {
            top: e,
            left: t,
            width: r,
            height: c,
            scaleX: 1,
            scaleY: 1
        }, n.fancybox.setTranslate(a.$content, i), r < a.canvasWidth && c < a.canvasHeight ? a.instance.scaleToFit(150) : r > s.width || c > s.height ? a.instance.scaleToActual(a.centerPointStartX, a.centerPointStartY, 150) : (o = a.limitPosition(t, e, r, c), n.fancybox.setTranslate(a.content, n.fancybox.getTranslate(a.$content)), n.fancybox.animate(a.$content, o, 150)))
    }, u.prototype.onTap = function (t) {
        var e, o = this, i = n(t.target), s = o.instance, r = s.current, c = t && a(t) || o.startPoints,
            l = c[0] ? c[0].x - o.$stage.offset().left : 0, u = c[0] ? c[0].y - o.$stage.offset().top : 0,
            d = function (e) {
                var i = r.opts[e];
                if (n.isFunction(i) && (i = i.apply(s, [r, t])), i) switch (i) {
                    case"close":
                        s.close(o.startEvent);
                        break;
                    case"toggleControls":
                        s.toggleControls(!0);
                        break;
                    case"next":
                        s.next();
                        break;
                    case"nextOrClose":
                        s.group.length > 1 ? s.next() : s.close(o.startEvent);
                        break;
                    case"zoom":
                        "image" == r.type && (r.isLoaded || r.$ghost) && (s.canPan() ? s.scaleToFit() : s.isScaledDown() ? s.scaleToActual(l, u) : s.group.length < 2 && s.close(o.startEvent))
                }
            };
        if ((!t.originalEvent || 2 != t.originalEvent.button) && (i.is("img") || !(l > i[0].clientWidth + i.offset().left))) {
            if (i.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) e = "Outside"; else if (i.is(".fancybox-slide")) e = "Slide"; else {
                if (!s.current.$content || !s.current.$content.find(i).addBack().filter(i).length) return;
                e = "Content"
            }
            if (o.tapped) {
                if (clearTimeout(o.tapped), o.tapped = null, Math.abs(l - o.tapX) > 50 || Math.abs(u - o.tapY) > 50) return this;
                d("dblclick" + e)
            } else o.tapX = l, o.tapY = u, r.opts["dblclick" + e] && r.opts["dblclick" + e] !== r.opts["click" + e] ? o.tapped = setTimeout(function () {
                o.tapped = null, d("click" + e)
            }, 500) : d("click" + e);
            return this
        }
    }, n(e).on("onActivate.fb", function (t, e) {
        e && !e.Guestures && (e.Guestures = new u(e))
    })
}(window, document, window.jQuery || jQuery), function (t, e) {
    "use strict";
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg viewBox="0 0 40 40"><path d="M13,12 L27,20 L13,27 Z" /><path d="M15,10 v19 M23,10 v19" /></svg></button>'},
        slideShow: {autoStart: !1, speed: 3e3}
    });
    var n = function (t) {
        this.instance = t, this.init()
    };
    e.extend(n.prototype, {
        timer: null, isActive: !1, $button: null, init: function () {
            var t = this;
            t.$button = t.instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function () {
                t.toggle()
            }), (t.instance.group.length < 2 || !t.instance.group[t.instance.currIndex].opts.slideShow) && t.$button.hide()
        }, set: function (t) {
            var e = this;
            e.instance && e.instance.current && (t === !0 || e.instance.current.opts.loop || e.instance.currIndex < e.instance.group.length - 1) ? e.timer = setTimeout(function () {
                e.isActive && e.instance.jumpTo((e.instance.currIndex + 1) % e.instance.group.length)
            }, e.instance.current.opts.slideShow.speed) : (e.stop(), e.instance.idleSecondsCounter = 0, e.instance.showControls())
        }, clear: function () {
            var t = this;
            clearTimeout(t.timer), t.timer = null
        }, start: function () {
            var t = this, e = t.instance.current;
            e && (t.isActive = !0, t.$button.attr("title", e.opts.i18n[e.opts.lang].PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"), t.set(!0))
        }, stop: function () {
            var t = this, e = t.instance.current;
            t.clear(), t.$button.attr("title", e.opts.i18n[e.opts.lang].PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"), t.isActive = !1
        }, toggle: function () {
            var t = this;
            t.isActive ? t.stop() : t.start()
        }
    }), e(t).on({
        "onInit.fb": function (t, e) {
            e && !e.SlideShow && (e.SlideShow = new n(e))
        }, "beforeShow.fb": function (t, e, n, o) {
            var i = e && e.SlideShow;
            o ? i && n.opts.slideShow.autoStart && i.start() : i && i.isActive && i.clear()
        }, "afterShow.fb": function (t, e, n) {
            var o = e && e.SlideShow;
            o && o.isActive && o.set()
        }, "afterKeydown.fb": function (n, o, i, a, s) {
            var r = o && o.SlideShow;
            !r || !i.opts.slideShow || 80 !== s && 32 !== s || e(t.activeElement).is("button,a,input") || (a.preventDefault(), r.toggle())
        }, "beforeClose.fb onDeactivate.fb": function (t, e) {
            var n = e && e.SlideShow;
            n && n.stop()
        }
    }), e(t).on("visibilitychange", function () {
        var n = e.fancybox.getInstance(), o = n && n.SlideShow;
        o && o.isActive && (t.hidden ? o.clear() : o.set())
    })
}(document, window.jQuery || jQuery), function (t, e) {
    "use strict";
    var n = function () {
        var e, n, o,
            i = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]],
            a = {};
        for (n = 0; n < i.length; n++) if (e = i[n], e && e[1] in t) {
            for (o = 0; o < e.length; o++) a[i[0][o]] = e[o];
            return a
        }
        return !1
    }();
    if (!n) return void(e && e.fancybox && (e.fancybox.defaults.btnTpl.fullScreen = !1));
    var o = {
        request: function (e) {
            e = e || t.documentElement, e[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)
        }, exit: function () {
            t[n.exitFullscreen]()
        }, toggle: function (e) {
            e = e || t.documentElement, this.isFullscreen() ? this.exit() : this.request(e)
        }, isFullscreen: function () {
            return Boolean(t[n.fullscreenElement])
        }, enabled: function () {
            return Boolean(t[n.fullscreenEnabled])
        }
    };
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fullscreen" title="{{FULL_SCREEN}}"><svg viewBox="0 0 40 40"><path d="M9,12 h22 v16 h-22 v-16 v16 h22 v-16 Z" /></svg></button>'},
        fullScreen: {autoStart: !1}
    }), e(t).on({
        "onInit.fb": function (t, e) {
            var n;
            e && e.group[e.currIndex].opts.fullScreen ? (n = e.$refs.container, n.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function (t) {
                t.stopPropagation(), t.preventDefault(), o.toggle(n[0])
            }), e.opts.fullScreen && e.opts.fullScreen.autoStart === !0 && o.request(n[0]), e.FullScreen = o) : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()
        }, "afterKeydown.fb": function (t, e, n, o, i) {
            e && e.FullScreen && 70 === i && (o.preventDefault(), e.FullScreen.toggle(e.$refs.container[0]))
        }, "beforeClose.fb": function (t) {
            t && t.FullScreen && o.exit()
        }
    }), e(t).on(n.fullscreenchange, function () {
        var t = o.isFullscreen(), n = e.fancybox.getInstance();
        n && (n.current && "image" === n.current.type && n.isAnimating && (n.current.$content.css("transition", "none"), n.isAnimating = !1, n.update(!0, !0, 0)), n.trigger("onFullscreenChange", t), n.$refs.container.toggleClass("fancybox-is-fullscreen", t))
    })
}(document, window.jQuery || jQuery), function (t, e) {
    "use strict";
    e.fancybox.defaults = e.extend(!0, {
        btnTpl: {thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg viewBox="0 0 120 120"><path d="M30,30 h14 v14 h-14 Z M50,30 h14 v14 h-14 Z M70,30 h14 v14 h-14 Z M30,50 h14 v14 h-14 Z M50,50 h14 v14 h-14 Z M70,50 h14 v14 h-14 Z M30,70 h14 v14 h-14 Z M50,70 h14 v14 h-14 Z M70,70 h14 v14 h-14 Z" /></svg></button>'},
        thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"}
    }, e.fancybox.defaults);
    var n = function (t) {
        this.init(t)
    };
    e.extend(n.prototype, {
        $button: null, $grid: null, $list: null, isVisible: !1, isActive: !1, init: function (t) {
            var e = this;
            e.instance = t, t.Thumbs = e;
            var n = t.group[0], o = t.group[1];
            e.opts = t.group[t.currIndex].opts.thumbs, e.$button = t.$refs.toolbar.find("[data-fancybox-thumbs]"), e.opts && n && o && ("image" == n.type || n.opts.thumb || n.opts.$thumb) && ("image" == o.type || o.opts.thumb || o.opts.$thumb) ? (e.$button.show().on("click", function () {
                e.toggle()
            }), e.isActive = !0) : e.$button.hide()
        }, create: function () {
            var t, n, o = this, i = o.instance, a = o.opts.parentEl;
            o.$grid = e('<div class="fancybox-thumbs fancybox-thumbs-' + o.opts.axis + '"></div>').appendTo(i.$refs.container.find(a).addBack().filter(a)), t = "<ul>", e.each(i.group, function (e, o) {
                n = o.opts.thumb || (o.opts.$thumb ? o.opts.$thumb.attr("src") : null), n || "image" !== o.type || (n = o.src), n && n.length && (t += '<li data-index="' + e + '"  tabindex="0" class="fancybox-thumbs-loading"><img data-src="' + n + '" /></li>')
            }), t += "</ul>", o.$list = e(t).appendTo(o.$grid).on("click", "li", function () {
                i.jumpTo(e(this).data("index"))
            }), o.$list.find("img").hide().one("load", function () {
                var t, n, o, i, a = e(this).parent().removeClass("fancybox-thumbs-loading"), s = a.outerWidth(),
                    r = a.outerHeight();
                t = this.naturalWidth || this.width, n = this.naturalHeight || this.height, o = t / s, i = n / r, o >= 1 && i >= 1 && (o > i ? (t /= i, n = r) : (t = s, n /= o)), e(this).css({
                    width: Math.floor(t),
                    height: Math.floor(n),
                    "margin-top": n > r ? Math.floor(.3 * r - .3 * n) : Math.floor(.5 * r - .5 * n),
                    "margin-left": Math.floor(.5 * s - .5 * t)
                }).show()
            }).each(function () {
                this.src = e(this).data("src")
            }), "x" === o.opts.axis && o.$list.width(parseInt(o.$grid.css("padding-right")) + i.group.length * o.$list.children().eq(0).outerWidth(!0) + "px")
        }, focus: function (t) {
            var e, n, o = this, i = o.$list;
            o.instance.current && (e = i.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + o.instance.current.index + '"]').addClass("fancybox-thumbs-active"), n = e.position(), "y" === o.opts.axis && (n.top < 0 || n.top > i.height() - e.outerHeight()) ? i.stop().animate({scrollTop: i.scrollTop() + n.top}, t) : "x" === o.opts.axis && (n.left < i.parent().scrollLeft() || n.left > i.parent().scrollLeft() + (i.parent().width() - e.outerWidth())) && i.parent().stop().animate({scrollLeft: n.left}, t))
        }, update: function () {
            this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible), this.isVisible ? (this.$grid || this.create(), this.instance.trigger("onThumbsShow"), this.focus(0)) : this.$grid && this.instance.trigger("onThumbsHide"), this.instance.update()
        }, hide: function () {
            this.isVisible = !1, this.update()
        }, show: function () {
            this.isVisible = !0, this.update()
        }, toggle: function () {
            this.isVisible = !this.isVisible, this.update()
        }
    }), e(t).on({
        "onInit.fb": function (t, e) {
            var o;
            e && !e.Thumbs && (o = new n(e), o.isActive && o.opts.autoStart === !0 && o.show())
        }, "beforeShow.fb": function (t, e, n, o) {
            var i = e && e.Thumbs;
            i && i.isVisible && i.focus(o ? 0 : 250)
        }, "afterKeydown.fb": function (t, e, n, o, i) {
            var a = e && e.Thumbs;
            a && a.isActive && 71 === i && (o.preventDefault(), a.toggle())
        }, "beforeClose.fb": function (t, e) {
            var n = e && e.Thumbs;
            n && n.isVisible && n.opts.hideOnClose !== !1 && n.$grid.hide()
        }
    })
}(document, window.jQuery), function (t, e) {
    "use strict";

    function n(t) {
        var e = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;"
        };
        return String(t).replace(/[&<>"'`=\/]/g, function (t) {
            return e[t]
        })
    }

    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg viewBox="0 0 40 40"><path d="M6,30 C8,18 19,16 23,16 L23,16 L23,10 L33,20 L23,29 L23,24 C19,24 8,27 6,30 Z"></svg></button>'},
        share: {tpl: '<div class="fancybox-share"><h1>{{SHARE}}</h1><p class="fancybox-share__links"><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" /></p></div>'}
    }), e(t).on("click", "[data-fancybox-share]", function () {
        var t, o, i = e.fancybox.getInstance();
        i && (t = i.current.opts.hash === !1 ? i.current.src : window.location, o = i.current.opts.share.tpl.replace(/\{\{media\}\}/g, "image" === i.current.type ? encodeURIComponent(i.current.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g, n(t)).replace(/\{\{descr\}\}/g, i.$caption ? encodeURIComponent(i.$caption.text()) : ""), e.fancybox.open({
            src: i.translate(i, o),
            type: "html",
            opts: {
                animationEffect: "fade", animationDuration: 250, afterLoad: function (t, e) {
                    e.$content.find(".fancybox-share__links a").click(function () {
                        return window.open(this.href, "Share", "width=550, height=450"), !1
                    })
                }
            }
        }))
    })
}(document, window.jQuery || jQuery), function (t, e, n) {
    "use strict";

    function o() {
        var t = e.location.hash.substr(1), n = t.split("-"),
            o = n.length > 1 && /^\+?\d+$/.test(n[n.length - 1]) ? parseInt(n.pop(-1), 10) || 1 : 1, i = n.join("-");
        return o < 1 && (o = 1), {hash: t, index: o, gallery: i}
    }

    function i(t) {
        var e;
        "" !== t.gallery && (e = n("[data-fancybox='" + n.escapeSelector(t.gallery) + "']").eq(t.index - 1), e.length || (e = n("#" + n.escapeSelector(t.gallery))), e.length && (s = !1, e.trigger("click")))
    }

    function a(t) {
        var e;
        return !!t && (e = t.current ? t.current.opts : t.opts, e.hash || (e.$orig ? e.$orig.data("fancybox") : ""))
    }

    n.escapeSelector || (n.escapeSelector = function (t) {
        var e = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, n = function (t, e) {
            return e ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
        };
        return (t + "").replace(e, n)
    });
    var s = !0, r = null, c = null;
    n(function () {
        n.fancybox.defaults.hash !== !1 && (n(t).on({
            "onInit.fb": function (t, e) {
                var n, i;
                e.group[e.currIndex].opts.hash !== !1 && (n = o(), i = a(e), i && n.gallery && i == n.gallery && (e.currIndex = n.index - 1))
            }, "beforeShow.fb": function (n, o, i) {
                var l;
                i && i.opts.hash !== !1 && (l = a(o), l && "" !== l && (e.location.hash.indexOf(l) < 0 && (o.opts.origHash = e.location.hash), r = l + (o.group.length > 1 ? "-" + (i.index + 1) : ""), "replaceState" in e.history ? (c && clearTimeout(c), c = setTimeout(function () {
                    e.history[s ? "pushState" : "replaceState"]({}, t.title, e.location.pathname + e.location.search + "#" + r), c = null, s = !1
                }, 300)) : e.location.hash = r))
            }, "beforeClose.fb": function (o, i, s) {
                var l, u;
                c && clearTimeout(c), s.opts.hash !== !1 && (l = a(i), u = i && i.opts.origHash ? i.opts.origHash : "", l && "" !== l && ("replaceState" in history ? e.history.replaceState({}, t.title, e.location.pathname + e.location.search + u) : (e.location.hash = u, n(e).scrollTop(i.scrollTop).scrollLeft(i.scrollLeft))), r = null)
            }
        }), n(e).on("hashchange.fb", function () {
            var t = o();
            n.fancybox.getInstance() ? !r || r === t.gallery + "-" + t.index || 1 === t.index && r == t.gallery || (r = null, n.fancybox.close()) : "" !== t.gallery && i(t)
        }), setTimeout(function () {
            n.fancybox.getInstance() || i(o())
        }, 50))
    })
}(document, window, window.jQuery || jQuery), function (t, e) {
    "use strict";
    var n = (new Date).getTime();
    e(t).on({
        "onInit.fb": function (t, e, o) {
            e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function (t) {
                var o = e.current, i = (new Date).getTime();
                e.group.length < 1 || o.opts.wheel === !1 || "auto" === o.opts.wheel && "image" !== o.type || (t.preventDefault(), t.stopPropagation(), o.$slide.hasClass("fancybox-animated") || (t = t.originalEvent || t, i - n < 250 || (n = i, e[(-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) < 0 ? "next" : "previous"]())))
            })
        }
    })
}(document, window.jQuery || jQuery);

/* ------------------------------------------------------------------
	Colorbox 1.6.4
--------------------------------------------------------------------- */

/*!
* Colorbox 1.6.4
* license: MIT
* http://www.jacklmoore.com/colorbox
*/
(function (t, e, i) {
    function n(i, n, o) {
        var r = e.createElement(i);
        return n && (r.id = Z + n), o && (r.style.cssText = o), t(r)
    }

    function o() {
        return i.innerHeight ? i.innerHeight : t(i).height()
    }

    function r(e, i) {
        i !== Object(i) && (i = {}), this.cache = {}, this.el = e, this.value = function (e) {
            var n;
            return void 0 === this.cache[e] && (n = t(this.el).attr("data-cbox-" + e), void 0 !== n ? this.cache[e] = n : void 0 !== i[e] ? this.cache[e] = i[e] : void 0 !== X[e] && (this.cache[e] = X[e])), this.cache[e]
        }, this.get = function (e) {
            var i = this.value(e);
            return t.isFunction(i) ? i.call(this.el, this) : i
        }
    }

    function h(t) {
        var e = W.length, i = (A + t) % e;
        return 0 > i ? e + i : i
    }

    function a(t, e) {
        return Math.round((/%/.test(t) ? ("x" === e ? E.width() : o()) / 100 : 1) * parseInt(t, 10))
    }

    function s(t, e) {
        return t.get("photo") || t.get("photoRegex").test(e)
    }

    function l(t, e) {
        return t.get("retinaUrl") && i.devicePixelRatio > 1 ? e.replace(t.get("photoRegex"), t.get("retinaSuffix")) : e
    }

    function d(t) {
        "contains" in x[0] && !x[0].contains(t.target) && t.target !== v[0] && (t.stopPropagation(), x.focus())
    }

    function c(t) {
        c.str !== t && (x.add(v).removeClass(c.str).addClass(t), c.str = t)
    }

    function g(e) {
        A = 0, e && e !== !1 && "nofollow" !== e ? (W = t("." + te).filter(function () {
            var i = t.data(this, Y), n = new r(this, i);
            return n.get("rel") === e
        }), A = W.index(_.el), -1 === A && (W = W.add(_.el), A = W.length - 1)) : W = t(_.el)
    }

    function u(i) {
        t(e).trigger(i), ae.triggerHandler(i)
    }

    function f(i) {
        var o;
        if (!G) {
            if (o = t(i).data(Y), _ = new r(i, o), g(_.get("rel")), !U) {
                U = $ = !0, c(_.get("className")), x.css({
                    visibility: "hidden",
                    display: "block",
                    opacity: ""
                }), I = n(se, "LoadedContent", "width:0; height:0; overflow:hidden; visibility:hidden"), b.css({
                    width: "",
                    height: ""
                }).append(I), j = T.height() + k.height() + b.outerHeight(!0) - b.height(), D = C.width() + H.width() + b.outerWidth(!0) - b.width(), N = I.outerHeight(!0), z = I.outerWidth(!0);
                var h = a(_.get("initialWidth"), "x"), s = a(_.get("initialHeight"), "y"), l = _.get("maxWidth"),
                    f = _.get("maxHeight");
                _.w = Math.max((l !== !1 ? Math.min(h, a(l, "x")) : h) - z - D, 0), _.h = Math.max((f !== !1 ? Math.min(s, a(f, "y")) : s) - N - j, 0), I.css({
                    width: "",
                    height: _.h
                }), J.position(), u(ee), _.get("onOpen"), O.add(F).hide(), x.focus(), _.get("trapFocus") && e.addEventListener && (e.addEventListener("focus", d, !0), ae.one(re, function () {
                    e.removeEventListener("focus", d, !0)
                })), _.get("returnFocus") && ae.one(re, function () {
                    t(_.el).focus()
                })
            }
            var p = parseFloat(_.get("opacity"));
            v.css({
                opacity: p === p ? p : "",
                cursor: _.get("overlayClose") ? "pointer" : "",
                visibility: "visible"
            }).show(), _.get("closeButton") ? B.html(_.get("close")).appendTo(b) : B.appendTo("<div/>"), w()
        }
    }

    function p() {
        x || (V = !1, E = t(i), x = n(se).attr({
            id: Y,
            "class": t.support.opacity === !1 ? Z + "IE" : "",
            role: "dialog",
            tabindex: "-1"
        }).hide(), v = n(se, "Overlay").hide(), L = t([n(se, "LoadingOverlay")[0], n(se, "LoadingGraphic")[0]]), y = n(se, "Wrapper"), b = n(se, "Content").append(F = n(se, "Title"), R = n(se, "Current"), P = t('<button type="button"/>').attr({id: Z + "Previous"}), K = t('<button type="button"/>').attr({id: Z + "Next"}), S = t('<button type="button"/>').attr({id: Z + "Slideshow"}), L), B = t('<button type="button"/>').attr({id: Z + "Close"}), y.append(n(se).append(n(se, "TopLeft"), T = n(se, "TopCenter"), n(se, "TopRight")), n(se, !1, "clear:left").append(C = n(se, "MiddleLeft"), b, H = n(se, "MiddleRight")), n(se, !1, "clear:left").append(n(se, "BottomLeft"), k = n(se, "BottomCenter"), n(se, "BottomRight"))).find("div div").css({"float": "left"}), M = n(se, !1, "position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"), O = K.add(P).add(R).add(S)), e.body && !x.parent().length && t(e.body).append(v, x.append(y, M))
    }

    function m() {
        function i(t) {
            t.which > 1 || t.shiftKey || t.altKey || t.metaKey || t.ctrlKey || (t.preventDefault(), f(this))
        }

        return x ? (V || (V = !0, K.click(function () {
            J.next()
        }), P.click(function () {
            J.prev()
        }), B.click(function () {
            J.close()
        }), v.click(function () {
            _.get("overlayClose") && J.close()
        }), t(e).bind("keydown." + Z, function (t) {
            var e = t.keyCode;
            U && _.get("escKey") && 27 === e && (t.preventDefault(), J.close()), U && _.get("arrowKey") && W[1] && !t.altKey && (37 === e ? (t.preventDefault(), P.click()) : 39 === e && (t.preventDefault(), K.click()))
        }), t.isFunction(t.fn.on) ? t(e).on("click." + Z, "." + te, i) : t("." + te).live("click." + Z, i)), !0) : !1
    }

    function w() {
        var e, o, r, h = J.prep, d = ++le;
        if ($ = !0, q = !1, u(he), u(ie), _.get("onLoad"), _.h = _.get("height") ? a(_.get("height"), "y") - N - j : _.get("innerHeight") && a(_.get("innerHeight"), "y"), _.w = _.get("width") ? a(_.get("width"), "x") - z - D : _.get("innerWidth") && a(_.get("innerWidth"), "x"), _.mw = _.w, _.mh = _.h, _.get("maxWidth") && (_.mw = a(_.get("maxWidth"), "x") - z - D, _.mw = _.w && _.w < _.mw ? _.w : _.mw), _.get("maxHeight") && (_.mh = a(_.get("maxHeight"), "y") - N - j, _.mh = _.h && _.h < _.mh ? _.h : _.mh), e = _.get("href"), Q = setTimeout(function () {
                L.show()
            }, 100), _.get("inline")) {
            var c = t(e).eq(0);
            r = t("<div>").hide().insertBefore(c), ae.one(he, function () {
                r.replaceWith(c)
            }), h(c)
        } else _.get("iframe") ? h(" ") : _.get("html") ? h(_.get("html")) : s(_, e) ? (e = l(_, e), q = _.get("createImg"), t(q).addClass(Z + "Photo").bind("error." + Z, function () {
            h(n(se, "Error").html(_.get("imgError")))
        }).one("load", function () {
            d === le && setTimeout(function () {
                var e;
                _.get("retinaImage") && i.devicePixelRatio > 1 && (q.height = q.height / i.devicePixelRatio, q.width = q.width / i.devicePixelRatio), _.get("scalePhotos") && (o = function () {
                    q.height -= q.height * e, q.width -= q.width * e
                }, _.mw && q.width > _.mw && (e = (q.width - _.mw) / q.width, o()), _.mh && q.height > _.mh && (e = (q.height - _.mh) / q.height, o())), _.h && (q.style.marginTop = Math.max(_.mh - q.height, 0) / 2 + "px"), W[1] && (_.get("loop") || W[A + 1]) && (q.style.cursor = "pointer", t(q).bind("click." + Z, function () {
                    J.next()
                })), q.style.width = q.width + "px", q.style.height = q.height + "px", h(q)
            }, 1)
        }), q.src = e) : e && M.load(e, _.get("data"), function (e, i) {
            d === le && h("error" === i ? n(se, "Error").html(_.get("xhrError")) : t(this).contents())
        })
    }

    var v, x, y, b, T, C, H, k, W, E, I, M, L, F, R, S, K, P, B, O, _, j, D, N, z, A, q, U, $, G, Q, J, V, X = {
            html: !1,
            photo: !1,
            iframe: !1,
            inline: !1,
            transition: "elastic",
            speed: 300,
            fadeOut: 300,
            width: !1,
            initialWidth: "600",
            innerWidth: !1,
            maxWidth: !1,
            height: !1,
            initialHeight: "450",
            innerHeight: !1,
            maxHeight: !1,
            scalePhotos: !0,
            scrolling: !0,
            opacity: .9,
            preloading: !0,
            className: !1,
            overlayClose: !0,
            escKey: !0,
            arrowKey: !0,
            top: !1,
            bottom: !1,
            left: !1,
            right: !1,
            fixed: !1,
            data: void 0,
            closeButton: !0,
            fastIframe: !0,
            open: !1,
            reposition: !0,
            loop: !0,
            slideshow: !1,
            slideshowAuto: !0,
            slideshowSpeed: 2500,
            slideshowStart: "start slideshow",
            slideshowStop: "stop slideshow",
            photoRegex: /\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,
            retinaImage: !1,
            retinaUrl: !1,
            retinaSuffix: "@2x.$1",
            current: "image {current} of {total}",
            previous: "previous",
            next: "next",
            close: "close",
            xhrError: "This content failed to load.",
            imgError: "This image failed to load.",
            returnFocus: !0,
            trapFocus: !0,
            onOpen: !1,
            onLoad: !1,
            onComplete: !1,
            onCleanup: !1,
            onClosed: !1,
            rel: function () {
                return this.rel
            },
            href: function () {
                return t(this).attr("href")
            },
            title: function () {
                return this.title
            },
            createImg: function () {
                var e = new Image, i = t(this).data("cbox-img-attrs");
                return "object" == typeof i && t.each(i, function (t, i) {
                    e[t] = i
                }), e
            },
            createIframe: function () {
                var i = e.createElement("iframe"), n = t(this).data("cbox-iframe-attrs");
                return "object" == typeof n && t.each(n, function (t, e) {
                    i[t] = e
                }), "frameBorder" in i && (i.frameBorder = 0), "allowTransparency" in i && (i.allowTransparency = "true"), i.name = (new Date).getTime(), i.allowFullscreen = !0, i
            }
        }, Y = "colorbox", Z = "cbox", te = Z + "Element", ee = Z + "_open", ie = Z + "_load", ne = Z + "_complete",
        oe = Z + "_cleanup", re = Z + "_closed", he = Z + "_purge", ae = t("<a/>"), se = "div", le = 0, de = {},
        ce = function () {
            function t() {
                clearTimeout(h)
            }

            function e() {
                (_.get("loop") || W[A + 1]) && (t(), h = setTimeout(J.next, _.get("slideshowSpeed")))
            }

            function i() {
                S.html(_.get("slideshowStop")).unbind(s).one(s, n), ae.bind(ne, e).bind(ie, t), x.removeClass(a + "off").addClass(a + "on")
            }

            function n() {
                t(), ae.unbind(ne, e).unbind(ie, t), S.html(_.get("slideshowStart")).unbind(s).one(s, function () {
                    J.next(), i()
                }), x.removeClass(a + "on").addClass(a + "off")
            }

            function o() {
                r = !1, S.hide(), t(), ae.unbind(ne, e).unbind(ie, t), x.removeClass(a + "off " + a + "on")
            }

            var r, h, a = Z + "Slideshow_", s = "click." + Z;
            return function () {
                r ? _.get("slideshow") || (ae.unbind(oe, o), o()) : _.get("slideshow") && W[1] && (r = !0, ae.one(oe, o), _.get("slideshowAuto") ? i() : n(), S.show())
            }
        }();
    t[Y] || (t(p), J = t.fn[Y] = t[Y] = function (e, i) {
        var n, o = this;
        return e = e || {}, t.isFunction(o) && (o = t("<a/>"), e.open = !0), o[0] ? (p(), m() && (i && (e.onComplete = i), o.each(function () {
            var i = t.data(this, Y) || {};
            t.data(this, Y, t.extend(i, e))
        }).addClass(te), n = new r(o[0], e), n.get("open") && f(o[0])), o) : o
    }, J.position = function (e, i) {
        function n() {
            T[0].style.width = k[0].style.width = b[0].style.width = parseInt(x[0].style.width, 10) - D + "px", b[0].style.height = C[0].style.height = H[0].style.height = parseInt(x[0].style.height, 10) - j + "px"
        }

        var r, h, s, l = 0, d = 0, c = x.offset();
        if (E.unbind("resize." + Z), x.css({
                top: -9e4,
                left: -9e4
            }), h = E.scrollTop(), s = E.scrollLeft(), _.get("fixed") ? (c.top -= h, c.left -= s, x.css({position: "fixed"})) : (l = h, d = s, x.css({position: "absolute"})), d += _.get("right") !== !1 ? Math.max(E.width() - _.w - z - D - a(_.get("right"), "x"), 0) : _.get("left") !== !1 ? a(_.get("left"), "x") : Math.round(Math.max(E.width() - _.w - z - D, 0) / 2), l += _.get("bottom") !== !1 ? Math.max(o() - _.h - N - j - a(_.get("bottom"), "y"), 0) : _.get("top") !== !1 ? a(_.get("top"), "y") : Math.round(Math.max(o() - _.h - N - j, 0) / 2), x.css({
                top: c.top,
                left: c.left,
                visibility: "visible"
            }), y[0].style.width = y[0].style.height = "9999px", r = {
                width: _.w + z + D,
                height: _.h + N + j,
                top: l,
                left: d
            }, e) {
            var g = 0;
            t.each(r, function (t) {
                return r[t] !== de[t] ? (g = e, void 0) : void 0
            }), e = g
        }
        de = r, e || x.css(r), x.dequeue().animate(r, {
            duration: e || 0, complete: function () {
                n(), $ = !1, y[0].style.width = _.w + z + D + "px", y[0].style.height = _.h + N + j + "px", _.get("reposition") && setTimeout(function () {
                    E.bind("resize." + Z, J.position)
                }, 1), t.isFunction(i) && i()
            }, step: n
        })
    }, J.resize = function (t) {
        var e;
        U && (t = t || {}, t.width && (_.w = a(t.width, "x") - z - D), t.innerWidth && (_.w = a(t.innerWidth, "x")), I.css({width: _.w}), t.height && (_.h = a(t.height, "y") - N - j), t.innerHeight && (_.h = a(t.innerHeight, "y")), t.innerHeight || t.height || (e = I.scrollTop(), I.css({height: "auto"}), _.h = I.height()), I.css({height: _.h}), e && I.scrollTop(e), J.position("none" === _.get("transition") ? 0 : _.get("speed")))
    }, J.prep = function (i) {
        function o() {
            return _.w = _.w || I.width(), _.w = _.mw && _.mw < _.w ? _.mw : _.w, _.w
        }

        function a() {
            return _.h = _.h || I.height(), _.h = _.mh && _.mh < _.h ? _.mh : _.h, _.h
        }

        if (U) {
            var d, g = "none" === _.get("transition") ? 0 : _.get("speed");
            I.remove(), I = n(se, "LoadedContent").append(i), I.hide().appendTo(M.show()).css({
                width: o(),
                overflow: _.get("scrolling") ? "auto" : "hidden"
            }).css({height: a()}).prependTo(b), M.hide(), t(q).css({"float": "none"}), c(_.get("className")), d = function () {
                function i() {
                    t.support.opacity === !1 && x[0].style.removeAttribute("filter")
                }

                var n, o, a = W.length;
                U && (o = function () {
                    clearTimeout(Q), L.hide(), u(ne), _.get("onComplete")
                }, F.html(_.get("title")).show(), I.show(), a > 1 ? ("string" == typeof _.get("current") && R.html(_.get("current").replace("{current}", A + 1).replace("{total}", a)).show(), K[_.get("loop") || a - 1 > A ? "show" : "hide"]().html(_.get("next")), P[_.get("loop") || A ? "show" : "hide"]().html(_.get("previous")), ce(), _.get("preloading") && t.each([h(-1), h(1)], function () {
                    var i, n = W[this], o = new r(n, t.data(n, Y)), h = o.get("href");
                    h && s(o, h) && (h = l(o, h), i = e.createElement("img"), i.src = h)
                })) : O.hide(), _.get("iframe") ? (n = _.get("createIframe"), _.get("scrolling") || (n.scrolling = "no"), t(n).attr({
                    src: _.get("href"),
                    "class": Z + "Iframe"
                }).one("load", o).appendTo(I), ae.one(he, function () {
                    n.src = "//about:blank"
                }), _.get("fastIframe") && t(n).trigger("load")) : o(), "fade" === _.get("transition") ? x.fadeTo(g, 1, i) : i())
            }, "fade" === _.get("transition") ? x.fadeTo(g, 0, function () {
                J.position(0, d)
            }) : J.position(g, d)
        }
    }, J.next = function () {
        !$ && W[1] && (_.get("loop") || W[A + 1]) && (A = h(1), f(W[A]))
    }, J.prev = function () {
        !$ && W[1] && (_.get("loop") || A) && (A = h(-1), f(W[A]))
    }, J.close = function () {
        U && !G && (G = !0, U = !1, u(oe), _.get("onCleanup"), E.unbind("." + Z), v.fadeTo(_.get("fadeOut") || 0, 0), x.stop().fadeTo(_.get("fadeOut") || 0, 0, function () {
            x.hide(), v.hide(), u(he), I.remove(), setTimeout(function () {
                G = !1, u(re), _.get("onClosed")
            }, 1)
        }))
    }, J.remove = function () {
        x && (x.stop(), t[Y].close(), x.stop(!1, !0).remove(), v.remove(), G = !1, x = null, t("." + te).removeData(Y).removeClass(te), t(e).unbind("click." + Z).unbind("keydown." + Z))
    }, J.element = function () {
        return t(_.el)
    }, J.settings = X)
})(jQuery, document, window);


