<?php // no direct access
/**
 * @Author		I am Bored So I Blog
 * @version		1.0
 * @copyright	Theo van der Sluijs / IAMBOREDSOIBLOG.eu
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * 
 * We ask a download fee of 1 euro.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/
defined('_JEXEC') or die('Restricted access'); ?>

<?php
$linked_img = "http://www.linkedin.com/img/webpromo/";
echo '<div style="text-align: center;">';
	echo '<a href="'.$LinkInUrl .'">';
		echo '<img src="'.$linked_img.$LinkInBadge.'" border="0" alt="'.$LinkInDescription.'" />';
	echo '</a>';
echo'</div>';
?>