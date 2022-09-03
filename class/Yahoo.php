<?php

/**
 *  Yahoo! Finance API
 *  Version 1.0
 *
 *  This methods retrieving stock values and financial informations from Yahoo! Finance.
 *  See: http://developer.yahoo.com/usagePolicy/
 *
 *  Copyright (c) Matthias Brusdeylins, 2008  (http://brusdeylins.info)
 *  License: 
 *  http://www.brusdeylins.info/license/GPL-License.txt
 *  CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
 *
 * 	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *  ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *  WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 *  DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 *  ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 *  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 *  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 *  ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 *  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 *  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 *  Change-Log:
 * 
 *  0.5     31.03.2008 - First release
 *  0.6     06.04.2008 - Function code list completed
 *  1.0     04.05.2008 - Zend-Framework package structure integrated
 */

/**
 * @category   Finance
 * @package    Finance_API
 * @copyright  Copyright (c) Matthias Brusdeylins, 2008  (http://brusdeylins.info)
 * @license    http://www.brusdeylins.info/license/GPL-License.txt     CC-GNU GPL
 */
class Finance_API_Yahoo
{
    
    /**
     * known value tags
     */
    protected $_FUNCTION_CODES = array(
        
        "a" => "Ask Precio de Compra " , 
        "a0" => "Ask (sometimes)" , 
        "a3" => "Ask" , 
        "a4" => "Ask (sometimes)" , 
        "b2" => "Ask" , 
        "a2" => "-unknown-" , 
        "a2" => "Average Daily Volume" , 
        "a5" => "Ask Size" ,  // result is comma separated !
        "b" => "Bid (sometimes)" , 
        "b0" => "Bid (sometimes)" , 
        "b1" => "Bid" , 
        "b3" => "Bid" , 
        "b4" => "Book Value" , 
        "b6" => "Bid Size" ,  // result is comma separated !
        "c" => "Change & Percent Change" , 
        "c0" => "Change & Percent Change" , 
        "c2" => "Change & Percent Change" , 
        "q1" => "Change & Percent Change" , 
        "c1" => "Change" , 
        "c6" => "Change" , 
        "c7" => "Change" , 
        "c3" => "Commission" , 
        "c4" => "Currency" , 
        "c5" => "-unknown-" , 
        "c8" => "After Hours Change" , 
        "d" => "Dividend/Share" , 
        "d0" => "Dividend/Share" , 
        "d1" => "Last Trade Date" , 
        "d2" => "Trade Date" , 
        "d3" => "Last Trade Date (text)" , 
        "e" => "Earnings/Share" , 
        "e0" => "Earnings/Share" , 
        "e1" => "Error Indication (returned for symbol changed / invalid)" , 
        "e2" => "-unknown-" , 
        "e3" => "-unknown-" , 
        "e4" => "-unknown-" , 
        "e7" => "EPS Estimate Current Year" , 
        "e8" => "EPS Estimate Next Year" , 
        "e9" => "EPS Estimate Next Quarter" , 
        "f6" => "Float Shares" ,  // result is comma separated !
        "g" => "Day's Low" , 
        "g0" => "Day's Low" , 
        "g1" => "Holdings Gain Percent" , 
        "g3" => "Annualized Gain" , 
        "g4" => "Holdings Gain" , 
        "g6" => "Holdings Gain" , 
        "g5" => "Holdings Gain Percent" , 
        "h" => "Day's High" , 
        "h0" => "Day's High" , 
        "i" => "More Info" , 
        "i0" => "More Info" , 
        "i2" => "-unknown-" , 
        "i3" => "-unknown-" , 
        "i4" => "-unknown-" , 
        "i5" => "Order Book" , 
        "i6" => "-unknown-" , 
        "i7" => "Last Trade (Price Only)" , 
        "l1" => "Last Trade (Price Only)" , 
        "l7" => "Last Trade (Price Only)" , 
        "l9" => "Last Trade (Price Only)" , 
        "q2" => "Last Trade (Price Only)" , 
        "v2" => "Last Trade (Price Only)" , 
        "y2" => "Last Trade (Price Only)" , 
        "j" => "52-week Low" , 
        "j0" => "52-week Low" , 
        "j1" => "Market Capitalization" , 
        "j2" => "Shares Outstanding" ,  // result is comma separated !
        "j3" => "-unknown-" , 
        "j4" => "EBITDA" , 
        "j5" => "Change From 52-week Low" , 
        "j6" => "Percent Change From 52-week Low" , 
        "k" => "52-week High" , 
        "k0" => "52-week High" , 
        "k1" => "Last Trade (With -unknwon-)" , 
        "l8" => "Last Trade (With -unknwon-)" , 
        "k2" => "Change Percent (With -unknwon-)" , 
        "k3" => "Last Trade Size" ,  // result is comma separated !
        "k4" => "Change From 52-week High" , 
        "k5" => "Percebt Change From 52-week High" , 
        "l" => "Last Trade (With Date)" , 
        "l0" => "Last Trade (With Date)" , 
        "n1" => "Last Trade (With Date)" , 
        "n5" => "Last Trade (With Date)" , 
        "y1" => "Last Trade (With Date)" , 
        "l2" => "High Limit" , 
        "l3" => "Low Limit" , 
        "l4" => "-unknown-" , 
        "l5" => "-unknown-" , 
        "l6" => "-unknown-" , 
        "m" => "Day's Range" , 
        "m0" => "Day's Range" , 
        "m1" => "-unknown-" , 
        "m2" => "-unknown- (Day?) Range" , 
        "m3" => "50-day Moving Average" , 
        "m4" => "200-day Moving Average" , 
        "m5" => "Change From 200-day Moving Average" , 
        "m6" => "Percent Change From 200-day Moving Average" , 
        "m7" => "Change From 50-day Moving Average" , 
        "m8" => "Percent Change From 50-day Moving Average" , 
        "n" => "Name" , 
        "n0" => "Name" , 
        "n2" => "-unknown-" , 
        "n3" => "-unknown-" , 
        "n4" => "Notes" , 
        "o" => "Open" , 
        "o0" => "Open" , 
        "o1" => "-unknown-" , 
        "o2" => "-unknown-" , 
        "o4" => "-unknown-" , 
        "o5" => "-unknown-" , 
        "p" => "Previous Close" , 
        "p0" => "Previous Close" , 
        "p8" => "Previous Close" , 
        "p1" => "Price Paid" , 
        "p2" => "Change in Percent" , 
        "p4" => "Change in Percent" , 
        "p3" => "-unknown-" , 
        "p5" => "Price/Sales" , 
        "p9" => "Price/Sales" , 
        "p6" => "Price/Book" , 
        "q" => "Ex-Dividend Date" , 
        "q0" => "Ex-Dividend Date" , 
        "r" => "P/E Ratio" , 
        "r0" => "P/E Ratio" , 
        "r1" => "Dividend Pay Date" , 
        "r2" => "-unknown-" , 
        "r5" => "PEG Ratio" , 
        "r6" => "Price/EPS Estimate Current Year" , 
        "r7" => "Price/EPS Estimate Next Year" , 
        "r9" => "-unknown-" , 
        "s" => "Symbol" , 
        "s0" => "Symbol" , 
        "s2" => "Symbol" , 
        "s4" => "Symbol" , 
        "s1" => "Shares Owned" , 
        "s3" => "-unknown-" , 
        "s6" => "Revenue" , 
        "s7" => "Short Ratio" , 
        "t1" => "Last Trade Time" , 
        "t3" => "-unknown-" , 
        "t4" => "-unknown-" , 
        "t5" => "-unknown-" , 
        "t7" => "Ticker Trend" , 
        "t8" => "1 yr Target Price" , 
        "v" => "Volume" , 
        "v0" => "Volume" , 
        "v6" => "Volume" , 
        "v1" => "Holdings Value" , 
        "v3" => "-unknown-" , 
        "v4" => "-unknown-" , 
        "v5" => "-unknown-" , 
        "v7" => "-unknown-" , 
        "w" => "52-week Range" , 
        "w0" => "52-week Range" , 
        "w1" => "Day's Value Change" , 
        "w4" => "-unknown-" , 
        "x" => "Stock Exchange" , 
        "x0" => "Stock Exchange" , 
        "y" => "Dividend Yield" , 
        "y0" => "Dividend Yield"
    );


