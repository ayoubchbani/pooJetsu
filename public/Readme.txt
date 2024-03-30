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

