INSERT INTO phoneBanking
(FirstName, LastName, Address, County, Phone, Status)
SELECT FirstName, LastName, PrimaryAddress1, CountyName, PrimaryPhone, "" AS Status
FROM voterRNC
WHERE HasPrimaryPhone = "True"
GROUP BY PrimaryPhone;

