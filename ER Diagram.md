### Kelvin Martinez
### Jonathan R. Roman Velez
### 18 de febrero de 2019 
### Prof. Alcibiades Bustillo
### Comp 4018-020
###
### Análisis

1. Entities:
  * User
  * Vendor
  * Product
  *	Item
  *	Book Item
  *	Clothing Item
  * Electronic Item
  * Lab Material Item
  * Class Material Item
  *	Service Item
  *	Other Item
  * Transaction
  *	Vendor Debt
  
2.	Attributes:
a. User:
 * User ID (PK)
 * Username
 *	Email
 *	Password
 *	First Name
 *	Last Name
 *	Telephone
 *	 Address
 *	City
 *	State
 * Zip Code
 *	User Type
 *	Validated
b. Vendedor:
### i.	Vendor ID
### ii.	User ID
### iii.	Student ID
### iv.	Student Program
### v.	Valid truth
### vi.	Rating
### vii.	Validated
### viii.	Blocked
### c.	Product
### i.	Product ID
### ii.	Category
### iii.	Quantity
### d.	Item
### i.	Item ID
### ii.	Product ID
### iii.	Vendor ID
### iv.	Price
### v.	Condition
### vi.	Description
### vii.	Photos (Multivariable)
### viii.	Item Status
### e.	Book Item
### i. Item ID 
### ii.	Title
### iii.	Class Subject
### iv.	Author (Multivariable)
### v.	Volume
### vi.	Edition
### vii.	Year of Publication
### f.	Clothing Item
### i.	Item ID
### ii.	Size
### iii.	Color
### g.	Electronic Item
### i.	Item ID
### ii.	Brand
### iii.	Year of Make
### iv.	Detail Description
### h.	Lab Material Item
### i.	Item ID
### ii.	Class Subject
### iii.	Detail Description
### i.	Class Material Item
### i.	Item ID
### ii.	Detail Description
### j.	Service Item
### i.	Item ID
### ii.	Detail Description
### k.	Other Item
### i.	Item ID
### ii.	Detail Description
### l.	Transaction
### i.	Transaction ID
### ii.	Item ID
### iii.	Vendor ID
### iv.	User ID
### v.	Add to Cart Date
### vi.	Purchased Date
### vii.	Shipping Date
### viii.	Payment Date
### ix.	Cancellation Date
### x.	Cancellation Reason
### xi.	Transaction Fee Payed
### xii.	Transaction Fee Payed Date
### xiii.	Transaction Status
### m.	Vendor Debt
### i.	Vendor ID
### ii.	Oldest Transaction Unpaid
### iii.	Accum Debt

###

3.	Relaciones:
* Item can be a Book Item, Clothing Item, Electronic Item, Lab Material Item, Class Material Item, Service Item and Other Item.
*	User can be a Vendor
*	Product classify Item
*	Vendor owns Vendor Debt
*	User begins Transaction
*	Vendor completes Transaction
*	Item is offered in Transaction
*	Vendor offers Item

4.	Restricciones:
* An Item can only be one  Book Item, Clothing Item, Electronic Item, Lab Material Item, Class Material Item, Service Item or Other Item.
* Many Items can be classified under one type of product. However, under one product there can be many different types of items. 
* One Vender has only one vendor Debt. Similarly, one Vendor Debt is owned by a Vendor.
* One User can be Vender. Similarly, a Vender can be an User.
* One User can begin many Transactions. However, one Transaction is comenzed by the specific User. 
* One Vendor can complete many Transactions. However, one Transaction is completed by the specific Vendor.   
* One Item is offered in can be sold in many transaction. However, one Transaction offers a specific Item.
* One Vendor can offer many item for sale. However, one Item can be offered by one Vendor.

### ER Diagram
