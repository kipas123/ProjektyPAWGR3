<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.
namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {
    
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->op = getFromRequest('op');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
                    getMessages()->addError('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
                    getMessages()->addError('Nie podano liczby 2');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (!getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
                            getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
                            getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}
		
		return !getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			switch ($this->form->op) {
				case '5' :
					if (inRole('admin')) {
						$this->result->result = (int)(($this->form->x*1.05) / $this->form->y);
					} else {
						getMessages()->addError('Tylko administrator może wykonać tę operację');
					}
					break;
				case '10' :
					if (inRole('admin')) {
						$this->result->result = (int)(($this->form->x*1.10) / $this->form->y);
					} else {
						getMessages()->addError('Tylko administrator może wykonać tę operację');
					}
					break;
				case '15' :
					if (inRole('admin')) {
						$this->result->result = (int)(($this->form->x*1.15) / $this->form->y);
					} else {
						getMessages()->addError('Tylko administrator może wykonać tę operację');
					}
					break;
                                case '20' :
					if (inRole('admin')) {
						$this->result->result = (int)(($this->form->x*1.20) / $this->form->y);
					} else {
						getMessages()->addError('Tylko administrator może wykonać tę operację');
					}
					break;
				default :
					$this->result->result = (int)(($this->form->x*1.05) / $this->form->y);
					break;
			}
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
		public function action_calcShow(){
		$this->generateView();
	}
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
                getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Przykład 05');
		getSmarty()->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		getSmarty()->assign('page_header','Obiekty w PHP');
	
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc.tpl');
	}
}
