 @if(Auth::getUser()->verif == 0)
                                                        <td>
 <form method="post" action="/home/{{Auth::getUser()->id}}">
<input type="submit"  class="btn btn-info btn-sm"  name="update" value="activer">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
                      </td>           
@endif


