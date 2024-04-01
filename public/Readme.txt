1 Enum ->Des proprieté static Pour bien structurer le code
    1.1 Class se remplace avec 'enum'
    1.2 à la place de 'public const' TEST_ENUM = "test" on peut utiliser 'case'
        exemple : 
        ---------
            namespace Class\Enums;

                    class OfficeStatut {

                    public const APPROVAL_PENDING = "en attente";
                    public const APPROVAL_APPROVED = "approuvée";
                    public const APPROVAL_REJECTED = "rejetée";
                }
                devient : 
                --------
                namespace Class\Enums;

                    enum OfficeStatut: string {

                    case APPROVAL_PENDING = "en attente";
                    case APPROVAL_APPROVED = "approuvée";
                    case APPROVAL_REJECTED = "rejetée";
                }
    
    1.3 Et après on peut l'appeler partout dans le code après l'importation de la class ou bien l'Enum

___________________________________________________________________________________________________________________

Héritage 
mot clé 'final' == > Pour ne pas remplacer les methode ou bien la class (stoper heritage)

___________________________________________________________________________________________________________________
Abstract : 

mot clé 'abstract' ====> 
0 . Une classe abstraite est une classe qui peut contenir des méthodes abstraites (c'est-à-dire des méthodes déclarées sans corps). Elle peut également contenir des méthodes concrètes avec une implémentation.
1 . si on met 'abstract' dans la declaration de la class (avant le mot 'class') en stop l'instenciation donc on ne peut pas faire apres une instanciation
    de cette classe

2 . si on met 'abstract' avant la declaration d'une methode cela siginifie que on oblige à la classe enfant qui herite de déclarer cette function (forcerment de creer un function qui prend le nom de la function abstract)
3 . Class parent donne la signature quelle doit respecter par class enfant (public , returnType(string,void,array....) , les parametres)

    exemple : 
    --------
        abstract public function marque():string ;
___________________________________________________________________________________________________________________
Interface : 

1 . les interface represente une notion tres important sur la poo et permet de realiser des contrat avec les class
2 . les interface passe au class qu'elle doivent obligatoirement implémenter comme méthode et Elle ne fournit aucune implémentation de ces méthodes,seulement leur signature.
3 .  On ne peut déclarer des methode avex private ou protected toujours public