# Global Product Management (GPM) API - Documentation

 This is the README file for the OpenAPI specification of the GPM API. This specification is in the YAML format.
 The project allows users to run the specification on the Visual Studio server in order to expose a documentation page powered by [ReDoc](https://github.com/Redocly/redoc).
 
 The exposed specification on a user friendly web page enables any User to fully comprehend the GPM API - security scheme, thorough functional description per endpoint/request and code samples in several languages.
 
 ## Installation
 Clone this repository to your local machine. Open Visual Studio Code, open the Visual Studio Code command palette (CTRL + P) and execute the following command in the search box:
 ```console
ext install ritwickdey.LiveServer
```

 ## Usage
Open the project on Visual Studio and right-click on the index.html file. Select "Open with Live Server". 
and it should also automatically open a tab on your browser which address is 127.0.0.1:5500/index.html
If your browser doesn't open automatically, you can manually go to either one of the following:
 ```console
127.0.0.1:5500 
```
 ```console
http://localhost:5500/
```

 ## API specification
 The API specification is provided in YAML format (some information in HTML or CSS in order to improve UX) and can be found in the **JS-SC-GPM-OPENAPI.yaml** file. 
 
 It describes the endpoints, request/response payloads, and authentication mechanisms, if applicable. 
 
 The specification adheres to the [OpenAPI Specification (OAS) standard](https://swagger.io/specification/), allowing easy integration with various tools and frameworks.

 The code snippets included on the specification were generated on Kong's open-source, cross-platform API client [Insonmia](https://github.com/Kong/insomnia).
