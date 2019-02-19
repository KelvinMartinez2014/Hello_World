### Kelvin Martinez
### Jonathan R. Roman Velez
### 18 de febrero de 2019 
### Prof. Alcibiades Bustillo
### Comp 4018-020

## Análisis

### 1. Entities:
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
  
### 2.	Attributes:

#### a. User:
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

#### b. Vendedor:
* Vendor ID (PK)
* User ID (FK)
* Student ID
* Student Program
* Valid truth
* Rating
* Validated
* Blocked

#### c. Product:
* Product ID (PK)
* Category
* Quantity

#### d.	Item:
* 	Item ID (PK)
* 	Product ID (FK)
* 	Vendor ID (FK)
* 	Price
* 	Condition
* 	escription
* 	Photos (Multivariable)
* 	Item Status

#### e.	Book Item:
* Item ID (FK) 
* Title
* Class Subject
* Author (Multivariable)
* Volume
* Edition
* Year of Publication

#### f.	Clothing Item:
* Item ID (FK)
* Size
* Color

#### g.	Electronic Item:
* Item ID (FK)
* Brand
* Year of Make
* Detail Description

#### h.	Lab Material Item:
* Item ID (FK)
* Class Subject
* Detail Description

#### i.	Class Material Item:
* Item ID (FK)
* Detail Description

#### j.	Service Item:
* Item ID (FK)
* Detail Description

#### k.	Other Item:
* Item ID (FK)
* Detail Description

#### l.	Transaction:
* Transaction ID (PK)
* Item ID (FK)
* Vendor ID (FK)
* User ID (FK)
* Add to Cart Date
* Purchased Date
* Shipping Date
* Payment Date
* Cancellation Date
* Cancellation Reason
* Transaction Fee Payed
* Transaction Fee Payed Date
* Transaction Status

#### m.	Vendor Debt:
* Vendor ID (FK)
* Oldest Transaction Unpaid
* Accum Debt


### 3.	Relaciones:
* Item can be a Book Item, Clothing Item, Electronic Item, Lab Material Item, Class Material Item, Service Item and Other Item.
*	User can be a Vendor
*	Product classify Item
*	Vendor owns Vendor Debt
*	User begins Transaction
*	Vendor completes Transaction
*	Item is offered in Transaction
*	Vendor offers Item

### 4.	Restricciones:
* An Item can only be one  Book Item, Clothing Item, Electronic Item, Lab Material Item, Class Material Item, Service Item or Other Item.
* Many Items can be classified under one type of product. However, under one product there can be many different types of items. 
* One Vender has only one vendor Debt. Similarly, one Vendor Debt is owned by a Vendor.
* One User can be Vender. Similarly, a Vender can be an User.
* One User can begin many Transactions. However, one Transaction is comenzed by the specific User. 
* One Vendor can complete many Transactions. However, one Transaction is completed by the specific Vendor.   
* One Item is offered in can be sold in many transaction. However, one Transaction offers a specific Item.
* One Vendor can offer many item for sale. However, one Item can be offered by one Vendor.

## ER Diagram
