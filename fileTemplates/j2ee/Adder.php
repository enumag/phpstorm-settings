/** */
public function ${METHOD_NAME}(${TYPE_HINTED_PARAM}): void
{
#if (${IS_DOCTRINE_COLLECTION} == "doctrine")
    $this->${FIELD_NAME}->add(${PARAM_NAME});
#else
    $this->${FIELD_NAME}[] = ${PARAM_NAME};
#end
}
