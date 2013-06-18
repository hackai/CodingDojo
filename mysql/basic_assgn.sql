/*1*/
SELECT * FROM CountryLanguage 
JOIN Country ON CountryLanguage.CountryCode=Country.Code
WHERE Language ='Slovene';

/*2*/
SELECT COUNT(city.countrycode) AS 'number of cities', country.name AS 'country name' 
FROM country
JOIN city 
ON country.Code = city.CountryCode
GROUP BY country.name
ORDER BY COUNT(city.name) DESC;

/*3*/
SELECT city.name AS 'city name', city.population 
FROM city
JOIN country
ON country.code = city.countrycode
WHERE city.population > 500000 and country.name = 'Mexico'
ORDER BY city.population DESC;

/*4*/
SELECT countrylanguage.language, countrylanguage.percentage 
FROM countrylanguage
WHERE countrylanguage.percentage > 89
ORDER BY countrylanguage.percentage DESC; 

/*5*/
SELECT country.name, country.surfacearea, country.population 
FROM country
WHERE country.surfacearea < 501
AND country.population > 100000;

/*6*/
SELECT country.name, country.governmentform, country.capital, country.lifeexpectancy 
FROM country
WHERE country.government='Constitutional Monarchy' 
AND country.capital >200 
AND country.lifeexpectancy >75;

/*7*/
SELECT country.name AS 'country name', city.name AS 'city name', city.district, city.population 
FROM city
LEFT JOIN country ON city.countrycode=country.code
WHERE country.code='ARG'
AND city.district='Buenos Aires'
AND city.population >500000;

/*8*/
SELECT country.region AS 'region', count(country.code) AS 'country count' 
FROM country
GROUP BY country.region
ORDER BY 'country count' DESC;