    /**
     * returns the Description of a known function code
     * 
     * @return 		the Description of a known function code
     * @param $code function code
     */
    public function getFunctionCodeDescription ($code)
    {
        return $this->_FUNCTION_CODES[$code];
    }


    /**
     * returns the Description of a known function code
     * 
     * @return the Description of a known function code
     */
    public function getFunctionCodes ()
    {
        return $this->_FUNCTION_CODES;
    }


    /**
     * LOAD QUOTES
     * Reading multible lines of current quotes into an array depending on the given symbols and function tags.
     * Each line holds the values of one symbol. In the argument, symbols are separated by "+".
     * 
     * Result:
     * 		@return two dimentional array with requested values
     * 
     * Parameters:
     * 		@param $symbol 	symbol for the requested share
     * 		@param $tags 	a string containing Yahoo! Finance value tags
     */
    public function loadQuotes ($symbol, $tags)
    {
		
		
//$request = 'http://finance.google.com/finance?q='. $codigoValor. '&ei='.$ei;		

 $URL = 'http://finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f='.$tags.'&e=.csv';


       
        $lineCount = 0;
        $stocks = array( "CSCO" => "CISCO " , "KO" => "COCACOLA" , "MSFT" => "MICROSOFT"                          , "BA" => "The Boeing Company" );
        
        // load the stock quotes: we are opening it for reading
        // http://finance.yahoo.com/d/quotes.csv?s=  STOCK SYMBOLS  &f=  VALUE TAGS
      //  $URL = QUOTES_URL . "s=$symbol&f=$tags&e=.csv";
        $fileHandle = fopen($URL, "r");
        
        if ($fileHandle) {
            // use the fgetcsv function to store quote values into an array $lineValues
            // one symbol in one line
            do {
                $stockValues = fgetcsv($fileHandle, 9999, ",");
                if ($stockValues) {
                    $lineCount ++;
                    $stocks[$lineCount] = $stockValues;
                }
            } while ($stockValues);
            
            fclose($fileHandle);
        } else {
            // ERROR-Message in the array
            $stocks[0][0] = "ERROR";
            $stocks[0][1] = "No data found.";
        }
        
        return $stocks;
    }


