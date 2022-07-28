# Dictionnaire de données

## Portfolio (`portfolio`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|user_id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre user|
|name&firstName|VARCHAR(128)|NOT NULL|Le nom & prénom|
|email|VARCHAR(255)|NOT NULL|l'adresse email|
|phone|CHAR(10)|NOT NULL|le numéro de téléphone|
|message|VARCHAR(500)|NOT NULL|le message|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du message|
