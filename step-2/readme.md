# Step 2 (MySQL Query)

## 1. Seleziona gli utenti che hanno postato almeno un video
```sql

SELECT DISTINCT `users`.`id`,`users`.`username`, `medias`.`type` AS `media_type`, `media_post`.`created_at`
FROM `users`
JOIN `medias`
ON `medias`.`user_id`=`users`.`id`
JOIN `media_post`
ON `media_post`.`media_id`=`medias`.`id`
WHERE `medias`.`type`='video';

```

## 2. Seleziona tutti i post senza Like (13)

```sql

SELECT `posts`.`id` AS `post_id`, `posts`.`title`, `likes`.`post_id`
FROM `posts`
LEFT JOIN likes
ON `posts`.`id` = `likes`.`post_id`
WHERE `likes`.`post_id` IS NULL;

```

## 3. Conta il numero di like per ogni post (165)

```sql

SELECT `posts`.`id` AS `post_id`, COUNT(`likes`.`post_id`) AS `likes`
FROM `posts`
LEFT JOIN `likes`
ON `likes`.`post_id` = `posts`.`id`
GROUP BY `posts`.`id`;


```

## 4. Ordina gli utenti per il numero di media caricati (25) 


```sql

SELECT COUNT(`id`) AS `uploaded_media`, `user_id` FROM `medias` GROUP BY `user_id`;


```


## 5. Ordina gli utenti per totale di likes ricevuti nei loro posts (25) 

```sql

SELECT `users`.`id`, `users`.`username`, COUNT(`likes`.`post_id`) AS `received_likes`
FROM users
JOIN likes 
ON `users`.`id` = `likes`.`user_id`
GROUP BY `users`.`id`
ORDER BY `received_likes` DESC;

```