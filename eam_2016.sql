-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 10:08 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eam_2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `idDocuments` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `publicationDate` date NOT NULL,
  `returnDate` date DEFAULT NULL,
  `libName` varchar(45) NOT NULL,
  `useridLended` int(11) DEFAULT NULL,
  `isLended` int(1) UNSIGNED ZEROFILL NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`idDocuments`, `title`, `type`, `author`, `publicationDate`, `returnDate`, `libName`, `useridLended`, `isLended`, `image`, `description`) VALUES
(1, 'Ψυχομετρία', 'paper', 'Alexopoulos', '2017-01-01', '2016-02-27', 'Φιλοσοφική', 7, 1, 'https://cdn.ianos.gr/media/catalog/product/cache/1/image/650x650/17f82f742ffe127f42dca9de82fb58b1/4/8/485e0cf2-f595-4103-9143-0a56c2f453a7_12.jpg', 'Ο ανά χείρας τόμος είναι μια ολοκληρωμένη και πολύ αναλυτική εργασία πάνω στο αντικείμενο της Ψυχομετρίας. Ειδικότερα, στο Α'' Μέρος πραγματεύεται τα βασικά θέματα που αφορούν τον σχεδιασμό των τεστ, την ιστορία, τις ψυχομετρικές θεωρίες και την ανάλυση των ερωτήσεων, στο Β'' Μέρος εξετάζει τις γενικές αρχές -αξιοπιστία, εγκυρότητα, τυπικοί βαθμοί-στάθμιση κλιμάκων κ.τ.λ.- και στο Γ'' Μέρος περιγράφει δύο σχετικές έρευνες. Στο τέλος επισυνάπτονται βιβλιογραφία, λεξιλόγιο αγγλικών όρων ψυχομετρίας μεταφρασμένων στα ελληνικά, καθώς και ευρετήριο όρων. Σε αυτή τη νεότερη, συμπληρωμένη και βελτιωμένη έκδοση, εκτός από τις βελτιώσεις, έχουν προστεθεί νέα κεφάλαια. Όλα τα θέματα αναλύονται διεξοδικά με σαφή, περιεκτικό και κατανοητό τρόπο, βοηθώντας τόσο αυτούς που ασχολούνται με την έρευνα όσο και εκείνους που χορηγούν, βαθμολογούν και ερμηνεύουν τα τεστ ώστε να εμπλουτίσουν τις γνώσεις τους. Η προσοχή εστιάζεται κυρίως στη λογική που διέπει τη μέτρηση, έτσι ώστε οι ψυχολόγοι και οι εκπαιδευτικοί να είναι σε θέση να αξιολογούν και να κρίνουν αν τα διάφορα τεστ ικανοποιούν τα ψυχομετρικά κριτήρια. Παράλληλα γίνεται προσπάθεια να διαπιστωθούν οι ιδιότητες και οι ικανότητες των ατόμων με την εφαρμογή αξιόπιστων μεθόδων, έτσι ώστε να επιτευχθεί η αξιοκρατία - πρωτεύον αίτημα κάθε σύγχρονης κοινωνίας. (Από την παρουσίαση στο οπισθόφυλλο του βιβλίου)'),
(2, 'Ψυχομετρία', 'paper', 'Alexopoulos', '2011-01-01', '2016-01-24', 'Φιλοσοφική', 1, 1, 'https://cdn.ianos.gr/media/catalog/product/cache/1/image/650x650/17f82f742ffe127f42dca9de82fb58b1/4/8/485e0cf2-f595-4103-9143-0a56c2f453a7_12.jpg', 'Ο ανά χείρας τόμος είναι μια ολοκληρωμένη και πολύ αναλυτική εργασία πάνω στο αντικείμενο της Ψυχομετρίας. Ειδικότερα, στο Α'' Μέρος πραγματεύεται τα βασικά θέματα που αφορούν τον σχεδιασμό των τεστ, την ιστορία, τις ψυχομετρικές θεωρίες και την ανάλυση των ερωτήσεων, στο Β'' Μέρος εξετάζει τις γενικές αρχές -αξιοπιστία, εγκυρότητα, τυπικοί βαθμοί-στάθμιση κλιμάκων κ.τ.λ.- και στο Γ'' Μέρος περιγράφει δύο σχετικές έρευνες. Στο τέλος επισυνάπτονται βιβλιογραφία, λεξιλόγιο αγγλικών όρων ψυχομετρίας μεταφρασμένων στα ελληνικά, καθώς και ευρετήριο όρων. Σε αυτή τη νεότερη, συμπληρωμένη και βελτιωμένη έκδοση, εκτός από τις βελτιώσεις, έχουν προστεθεί νέα κεφάλαια. Όλα τα θέματα αναλύονται διεξοδικά με σαφή, περιεκτικό και κατανοητό τρόπο, βοηθώντας τόσο αυτούς που ασχολούνται με την έρευνα όσο και εκείνους που χορηγούν, βαθμολογούν και ερμηνεύουν τα τεστ ώστε να εμπλουτίσουν τις γνώσεις τους. Η προσοχή εστιάζεται κυρίως στη λογική που διέπει τη μέτρηση, έτσι ώστε οι ψυχολόγοι και οι εκπαιδευτικοί να είναι σε θέση να αξιολογούν και να κρίνουν αν τα διάφορα τεστ ικανοποιούν τα ψυχομετρικά κριτήρια. Παράλληλα γίνεται προσπάθεια να διαπιστωθούν οι ιδιότητες και οι ικανότητες των ατόμων με την εφαρμογή αξιόπιστων μεθόδων, έτσι ώστε να επιτευχθεί η αξιοκρατία - πρωτεύον αίτημα κάθε σύγχρονης κοινωνίας. (Από την παρουσίαση στο οπισθόφυλλο του βιβλίου)'),
(3, 'Ψυχομετρία', 'paper', 'Alexopoulos', '2011-01-01', '2016-02-27', 'Φιλοσοφική', 7, 0, 'https://cdn.ianos.gr/media/catalog/product/cache/1/image/650x650/17f82f742ffe127f42dca9de82fb58b1/4/8/485e0cf2-f595-4103-9143-0a56c2f453a7_12.jpg', 'Ο ανά χείρας τόμος είναι μια ολοκληρωμένη και πολύ αναλυτική εργασία πάνω στο αντικείμενο της Ψυχομετρίας. Ειδικότερα, στο Α'' Μέρος πραγματεύεται τα βασικά θέματα που αφορούν τον σχεδιασμό των τεστ, την ιστορία, τις ψυχομετρικές θεωρίες και την ανάλυση των ερωτήσεων, στο Β'' Μέρος εξετάζει τις γενικές αρχές -αξιοπιστία, εγκυρότητα, τυπικοί βαθμοί-στάθμιση κλιμάκων κ.τ.λ.- και στο Γ'' Μέρος περιγράφει δύο σχετικές έρευνες. Στο τέλος επισυνάπτονται βιβλιογραφία, λεξιλόγιο αγγλικών όρων ψυχομετρίας μεταφρασμένων στα ελληνικά, καθώς και ευρετήριο όρων. Σε αυτή τη νεότερη, συμπληρωμένη και βελτιωμένη έκδοση, εκτός από τις βελτιώσεις, έχουν προστεθεί νέα κεφάλαια. Όλα τα θέματα αναλύονται διεξοδικά με σαφή, περιεκτικό και κατανοητό τρόπο, βοηθώντας τόσο αυτούς που ασχολούνται με την έρευνα όσο και εκείνους που χορηγούν, βαθμολογούν και ερμηνεύουν τα τεστ ώστε να εμπλουτίσουν τις γνώσεις τους. Η προσοχή εστιάζεται κυρίως στη λογική που διέπει τη μέτρηση, έτσι ώστε οι ψυχολόγοι και οι εκπαιδευτικοί να είναι σε θέση να αξιολογούν και να κρίνουν αν τα διάφορα τεστ ικανοποιούν τα ψυχομετρικά κριτήρια. Παράλληλα γίνεται προσπάθεια να διαπιστωθούν οι ιδιότητες και οι ικανότητες των ατόμων με την εφαρμογή αξιόπιστων μεθόδων, έτσι ώστε να επιτευχθεί η αξιοκρατία - πρωτεύον αίτημα κάθε σύγχρονης κοινωνίας. (Από την παρουσίαση στο οπισθόφυλλο του βιβλίου)'),
(4, 'Μαθηματική ανάλυση', 'book', 'Rassias', '2014-01-01', '2016-02-03', 'Θετικές Επιστήμες', 0, 1, 'http://www.simmetria.gr/wp-content/uploads/2015/11/mathimatiki-analisi-2-rassias.jpg', 'Το βιβλίο «Μαθηματική Ανάλυση Ι» αναφέρεται στην ύλη που διδάσκονται οι φοιτητές του πρώτου εξαμήνου στις διάφορες σχολές του Ε.Μ. Πολυτεχνείου και γενικότερα των ελληνικών πανεπιστημίων. [. . .] Έμφαση δοθηκε στην κατανόηση των εννοιών που εισάγονται, στις αποδείξεις των βασικών θεωρημάτων και σε πολλά παραδείγματα, αλλά και σε λυμένες χαρακτηριστικές ασκήσεις σταδιακά αυξανόμενης δυσκολίας. (ΑΠΟ ΤΗΝ ΠΑΡΟΥΣΙΑΣΗ ΣΤΟ ΟΠΙΣΘΟΦΥΛΛΟ ΤΟΥ ΒΙΒΛΙΟΥ)'),
(5, 'Μαθηματική ανάλυση', 'book', 'Rassias', '2014-01-01', '2016-01-31', 'Θετικές Επιστήμες', 5, 1, 'http://www.simmetria.gr/wp-content/uploads/2015/11/mathimatiki-analisi-2-rassias.jpg', 'Το βιβλίο «Μαθηματική Ανάλυση Ι» αναφέρεται στην ύλη που διδάσκονται οι φοιτητές του πρώτου εξαμήνου στις διάφορες σχολές του Ε.Μ. Πολυτεχνείου και γενικότερα των ελληνικών πανεπιστημίων. [. . .] Έμφαση δοθηκε στην κατανόηση των εννοιών που εισάγονται, στις αποδείξεις των βασικών θεωρημάτων και σε πολλά παραδείγματα, αλλά και σε λυμένες χαρακτηριστικές ασκήσεις σταδιακά αυξανόμενης δυσκολίας. (ΑΠΟ ΤΗΝ ΠΑΡΟΥΣΙΑΣΗ ΣΤΟ ΟΠΙΣΘΟΦΥΛΛΟ ΤΟΥ ΒΙΒΛΙΟΥ)'),
(6, 'Διακριτα Μαθηματικά', 'book', 'Liu', '2013-01-01', '2016-02-27', 'Θετικές Επιστήμες', 7, 1, 'http://www.cup.gr/Images/Products/STOIXEIA_DIAKRITON_MATHIMATIKON.jpg', 'Ο όρος «διακριτά μαθηματικά» δηλώνει μια πληθώρα θεμάτων όπως Συνδυαστική Aνάλυση, Θεωρία Γραφημάτων, πεπερασμένες άλγεβρες Boole, πεπερασμένες ομάδες και δακτυλίους κ.ά. Γνώση πολλών από αυτά είναι αναγκαία προαπαίτηση για την κατανόηση της θεωρίας του Yπολογισμού, της θεωρίας Πιθανοτήτων αλλά και πολλών άλλων κλάδων της επιστήμης. Tο σύγγραμμα αυτό είναι από τα γνωστότερα διεθνώς πανεπιστημιακά βιβλία στο αντικείμενο και περιλαμβάνει μια μεγάλη ποικιλία θεμάτων και πλήθος ασκήσεων. Aπευθύνεται κυρίως στον αναγνώστη που θέλει να ανακαλύψει τη γνώση μόνος του. O πλούτος του κόσμου των διακριτών ποσοτήτων παρουσιάζεται μέσα από το παιχνίδι και το παράδειγμα. H μαθηματική τυποποίηση έρχεται ως αποτέλεσμα της ανάπτυξης της διαίσθησης μέσα από τη μελέτη των συγκεκριμένων ειδικών περιπτώσεων. Tα κεφάλαια είναι κατά το δυνατόν αυτοδύναμα, ώστε η μελέτη ενός αντικειμένου να μην προϋποθέτει τη γνώση πολλών άλλων.'),
(7, 'Εισαγωγή στη βιοχημεία', 'paper', 'Georgatsos', '2013-01-01', '2016-02-03', 'Θετικές Επιστήμες', 7, 1, 'http://www.bookstation.gr/datafiles/17250l.jpg', 'Βιοχημεία είναι η χημεία της ζωής. Για να καταλάβουμε, επομένως, το αντικείμενο της βιοχημείας θα πρέπει να ορίσουμε τη ζωή. Και εδώ αρχίζουν οι δυσκολίες! Η ζωή έχει οριστεί από τους αρχαίους ''Ελληνες μέχρι σήμερα κατά διάφορους τρόπους. ''Ετσι, υπάρχουν ορισμοί που είναι πολύ απλουστευτικοί, όπως λ.χ. ζωή είναι η περίοδος μεταξύ γέννησης και θανάτου (Cairns-Smith), ζωή είναι η αναπαραγωγή με διόρθωση λαθών (Barrow και Tipler2), ζωή είναι ένα σύνολο που προκαθορίζεται από τα μέρη του (Coleridge, βλ.1). Υπάρχουν και σύνθετοι ορισμοί (που βέβαια είναι πιο κοντά στην πραγματικότητα) όπως -ζωή είναι η ικανότητα ενός συστήματος, να συντηρεί τον εαυτό του σε μια κατάσταση μακριά από ισορροπία, να αναπτύσσεται και να πολλαπλασιάζεται, με τη βοήθεια συνεχούς ροής ενέργειας και ύλης που παρέχει το περιβάλλον (De Duve). Ο Αριστοτέλης θεωρούσε ότι ένα πράγμα έχει ζωή όταν μπορεί να θρέψει τον εαυτό του, να αναπτυχθεί και να αποσυντεθεί. Ο συγγραφέας αυτού του βιβλίου προτιμά τον ορισμό του μεγάλου Γερμανού φυσικοχημικού Manfred Eigen που όρισε τη ζωή ως μια δυναμική κατάσταση της ύλης που είναι οργανωμένη με πληροφορία. Με βάση τον ορισμό αυτόν, αντικείμενο της Βιοχημείας είναι το μέρος εκείνο της ύλης του φυσικού κόσμου που το χαρακτηρίζουν δύο ιδιότητες: (α) Η οργάνωση, που σημαίνει ότι το ζωντανό σύστημα πρέπει να έχει μια συγκεκριμένη φυσική και λειτουργική συγκρότηση η οποία είναι επαναλήψιμη και όχι τυχαία. Αυτό οφείλεται ακριβώς στην ύπαρξη της πληροφορίας που καθορίζει το είδος της συγκρότησης. (β) Η δυναμική κατάσταση που σημαίνει ότι οι διεργασίες που γίνονται μέσα στη συγκροτημένη αυτή ύλη δεν βρίσκονται σε ισορροπία αλλά τείνουν μόνο προς το σημείο ισορροπίας. Συστήματα που έχουν έλθει σε ισορροπία δεν είναι ζωντανά (ένα ψόφιο ζώο, ένα κομμένο λουλούδι).[...] (από την εισαγωγή του βιβλίου)'),
(8, 'Νεοελληνική Φιλολογία', 'book', 'Mastrodimitris', '1996-01-01', '2016-02-27', 'Φιλοσοφική', 7, 1, 'http://www.bookstars.gr/Resources/Books/Images/9789603531258.jpg', 'Συνεχίζοντας από την κατακλείδα του προλόγου της προηγούμενης έκδοσης (και αποδεχόμενος το «περιέργως» ευχάριστο μειονέκτημα της μερικής επανάληψης), σημειώνω ότι, τριάντα χρόνια μετά την έκδοση της σύντομης πρώτης μορφής του, το βιβλίο αυτό επαληθεύει την προσδοκία μου του 1974 ότι θα απέβαινε ένα μόνιμο και ισοδύναμα προσφιλές «παράλληλο» των άλλων συγγραφικών ασχολιών μου και θα συνόδευε τη μεγαλύτερη περίοδο της πανεπιστημιακής μου θητείας (που άρχισε το 1959 και έληξε το 2001). Οφείλω ευγνωμοσύνη σε όλες τις αντικειμενικές συνθήκες που συνέβαλαν στην επαλήθευση. Στην παρούσα έκδοση: γίνεται εκτεταμένη αναδιάταξη και συμπλήρωση των στοιχείων για τη νεώτερη και τη σύγχρονη πεζογραφία στο κεφάλαιο Δ'' του Πρώτου Μέρους· προστίθενται ορισμένα «προσωπογραφικά» στοιχεία στο κεφάλαιο Α'' του Δεύτερου Μέρους· προστίθεται το κεφάλαιο (Η'') «Θεωρία της Λογοτεχνίας» στο Τρίτο Μέρος· και εμπλουτίζονται γενικά τα βιβλιογραφικά λήμματα του Μέρους αυτού (όπως και η βιβλιογραφία ολόκληρου του τόμου). Μικρές διορθώσεις ή τροποποιήσεις επιφέρονται σε όλη την έκταση του κειμένου της Εισαγωγής. [...] (Από την παρουσίαση της έκδοσης)'),
(9, 'Αστικό δίκαιο: επιτομή', 'book', 'Papasteriou', '2010-01-01', NULL, 'Νομική', NULL, 0, 'http://www.plus4u.gr/images/108/108079914.jpg', 'Στο παρόν έργο παρουσιάζεται συγκεντρωμένη όλη η ύλη του Αστικού δίκαιου σε μορφή περιληπτική. Η μορφή του Αστικού Δικαίου έχει μερικά βασικά χαρακτηριστικά: Δίνει βαρύτητα στις Γενικές Αρχές του Αστικού Δικαίου, και ακολουθούν σε ανάπτυξη το Ενοχικό και το Εμπράγματο, καθώς και το Οικογενειακό και το Κληρονομικό. Η κατανομή της ύλης και η παρουσίασή της γίνονται με γνώμονα το ενδιαφέρον που θα έχει κάθε κοινωνός του δικαίου. Η προσφυγή σε άρθρα του Αστικού Κώδικα κρίθηκε απαραίτητη, άλλοτε με αναπαραγωγή του κειμένου των σχετικών διατάξεων και άλλοτε με απλή αναφορά του αριθμού του οικείου άρθρου. Το κείμενο συνοδεύεται από πίνακα περιεχομένων και από ένα «αναπτυγμένο» λημματικό ευρετήριο. Τόσο το πρώτο όσο και το δεύτερο καλούνται να βοηθήσουν τον αναγνώστη στη ξενάγησή του στο πεδίο του Αστικού Δικαίου. '),
(10, 'Χριστιανισμός και έρως', 'book', 'Sherrard', '1994-01-01', NULL, 'Θεολογική', NULL, 0, 'http://www.bookland.gr/uploads/book_images/84000/84945.jpg', 'In spite of the fact that marriage is recognized as a sacrament by the Church, the attitude of Christian thought towards the sexual relationship and its spiritualizing potentialities has been in practice singularly limited and negative. From the start Christian authors have been ill at ease with the whole subject. Sexual activity tended to be seen as a sign of man''s sinful and degenerate state and the modern Christian is taught to distinguish between love in the New Testament sense -agape- and "eros", and to see "eros" as a debased form of "agape", if not actually opposed to it. All in all, the Church has done scant justice to its insight that sexual love is, at least potentially, a sacrament. In this concise yet challenging work Philip Sherrard does not provide a systematic theology of sexual love but indicates some of the considerations and principles that must be taken into account before such a theology can be adequately formulated. His four essays are entitled "The Sexual Relationship in Christian Thought", "The Body, Beauty, and Sexuality", "Towards a Theology of Sexual Love", and "An Approach to the Sacrament of Marriage". A theology that encompasses the spiritual potential of sexual love is even more urgently needed now than it was when this book was first published some 20 years ago, for distorted views are still continuing to produce their casualties. [...] (From the publisher)');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `idLibraries` int(11) NOT NULL,
  `libName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `telNum` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `department` varchar(45) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`idLibraries`, `libName`, `address`, `telNum`, `email`, `website`, `department`, `description`, `map`) VALUES
(1, 'Φιλοσοφική', 'Πανεπιστημιούπολη', 2107272132, 'psychologia@lib.uoa.gr', 'lib.uoa.gr', 'Φιλοσοφική', 'Η βιβλιοθήκη της Φιλοσοφικής περιέχει βιβλία, περιοδικά, εφημερίδες, άρθρα κ.α. με τις εξής θεματικές ενότητες: Λαογραφία, Βυζαντινή και Νεοελληνική Φιλολογία, Γερμανική γλώσσα και φιλολογία, Σλαβικές σπουδές, Αρχαιολογία και ιστορία της τέχνης, Ιστορία, Κλασσική φιλολογία, Θεατρική φιλολογία, Ψυχολογία, Γαλλική γλώσσα και φιλολογία, Αγγλική γλώσσα και φιλολογία, Φιλοσοφία, Γλωσσολογία, Μουσική, Παιδαγωγική, Ιταλική & Ισπανική γλώσσα και φιλολογία. ', 'https://www.google.gr/maps/place/National+and+Kapodistrian+University+of+Athens/@37.9682002,23.7764984,17z/data=!3m1!4b1!4m2!3m1!1s0x14a1bd3a2dbf1ac5:0x9437dcc2e294da4d'),
(2, 'Θετικές Επιστήμες', 'Πανεπιστημιούπολη', 2107276524, 'sci@lib.uoa.gr', 'www.lib.uoa.gr/sci', 'Πληροφορική', 'Η βιβλιοθήκη της Σχολής Θετικών Επιστημών περιέχει βιβλία, περιοδικά, εφημερίδες, άρθρα κ.α. με τις εξής θεματικές ενότητες: Βιολογία, Γεωλογία και Γεωπεριβάλλον, Μαθηματικά, Πληροφορική και Τηλεπικοινωνίες, Φαρμακευτική, Φυσική και Χημεία. ', 'https://www.google.gr/maps/place/%CE%A4%CE%BC%CE%AE%CE%BC%CE%B1+%CE%A0%CE%BB%CE%B7%CF%81%CE%BF%CF%86%CE%BF%CF%81%CE%B9%CE%BA%CE%AE%CF%82+%CE%BA%CE%B1%CE%B9+%CE%A4%CE%B7%CE%BB%CE%B5%CF%80%CE%B9%CE%BA%CE%BF%CE%B9%CE%BD%CF%89%CE%BD%CE%B9%CF%8E%CE%BD/@37.9685626,23.7657261,17z/data=!4m2!3m1!1s0x14a197e10ffd248b:0x9e1a1dd511c44165?hl=en'),
(3, 'Νομική', 'Ιπποκράτους 33', 2103688371, 'dimdikaiou@lib.uoa.gr', 'www.lib.uoa.gr/law', 'Νομική', 'Η βιβλιοθήκη της Νομικής Σχολής περιέχει βιβλία, περιοδικά, εφημερίδες, άρθρα κ.α. με τις εξής θεματικές ενότητες: Γενικές αρχές, Εμπράγματο δίκαιο, Ενοχικό δίκαιο, Οικογενειακό δίκαιο, Κληρονομικό δίκαιο  και Δίκαιο  πνευματικής ιδιοκτησίας συνιστούν το κυριώτερο μέρος της συλλογής,  ενώ τα τελευταία χρόνια αναπτύσσονται και συλλογές σχετικές με το Δίκαιο περιβάλλοντος, το Ιατρικό δίκαιο, το Αθλητικό δίκαιο, το Δίκαιο πληροφορικής, και το Τραπεζικό δίκαιο και η μικρή συλλογή "Δίκαιο και Λογοτεχνία" .', 'https://www.google.gr/maps/place/Nomiki+Vivliothiki+S.A./@37.9837078,23.7282197,15.16z/data=!4m5!1m2!2m1!1zzrLOuc6yzrvOuc6_zrjOt866zrcgzr3Ov868zrnOus63IM65z4DPgM6_zrrPgc6xz4TOv8-Fz4IgMzM!3m1!1s0x14a1bd365c2dbde9:0x501bcbc227173163'),
(4, 'Θεολογική', 'Πανεπιστημιούπολη', 2107275781, 'theologiki@lib.uoa.gr', '', 'Θεολογική', 'Η βιβλιοθήκη της Θεολογικής Σχολής περιέχει βιβλία, περιοδικά, εφημερίδες, άρθρα κ.α. με τις εξής θεματικές ενότητες: Θεολογία, Θρησκειολογία, Εκκλησιαστικη Ιστορία, Ιστορία Ελλάδος, Ιεραποστολική, Ποιμαντική, Κατηχητική, Κανονικό Δίκαιο, Φιλοσοφία, Δογματική, Χριστιανική Κοινωνιολογία, Παλαιογραφία, Φιλοσοφία, Ψυχολογία, Χριστιανική Αρχαιολογία .', 'https://www.google.gr/maps?q=%CE%B2%CE%B9%CE%B2%CE%BB%CE%B9%CE%BF%CE%B8%CE%AE%CE%BA%CE%B7+%CE%B8%CE%B5%CE%BF%CE%BB%CE%BF%CE%B3%CE%B9%CE%BA%CE%AE&biw=1366&bih=691&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiB4JO6-8nKAhUDdCwKHcIQDU4Q_AUICCgC'),
(5, 'Επιστήμες Υγείας', 'Μικράς Ασίας και Δήλου 1', 2107461400, 'epistigias@lib.uoa.gr', '', 'Ιατρική', 'Η βιβλιοθήκη της Σχολής Επιστημών Υγείας περιέχει βιβλία, περιοδικά, εφημερίδες, άρθρα κ.α. με τις εξής θεματικές ενότητες:Ιατρική, Νοσηλευτική, Οδοντιατρική, Ανατομία, Φυσιολογία, Βιοχημεία, Φαρμακολογία, Μικροβιολογία. Ανοσολογία, Παρασιτολογία, Κλινική Παθολογία, Παθολογική Ανατομία. ', 'https://www.google.gr/maps/place/Mikras+Asias+ke+Dilou,+Athina+115+27/@37.9834066,23.7639574,17z/data=!3m1!4b1!4m2!3m1!1s0x14a197ffa98dea2f:0x333464357aa3ab4d');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `username`, `surname`, `email`, `department`, `name`, `password`) VALUES
(1, 'nmpegetis', 'Begetis', 'nmpegetis@di.uoa.gr', 'Φιλοσοφική', 'Nikos', 11111111),
(2, 'kelraheb', 'Elraheb', 'kelraheb@di.uoa.gr', 'Θεολογική', 'Katerina', 2),
(3, 'vkatifori', 'Katifori', 'vkatifori@di.uoa.gr', 'Νομική', 'Vivi', 33333333),
(4, 'sbaltzi', 'Baltzi', 'sbaltzi@di.uoa.gr', 'Ιατρική', 'Sofia', 44444444),
(5, 'yioannidis', 'Ioannidis', 'yioannidis@di.uoa.gr', 'Πληροφορική', 'Yannis', 55555555),
(6, 'lpapadopoulos', 'Papadopoulos', 'lpapad@di.uoa.gr', 'Πληροφορική', 'Labis', 66666666),
(7, 'gatzxr', 'gatzis', 'gatzis89@yahoo.gr', 'plirfo', 'xris', 0),
(8, 'gatzxr2', 'gatzisx', 'gatzisdsds89@yahoo.gr', '2222', 'xristos', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`idDocuments`),
  ADD UNIQUE KEY `idDocuments_UNIQUE` (`idDocuments`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`idLibraries`),
  ADD UNIQUE KEY `idLibraries_UNIQUE` (`idLibraries`),
  ADD UNIQUE KEY `telNum_UNIQUE` (`telNum`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`,`email`),
  ADD UNIQUE KEY `idUsers_UNIQUE` (`idUsers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `idDocuments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `idLibraries` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
