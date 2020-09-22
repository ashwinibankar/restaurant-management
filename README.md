# Design doc_

### Idea: Admin and employee portal for a restaurant owner to keep track of business and customers.

# Tech stack:

## Database
**Entities**: Employees, Customers, Menu, Order, footfall,  Expenditure, Profit, salary, Visitor_table

## **Attributes**

---

| Employee   | 
|----------|
| Id |  
| Name |  
| Dob | 
| email_id | 
| contact | 
| Address | 
| Joining_date | 
| Salary | 
| Increament_date|
----

| Customer   | 
|----------|
| Id |  
| Name |  
| Dob | 
| email_id | 
| contact | 
| Address | 

----

| Raw_material_purchase | 
|----------|
| Id |  
| timestamp | 
| Items |  ex: (0.5)broccoli, (1)panner, (0.25)milk    
| Cost | 

---

| Raw_material_info | 
|----------|
| Id |  
| Item_name |   
| Price | 
| Unit | 
| Margin |

----

| Menu | 
|----------|
| Id |  
| Dish_name |  
| Image | 
| Ingrediends |  ex: (0.5)broccoli, (1)panner, (0.25)milk 
| Price | 
| Margin | <!-- (fix margin but price can update daily, so total is addition of both) -->

 ---

| Transaction | 
|----------|
| Id |  
| timestamp |   
| table_no | 
| Customer_id | 
| Dishes | ex: (4)lassi, (1)palak_paneer
| Total_bill|
| Total_margin|
| Payment_method|
 


 ## API
 ### every morning (CRONJOB)
 (for updating menu)  
 Palak paneer --> Palak-paneer row --> Process-ingrdiants() --> Update the final price in price

### (for transaction table)
 Employee inputs order --> API process this order --> give total amount back to employee portal --> converts ordered dishes and quantity to string --> update the transaction table (dishes).

 
### (Raw_material_purchase table)
The employee buys supplies in the morning and update the expenditure in the employee portal:  
* Search name of product --> then add the quantity purchased.
* Finish after updating --> the entry is stored as a enpenditure. 

### (Total profit)
Admin portal --> daily profit or monthly or till date of month,
query the transaction table.


