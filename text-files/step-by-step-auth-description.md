This section describes the necessary steps for a Seller to register a new application to integrate with Jumia's Global Product Management (GPM) API, in order to process his orders programmatically.
</br>
<h2>Clickflow</h2>
The first step to integrate with GPM API is to register a new application on Vendor Center Web Page.
<ol style="margin-left: 18px;">
<li>Go to <a href="https://vendorcenter-staging.jumia.com/">Vendor Center.</a></li>
<li>Click on "Settings" button.</li>
<li>Access the "Manage Applications" menu by clicking on "Applications". </li>
<li>On the new page, click in "Create Application" button.</li>
<li>After clicking on "Create Application" button, a new menu in will show in which you can select the type of authorization to be used in the integration:</li>
<center><img src="/images/apiDoc1.png" width="500" height="300" alt="" /></center>
</ol>
</br>
<h2>Identifying which type of authentication to be used </h2>
Currently, Vendor Center provides two different types of authentication, both based in OAuth2:
</br>
<ul style="margin-left: 18px;">
<li><b>OAuth2 Authorization Code Flow</b> (Integration requiring User interaction)</li>
<ul>
<li>This is the preferred kind of flow if the Application used to integrate with GPM API does have a Graphical UI, which means being able to redirect to GPM Authorization Server Login prompt.</li>
</ul>
</br>
<li><b>Self Authorization</b>  (Integration without User interaction)</li>
<ul>
<li>This is the preferred kind of flow if the Application used to integrate with GPM API does not have a Graphical UI.</li>
<li><b>Example:</b> Machine-to-machine integration without the User authentication with Login prompt</li>
</ul>
</ul>
<h4>OAuth2 Authorization Code Flow (Integration requiring User interaction)</h4>
On this type of authentication you will need to provide a redirect URI, to which our authorization server will send the authorization code, after the login prompt.

Also, you will need to define a name to identify your Application.

After submit, you will receive the following attributes:

<center><img src="/images/apiDoc2.png" width="400" height="300" alt="" /></center>

At this point, the new Application is created and the <b>Credentials to be used</b> in the integrating application are displayed <b>(see picture above)</b>.
</br>
<ol style="margin-left: 18px;">
<li>The name of the Application that Seller filled before.</li>
<li>A generated Client Id.</li>
<li>A generated Client Secret. A sensible data that Seller needs to save in their side and to be used on its Backend to get Access Token.
<span style="font-size:14px; color:#F49719; font-weight:bold">Important:</span> When you close the popup with the Application Details, <b>you won't be able to get the Client Secret anymore.</b> Save it in a safe place before you close the popup!).</li>
<li>The Callback RedirectURI that Seller filled before.</li>
</ol>
</br>
<h4>Self Authorization (Integration without User interaction)</h4>
On this type of authentication you just need to define a name of the Application, just to identify it.
</br>
<h2>View the existent Applications</h2>
In this page you can check your currently active applications, and manage them. 

<center><img src="/images/apiDoc3.png"  width="1000" height="350" alt="" /></center>

</br>
<h2>How to authenticate</h2>
In order to authenticate you need to generate an Access Token to be used in the sub subsequent requests to GPM API.

Depending on the Application Type that you will use, you should follow the steps below.

<h4>Obtain Access Token for a Self Authorization Application</h4>
In this flow you will start by requesting a new Refresh Token on Vendor Center UI (which is a Long-Term expiration token).

After that, you should save this Refresh token in your API Consumer implementation and use it to obtain the Access token.

The Access Token is a Short-Term expiration token (12 hours) and it is the one that authenticates your Application on GPM API allowing you to do successful requests.
</br>
<ol style="margin-left: 18px;">
<li>Go to the Vendor Center UI and request the Refresh Token in your Application Management screen.</li>
<li>Then click in the Generate Token Icon (Located on the <b>Actions</b> Column) to obtain a new refresh token. See the screen below.</li>
<li>Copy the Refresh token and Save it in your Consumer Implementation to exchange to a Access Token after.</li>
<li>At this point you are ready to generate the Access Token through this <a href="/#tag/Endpoints/operation/post-token">endpoint.</a></li>
</ol>
<center><img src="/images/apiDoc4.png" width="400" height="300" alt="" /></center>

<p class="noteBoxes type2"><img src="images/lightbulb.png" class="picture1"><b>Manage Refresh Token in a Self Authorization Flow - Best Practices</b></br>
</br>As aforementioned the Refresh Token is a Long-term with the default <b>1 year</b> expiration time.
</br></br>However, in order to avoid request an Access Token with an expired Refresh Token (After this period of 1 year) we consider as a good practice to save the new Refresh Token that is also returned with the Access Token response.
</br></br>Please, take a look in this <a href="/#tag/Endpoints/operation/post-token">endpoint.</a> response details. There you will receive a new Refresh Token along with the requested Access Token.</p>







<h4>Obtain Access Token for a Web Application</h4>
In this flow you will start by being redirected to our Authorization Server Login Prompt Web Page. This is executed via this <a href="/#tag/Endpoints/operation/get-login">endpoint.</a>
<center><img src="/images/apiDoc5.png" width="600" height="400" alt="" /></center>

Additionally, for the first time that a user is executing this flow our Authorization Server will prompt a Consent Page as shown below.
<center><img src="/images/apiDoc6.png" width="600" height="400" alt="" /></center>

After a successful Login and a Consent confirmation, our Authorization Server will send a callback request to your Request URI (Previously defined in your Application).

At this point you will receive a one time valid Authorization Code that should be used to get the Access Token.

The Access Token is a Short-Term expiration token (12 hours) and it is the one that authenticate your Application on GPM API allowing you to do successful requests.
</br>
<ol style="margin-left: 18px;">
<li>Your Application redirects to our Authorization Server. Please check in this endpoint the necessary <a href="/#tag/Endpoints/operation/get-login">log in query parameters.</a></li>
<li>Our Authorization Server will send a callback request to your Request URI with the generated Authorization Code.</li>
<li>Copy the Refresh token and Save it in your Consumer Implementation to exchange to a Access Token after.</li>
<li>At this point you are ready to generate the Access Token through this <a href="/#tag/Endpoints/operation/post-token">endpoint.</a></li>
</ol>
</br>
</br>

> ***_NOTE:_*** When the access_token expires, you can  refresh it using this <a href="/#tag/Endpoints/operation/post-token">endpoint.</a>

</br>
<link href="style.css" rel="stylesheet" type="text/css"/>
<p class="noteBoxes type1"><img src="images/exclamation-triangle-solid.png" class="picture">Please be aware that whenever you perform the authentication process for a different user in the same browser, the previous session will automatically end up being replaced by the new one. The previous <b>access_token</b> and <b>refresh_token</b> will not be valid anymore.</p>


<h2>Final Note</h2>
Authenticate your API calls by including the bearer token (access token generated above) in the header of each request. 
These tokens are in the form of JWT (JSON Web Tokens).

**Security Scheme Type:** HTTP

**HTTP Authorization Scheme:** bearer

**Bearer format:** "JWT"

API requests made without authentication will fail with the status code 401: Unauthorized.