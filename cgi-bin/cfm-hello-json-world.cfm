<cfscript>
    data = {
        "title": "Hello, ColdFusion!",
        "heading": "hello, ColdFusion!",
        "message": "This page was generated with the ColdFusion programming language"
    };

    cfheader(name="Content-Type", value="application/json");
    cfheader(name="Cache-Control", value="no-cache");
    writeOutput(serializeJSON(data));
</cfscript>
