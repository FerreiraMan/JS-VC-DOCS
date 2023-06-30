# Document Version Control
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:0px solid black;
  border-collapse: collapse;
  padding: 10px
}
</style>
<body>
<table style="width:100%;">
  <tr style="background-color: #f7f4f4">
    <th style="text-align: center; padding: 10px">Version</th>
    <th>Released at:</th>
    <th>Changes</th>
  </tr>
  <tr>
    <td style="text-align: center;">Version 0.1</td>
    <td style="text-align: center;">2021-11-02</td>
    <td>Original document</td>
  </tr>
  <tr>
    <td style="text-align: center;">Version 0.2</td>
    <td style="text-align: center;">2021-11-26</td>
    <td> New APIs added:      
      <ul style="margin-left: 18px;">
          <li>GET Shops</li>
          <li>GET Brands</li>
          <li>GET Categories</li>
          <li>GET Attributes (per attribute set)</li>
          <li>GET Products</li>
          <li>POST Price update</li>
          <li>POST Status update</li>
          <li>GET Feed detail</li>
          <li>POST Create Products</li>
          <li>POST Update Products</li>
        </ul> 
    </td>  
  </tr>
    <tr>
    <td style="text-align: center;">Version 1</td>
    <td style="text-align: center;">2022-01-04</td>
    <td>   
      <ul style="margin-left: 18px;">
          <li>Create consignment request</li>
          <li>Update consignment request</li>
        </ul> 
    </td>  
  </tr>
    <tr>
    <td style="text-align: center;">Version 1.1</td>
    <td style="text-align: center;">2022-04-12</td>
    <td> New API added:      
      <ul style="margin-left: 18px;">
          <li>GET Stock</li>
        </ul> 
    </td>  
    </tr>
  </tr>
    <tr>
    <td style="text-align: center;">Version 1.2</td>
    <td style="text-align: center;">2022-05-11</td>
    <td>New query parameter on get products</td>
  </tr>
    </tr>
    <tr>
    <td style="text-align: center;">Version 1.3</td>
    <td style="text-align: center;">2022-08-29</td>
    <td> New APIs added:      
      <ul style="margin-left: 18px;">
          <li>GET Shops of MasterShop</li>
        </ul> 
    </td>
  </tr>
</table>
</body>
</html>

# Introduction
Vendor Center is Jumia's new portal that will allow Jumia's sellers to manage all their shops in one stop, with one unique login.

GPM API was designed to allow sellers that manage their operations using ERPs / APIs to integrate with Vendor Center via API to manage their catalog on an end to end:
  - Create new products;
  - Update the content of their products;
  - Manage stock, price and status of their products;

For example, a typical call sequence of product creation includes:
  
  1.  Get Shops, Get Brands, Get Categories, Get Attributes - preparation of available basic data
  2.  Products Create Feed - returns the feed id
  3.  Feed Details - use the feed id to check if the feed is completed
  4.  Get Products - use the seller sku to check the product sid and the QC status

> ***_NOTE:_***   If you find that some of your shops are not assigned to your mastershop in Vendor Center, please contact your account manager.

<div style="border-radius: 10px; background:  #f7f4f4; font-size: 12px; padding: 8px; border: 1px solid lightgray; margin: 25px;">
&#9432; <b>Glossary</b>
<p style="margin-left: 18px; margin-top: 2px"> 
  - Concept of <b><i>Feed</i></b>:
</p>
<p style="margin-left: 18px;"> 
  <b><i>Feed</i></b> is an aggregation of work which is parsed and processed individually, being it:
</p>
  <ul style="margin-left: 18px;">
    <li>A set of products which will be created asynchronously;</li>
    <li>A set of price/stock/status updates which will be processed asynchronously;</li>
  </ul>
<p style="margin-left: 18px; margin-top: 2px"> 
    - Concept of <b><i>mastershop</i></b>:
</p>
<p style="margin-left: 18px;"> 
  <b><i>mastershop</i></b> is the grouping of all your shops into one account. This grouping is done in 2 stages:
</p>
  <ol style="margin-left: 18px;">
    <li>Group all your shops created with the same email address across different countries - Global Shops;</li>
    <li>Group all Global Shops that belong to the same Main Account</li>
  </ol>  
</div>