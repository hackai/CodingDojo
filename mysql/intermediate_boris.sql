/*1*/
SELECT city.city_id, city.city, customer.first_name, customer.last_name, customer.email, CONCAT(address.address, address.address2)
AS address
FROM city
LEFT JOIN address ON city.city_id = address.city_id
LEFT JOIN customer ON customer.address_id = address.address_id
WHERE city.city_id=312;

/*2*/
SELECT film.title, film.description, film.release_year, film.rating, film.special_features, category.name as genre
FROM category
LEFT JOIN film_category ON category.category_id = film_category.category_id
LEFT JOIN film ON film_category.film_id = film.film_id
WHERE category.name = 'Comedy';

/*3*/
SELECT actor.actor_id, CONCAT(actor.first_name, " ", actor.last_name) AS actor_name, film.film_id, film.title, 
film.description, film.release_year
FROM actor
LEFT JOIN film_actor ON actor.actor_id = film_actor.actor_id
LEFT JOIN film ON film.film_id = film_actor.film_id
WHERE actor.actor_id = 5;

/*4*/
SELECT customer.first_name, customer.last_name, customer.email, CONCAT(address.address, address.address2)AS address
FROM city
LEFT JOIN address ON city.city_id = address.city_id
LEFT JOIN customer ON customer.address_id = address.address_id
LEFT JOIN store ON customer.store_id = store.store_id
WHERE customer.store_id=1
AND city.city_id IN (1, 42, 312, 459);

/*5*/
SELECT film.title, film.description, film.release_year, film.rating, film.special_features
FROM film
JOIN film_actor ON film_actor.film_id = film.film_id
WHERE film.rating = "G" AND film.special_features LIKE "%Behind the scenes%" AND actor_id = 15;

/*6*/
SELECT film.film_id, film.title, actor.actor_id, actor.first_name, actor.last_name
FROM film
JOIN film_actor ON film.film_id = film_actor.film_id
JOIN actor ON actor.actor_id = film_actor.actor_id
WHERE film.film_id = 369;

/*7*/
SELECT film.film_id, film.title, film.description, film.release_year, film.rating, film.special_features, category.name 
AS genre, film.rental_rate
FROM category
JOIN film_category ON category.category_id = film_category.category_id
JOIN film ON film_category.film_id = film.film_id
WHERE film.rental_rate = 2.99 AND category.name = 'Drama';

/*8*/
SELECT actor.actor_id, CONCAT(actor.first_name, " ", actor.last_name) 
as actor_name, film.film_id, film.title, film.description, film.release_year, film.rating, film.special_features, 
category.name as genre
FROM actor
JOIN film_actor ON actor.actor_id = film_actor.actor_id
JOIN film ON film.film_id = film_actor.film_id
JOIN film_category ON film.film_id = film_category.film_id
JOIN category ON film_category.category_id = category.category_id
WHERE actor.first_name = 'SANDRA'
AND actor.last_name = 'KILMER'
AND category.name = 'Action'