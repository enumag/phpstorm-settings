/** */
public function ${METHOD_NAME}(${TYPE_HINTED_PARAM}): void
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->removeElement(${PARAM_NAME});
#else
    $key = array_search(${PARAM_NAME}, $this->${FIELD_NAME}, true);
    if ($key !== false) {
        array_splice($this->${FIELD_NAME}, $key, 1);
    }
#end
}
