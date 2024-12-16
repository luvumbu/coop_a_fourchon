// Assurez-vous que la connexion utilise l'encodage UTF-8

<?
$databaseHandler->action_sql('SET NAMES utf8mb4');

// Préparer la requête SQL pour éviter l'injection SQL
$query = 'UPDATE `projet` SET `id_user_projet` = ? WHERE `id_sha1_projet` = ?';

// Préparer la requête
$stmt = $databaseHandler->prepare($query);

// Bind des paramètres pour la requête préparée
$stmt->bind_param('ss', $value, '173428039917'); // 'ss' signifie que les 2 paramètres sont des chaînes de caractères

// Exécuter la requête
$stmt->execute();

// Vérifier si l'exécution a réussi
if ($stmt->affected_rows > 0) {
    echo "Mise à jour réussie.";
} else {
    echo "Aucune modification effectuée ou erreur.";
}

// Fermer la requête préparée
$stmt->close();
