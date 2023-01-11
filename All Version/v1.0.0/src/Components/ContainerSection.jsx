import Loader from "./Loader"
export default function ContainerSection(props) {
    return (
        <>
            <div
                className={`container ps-4 ps-md-0 ${props.class}`}
                id={props.id}>
                <div className="row">
                    <div className="col-md-12 col-sm-12 text-start">
                    <Loader width={"100%"} height={"100%"}>
                        {props.children}
                        </Loader>
                    </div>
                </div>
            </div>
        </>

    )
}