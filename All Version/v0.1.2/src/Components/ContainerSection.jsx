export default function ContainerSection(props) {
    return (
        <>
            <div
                className={`container ps-4 ps-md-0 ${props.class}`}
                id={props.id}>
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-start">
                        {props.children}
                    </div>
                </div>
            </div>
        </>

    )
}