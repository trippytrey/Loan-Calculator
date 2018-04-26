# Loan-Calculator
Simple HTML/PHP project that determines if the user has enough money to take out a specific loan amount.

When ran correctly, the webiste asks the user what their current balance is and how much of a loan they would like to take out.

If the users balance is larger than the loan amount plus interest (20%) then the loan is accepted and it will tell the user how much they will owe at the end of the month.

If the users balance is smaller than the loan amount after interest then the user will be redirected to the overdraw.php file which tells them they were not approved for the loan based on their prior information.  They are then told to enter another loan amount.

This detecs and handles errors by using redirection.