    /**
     * LOAD HISTORICAL QUOTES
     * Getting historical quotes in a given time period with following columns:
     * Date, Open, High, Low, Close, Volume, Adj Close
     * 
     * Result:
     * 		@return two dimensional array with historical quotes 
     * 
     * Parameters:
     * 		@param $symbol 		Symbol for the requested share
     * 		@param $startDay 	the first day for the historical quotes
     * 		@param $startMonth 	the month of the first day for the historical quotes
     * 		@param $startYear 	the year of the first day for the historical quotes
     * 		@param $endDay 		the last day for the historical quotes
     *		@param $endMonth 	the month of the last day for the historical quotes
     * 		@param $endYear 	the year of the last day for the historical quotes
     * 		@param $step 		d=daily, w=weekly, m=monthly, v=dividends
     */
    public function loadHistoricalQuotes ($symbol, $startDay, $startMonth, $startYear, $endDay, $endMonth, $endYear, $step)
    {
        define("HISTORY_QUOTES_URL", "http://ichart.yahoo.com/table.csv?");
        $lineCount = 0;
        $days = array(
        )
        ;
        
        // modify parameters
        $sM = $startMonth - 1;
        $eM = $endMonth - 1;
        
        // load the historical stock quotes: we are opening it for reading
        // http://ichart.yahoo.com/table.csv?s=  SYMBOL.COUNTRY  &a,b,c START $d,e,f ENDE $g d=daily/w=weekly/m=monthly/v=dividends
        $URL = HISTORY_QUOTES_URL . "s=$symbol&a=$sM&b=$startDay&c=$startYear&d=$eM&e=$endDay&f=$endYear&g=$step&y=0&ignore=.cvs";
        $fileHandle = fopen($URL, "r");
        
        $firstLineIgnored = false;
        if ($fileHandle) {
            // use the fgetcsv function to store quote values into a array $lineValues
            // store one symbol in one line
            do {
                $stockValues = fgetcsv($fileHandle, 9999, ",");
                if ($stockValues) {
                    if ($firstLineIgnored) {
                        $lineCount ++;
                        $days[$lineCount] = $stockValues;
                    } else {
                        $firstLineIgnored = true;
                    }
                }
            
            } while ($stockValues);
            
            // close handle 
            fclose($fileHandle);
        } else {
            // ERROR-Message in the array
            $days[0][0] = "ERROR";
            $days[0][1] = "No data found.";
        }
        
        return $days;
    }

}
?>