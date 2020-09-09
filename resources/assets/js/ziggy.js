    var Ziggy = {
        namedRoutes: {"users.index":{"uri":"api\/users","methods":["GET","HEAD"],"domain":null},"pages.index":{"uri":"api\/pages","methods":["GET","HEAD"],"domain":null},"pages.show":{"uri":"api\/pages\/{page}","methods":["GET","HEAD"],"domain":null},"pages.update":{"uri":"api\/pages\/{page}","methods":["PUT","PATCH"],"domain":null},"contents.index":{"uri":"api\/contents","methods":["GET","HEAD"],"domain":null},"contents.show":{"uri":"api\/contents\/{content}","methods":["GET","HEAD"],"domain":null},"contents.update":{"uri":"api\/contents\/{content}","methods":["PUT","PATCH"],"domain":null},"companies.show":{"uri":"api\/companies\/{company}","methods":["GET","HEAD"],"domain":null},"companies.update":{"uri":"api\/companies\/{company}","methods":["PUT","PATCH"],"domain":null},"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"password\/reset","methods":["POST"],"domain":null},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"],"domain":null},"home":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"contact-us":{"uri":"contact-us","methods":["GET","HEAD"],"domain":null},"admin":{"uri":"admin","methods":["GET","HEAD"],"domain":null},"admin.pages.index":{"uri":"admin\/pages","methods":["GET","HEAD"],"domain":null},"admin.contents.index":{"uri":"admin\/contents","methods":["GET","HEAD"],"domain":null},"admin.pages.show":{"uri":"admin\/page\/{page}","methods":["GET","HEAD"],"domain":null},"admin.contents.show":{"uri":"admin\/content\/{content}","methods":["GET","HEAD"],"domain":null},"admin.email-config":{"uri":"admin\/email-config","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://localhost/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
